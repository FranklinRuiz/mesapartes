<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use app\bundles\TemplateAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar sesión';
$this->params['breadcrumbs'][] = $this->title;

$bundle = TemplateAsset::register($this);
?>

<div class="login-container bg-white">
    <div class="p-l-50 p-r-50 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?php echo $bundle->baseUrl ?>/img/logo-48x48_c.png" alt="logo" data-src="<?php echo $bundle->baseUrl ?>/img/logo-48x48_c.png" data-src-retina="<?php echo $bundle->baseUrl ?>/img/logo-48x48_c@2x.png" width="48" height="48">
        <h2 class="p-t-25">Empezar <br/> Mesa de Partes Virtual</h2>
        <p class="mw-80 m-t-5">Iniciar sesión en su cuenta</p>
        <!-- START Login Form -->
        <?php
        $form = ActiveForm::begin([
                    'options' => ['class' => 'p-t-15 ng-pristine ng-valid'],
                    'fieldConfig' => [
                        'template' => "{input}\n{error}",
                    ]
        ]);
        ?>
        <div class="form-group form-group-default">
            <div class="controls">
                <?= $form->field($model, 'usuario')->textInput(['autofocus' => true, 'placeholder' => 'Ingrese usuario o dni']) ?>
            </div>
        </div>

        <div class="form-group form-group-default">
            <div class="controls">
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Contraseña']) ?>
            </div>
        </div>

        <div class="row">
            <?=
            $form->field($model, 'rememberMe', ['options' => ['class' => 'checkbox font-size-13 inline-block no-mrg-vertical no-pdd-vertical']])->checkbox([
                'template' => "{input}\n{label}\n{error}",
            ])
            ?>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <?= Html::submitButton('Ingresar', ['class' => 'btn btn-primary btn-lg m-t-10', 'name' => 'login-button']) ?>
            </div>
        </div>
        <div class="m-b-5 m-t-30">
            <a href="#" class="normal">¿Perdiste tu contraseña?</a>
        </div>
        <div>
            <a href="<?= Yii::$app->urlManager->createUrl("/formulario"); ?>" class="normal">¿No eres miembro todavía? Regístrate ahora.</a>
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
