<?php

namespace app\modules\bandeja\controllers;

use yii\web\Controller;
use app\modules\bandeja\query\Query;
use app\models\Documentos;
use app\models\Archivos;
use app\models\Areas;
use app\models\HojaRuta;
use yii\web\HttpException;
use Yii;
use app\components\Utils;
use yii\helpers\Url;

/**
 * Default controller for the `bandeja` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $idArea = Yii::$app->user->identity->id_area;
        $data = Query::listaBandeja($idArea);
        return $this->render('index', [
                    "data" => $data
        ]);
    }

    public function actionDocumento($id) {
        $documento = Documentos::findOne($id);
        $archivo = Archivos::find()->where(["id_documento" => $id])->all();
        $area = Areas::find()->all();
        return $this->render('documento', [
                    "data" => $documento,
                    "archivo" => $archivo,
                    "area" => $area
        ]);
    }

    public function actionRecepcionar() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            try {

                $documento = Documentos::findOne($post["idDocumento"]);
                $documento->estado = 2;

                if (!$documento->save()) {
                    Utils::show($documento->getErrors(), true);
                    throw new HttpException("No se puede guardar datos Tipo Empresa");
                }

                $hoja = HojaRuta::findOne(Query::getIdHojaRuta($post["idDocumento"]));
                $hoja->flg_activo = 0;

                if (!$hoja->save()) {
                    Utils::show($hoja->getErrors(), true);
                    throw new HttpException("No se actualizar hoja");
                }

                $hojaRuta = new HojaRuta();
                $hojaRuta->id_documento = $documento->id_documento;
                $hojaRuta->id_area_origen = $hoja->id_area_origen;
                $hojaRuta->id_area_destino = $hoja->id_area_destino;
                $hojaRuta->id_estado = 2;
                $hojaRuta->fecha = Utils::getFechaActual();
                $hojaRuta->id_usuario_reg = Yii::$app->user->getId();
                $hojaRuta->flg_activo = 1;

                if (!$hojaRuta->save()) {
                    Utils::show($hojaRuta->getErrors(), true);
                    throw new HttpException("No se puede guardar hoja de ruta");
                }

                if ($hoja->id_area_origen == 1) {
                    static::firmar($documento->id_documento);
                }

                $transaction->commit();
            } catch (Exception $ex) {
                Utils::show($ex, true);
                $transaction->rollback();
            }

            echo json_encode($documento->id_documento);
        } else {
            throw new HttpException(404, 'The requested Item could not be found.');
        }
    }

    public function actionDerivar() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            $documento = Documentos::findOne($post["idDocumento"]);
            $documento->estado = 1;

            try {
                if (!$documento->save()) {
                    Utils::show($documento->getErrors(), true);
                    throw new HttpException("No se puede guardar datos Tipo Empresa");
                }

                $hoja = HojaRuta::findOne(Query::getIdHojaRuta($post["idDocumento"]));
                $hoja->flg_activo = 0;

                if (!$hoja->save()) {
                    Utils::show($hoja->getErrors(), true);
                    throw new HttpException("No se actualizar hoja");
                }

                $hojaRuta = new HojaRuta();
                $hojaRuta->id_documento = $documento->id_documento;
                $hojaRuta->id_area_origen = $hoja->id_area_destino;
                $hojaRuta->id_area_destino = $post["area"];
                $hojaRuta->id_estado = 3;
                $hojaRuta->fecha = Utils::getFechaActual();
                $hojaRuta->id_usuario_reg = Yii::$app->user->getId();
                $hojaRuta->flg_activo = 1;

                if (!$hojaRuta->save()) {
                    Utils::show($documento->getErrors(), true);
                    throw new HttpException("No se puede guardar datos Tipo Empresa");
                }

                $transaction->commit();
            } catch (Exception $ex) {
                $transaction->rollback();
            }

            $this->redirect(['/bandeja']);
        } else {
            throw new HttpException(404, 'The requested Item could not be found.');
        }
    }

    public static function firmar($id) {
        $pdf = new \FPDI();
        $archivo = Archivos::find()->where(["id_documento" => $id, "flg_tipo" => 1])->one();
        $path = Url::to('@app/modules/registro/documentos') . "/" . $archivo->nombre;
        $correo = Query::getCorreo($id);

        $num_hojas = $pdf->setSourceFile($path);

        for ($i = 1; $i <= $num_hojas; $i++) {
            $tpl = $pdf->importPage($i);
            $pdf->AddPage();
            $pdf->useTemplate($tpl);
            if ($i == 1) {
                $pdf->Image(Url::to('@app/modules/registro/documentos') . '/firm.png', 3, 3, 50, "");
            }
        }
        $pdf->Output($path, "F");

        try {
            Yii::$app->mailer->compose()
                    ->setFrom('softwarevalue.pe@gmail.com')
                    ->setTo($correo)
                    ->setSubject('CARGO DE RECEPCIÓN DE DOCUMENTO')
//                        ->setHtmlBody($mensaje)
                    ->attach($path)
                    ->send();
        } catch (Exception $ex) {
            throw new HttpException("Error: " . $ex);
        }
    }

}
