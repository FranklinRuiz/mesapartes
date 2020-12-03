<?php

namespace app\modules\dashboard\controllers;

use yii\web\Controller;

/**
 * Default controller for the `dashboard` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTotales() {
        $data = \app\modules\dashboard\query\Query::cantidadDocumentos();
        echo json_encode($data);
    }

    public function actionArea() {
        $data = \app\modules\dashboard\query\Query::cantidadDocumentosArea();
        echo json_encode($data);
    }

    public function actionFecha() {
        $data = \app\modules\dashboard\query\Query::cantidadDocumentosFecha();
        echo json_encode($data);
    }

}
