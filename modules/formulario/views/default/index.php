<?php
$this->title = 'Registro';

use yii\widgets\ActiveForm;
use app\modules\formulario\bundles\FormularioAsset;

$bundle = FormularioAsset::register($this);
?>

<div class="login-container bg-white">
    <div class="p-l-50 p-r-50 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <h2 class="p-t-25">Registro <br/> Mesa de Partes Virtual</h2>
        <br>
        <p class="mw-80 m-t-5">Ingrese sus datos</p>
        <!-- START Login Form -->

        <?php
        $form = ActiveForm::begin([
                    'action' => Yii::$app->urlManager->createUrl("formulario/default/registro"),
                    'id' => 'registroForm',
        ]);
        ?>
        <div class="form-group form-group-default required ">
            <label>Dni</label>
            <input type="text" class="form-control" required name="dni">
        </div>
        <div class="form-group form-group-default required ">
            <label>Nombres</label>
            <input type="text" class="form-control" required name="nombres">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-group-default required">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" required name="apellido_paterno">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-group-default required">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" name="apellido_materno">
                </div>
            </div>
        </div>
        <div class="form-group form-group-default required">
            <label>Correo</label>
            <input type="email" class="form-control" required name="correo">
        </div>
        <div class="form-group form-group-default required">
            <label>Contraseña</label>
            <input type="password" class="form-control" required name="password" id="password">
        </div>
        <div class="form-group form-group-default required">
            <label>Repita contraseña</label>
            <input type="password" class="form-control" required name="password_repite">
        </div>
        <br>
        <div class="form-group">
            <button aria-label="" type="submit" class="btn btn-block btn-primary btn-lg btn-icon-left">
                <span>REGISTRARSE</span>
            </button>
            <a href="<?= Yii::$app->urlManager->createUrl("/login"); ?>" type="submit" class="btn btn-block btn-warning btn-lg btn-icon-left">
                <span>CANCELAR</span>
            </a>
        </div>
        <?php ActiveForm::end(); ?>

        <!--END Login Form-->
        <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                <div class="col-sm-9 no-padding m-t-10">
                    <p class="small-text normal hint-text">
                        ©2020 Todos los derechos reservados. Universidad Tecnológica del Peru. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
