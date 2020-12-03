<?php

namespace app\modules\seguimiento\controllers;

use yii\web\Controller;
use app\modules\seguimiento\query\Query;
use Yii;

/**
 * Default controller for the `seguimiento` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $idUsuario = Yii::$app->user->getId();
        $data = Query::listaBandeja($idUsuario);
        return $this->render('index', [
                    "data" => $data
        ]);
    }

    public function actionSeguimiento($id) {
        $data = Query::seguimientoDocumento($id);
        return $this->render('seguimiento', [
                    "data" => $data
        ]);
    }

}
