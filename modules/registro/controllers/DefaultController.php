<?php

namespace app\modules\registro\controllers;

use yii\web\Controller;
use app\models\Documentos;
use Yii;
use yii\web\HttpException;
use app\modules\registro\query\Query;
use yii\web\UploadedFile;
use app\models\FormUpload;
use yii\helpers\Url;
use app\models\Archivos;
use app\models\HojaRuta;
use app\components\Utils;
use app\models\Areas;
use yii\filters\AccessControl;

/**
 * Default controller for the `registro` module
 */
class DefaultController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'crear'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $model = new FormUpload();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstances($model, 'file');

            if ($model->file && $model->validate()) {
                foreach ($model->file as $file) {
                    $file->saveAs(Url::to('@app/modules/registro/documentos') . '/' . $file->baseName . '.' . $file->extension);
                }
            }
        }

        $area = Areas::find()->all();
        return $this->render("index", [
                    "model" => $model,
                    "area" => $area
        ]);
    }

    public function actionCrear() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            $model = new FormUpload();

            $documento = new Documentos();
            $documento->numero = Query::generarNumero();
            $documento->asunto = $post["asunto"];
            $documento->descripcion = $post["descripcion"];
            $documento->id_area = $post["area"];
            $documento->estado = 1;

            try {
                if (!$documento->save()) {
                    throw new HttpException("No se puede guardar datos documento");
                }

                $hojaRuta = new HojaRuta();
                $hojaRuta->id_documento = $documento->id_documento;
                $hojaRuta->id_area_origen = 1;
                $hojaRuta->id_area_destino = 2;
                $hojaRuta->id_estado = 1;
                $hojaRuta->fecha = Utils::getFechaActual();
                $hojaRuta->id_usuario_reg = Yii::$app->user->getId();
                $hojaRuta->flg_activo = 1;

                if (!$hojaRuta->save()) {
                    throw new HttpException("No se puede guardar hojas de ruta");
                }

                $model->file = UploadedFile::getInstances($model, 'file');

                $flg = 1;
                if ($model->file && $model->validate()) {
                    foreach ($model->file as $file) {
                        $file->saveAs(Url::to('@app/modules/registro/documentos') . '/' . $file->baseName . '.' . $file->extension);
                        $archivo = new Archivos();
                        $archivo->id_documento = $documento->id_documento;
                        $archivo->nombre = $file->baseName . '.' . $file->extension;
                        $archivo->ruta = Url::to('@web/modules/registro/documentos') . '/' . $file->baseName . '.' . $file->extension;
                        $archivo->flg_tipo = $flg;
                        $archivo->estado = 1;

                        if (!$archivo->save()) {
                            throw new HttpException("No se puede guardar datos archivo");
                        }
                        $flg = 0;
                    }
                }

                $transaction->commit();
            } catch (Exception $ex) {
                $transaction->rollback();
            }

            $this->redirect(['default/index']);
        } else {
            throw new HttpException(404, 'The requested Item could not be found.');
        }
    }

}
