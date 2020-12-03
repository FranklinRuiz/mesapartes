<?php

namespace app\modules\formulario\controllers;

use Yii;
use yii\web\HttpException;
use yii\web\Controller;
use app\models\Personas;
use app\models\Usuarios;

/**
 * Default controller for the `formulario` module
 */
class DefaultController extends Controller {

    public $defaultAction = 'index';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render("index");
    }

    public function actionRegistro() {
        if (Yii::$app->request->post()) {
            $transaction = Yii::$app->db->beginTransaction();

            $post = Yii::$app->request->post();

            $persona = new Personas();
            $persona->dni = $post["dni"];
            $persona->nombres = $post["nombres"];
            $persona->apellido_paterno = $post["apellido_paterno"];
            $persona->apellido_materno = $post["apellido_materno"];

            try {
                if (!$persona->save()) {
                    throw new HttpException("No se puede guardar datos persons");
                }

                $usuario = new Usuarios();
                $usuario->usuario = $persona->dni;
                $usuario->password = Yii::$app->security->generatePasswordHash($post["password"]);
                $usuario->rol = "usuario";
                $usuario->id_persona = $persona->id_persona;
                $usuario->id_area = 1;
                $usuario->correo = $post["correo"];
                $usuario->tipo_usuario = "externo";
                $usuario->estado = 1;

                if (!$usuario->save()) {
                    throw new HttpException("No se puede guardar datos usuario");
                }

                $transaction->commit();
            } catch (Exception $ex) {
                $transaction->rollback();
            }

            $this->redirect(['/']);
        } else {
            throw new HttpException(404, 'The requested Item could not be found.');
        }
    }

    public function actionSucess() {
        return $this->render('sucess');
    }

}
