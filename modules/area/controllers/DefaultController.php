<?php

namespace app\modules\area\controllers;

use yii\web\Controller;
use app\models\Areas;
use Yii;
use yii\web\HttpException;

/**
 * Default controller for the `area` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $data = Areas::find()->all();
        return $this->render('index', ["data" => $data]);
    }

    public function actionAgregar() {
        return $this->render("new");
    }

    public function actionCrear() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            $area = new Areas();
            $area->nombre = $post["nombre"];

            try {
                if (!$area->save()) {
                    throw new HttpException("No se puede guardar datos area");
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

    public function actionEditar($id) {
        $data = Areas::findOne($id);
        return $this->render("edit", ["data" => $data]);
    }

    public function actionEdit() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            $area = Areas::findOne($post["id_area"]);
            $area->nombre = $post["nombre"];

            try {
                if (!$area->save()) {
                    throw new HttpException("No se puede guardar datos area");
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

    public function actionEliminar($id) {
        Areas::findOne($id)->delete();
        $this->redirect(['default/index']);
    }

}
