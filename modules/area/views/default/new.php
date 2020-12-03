<?php

use yii\widgets\ActiveForm;
?>
<!-- START card -->
<div class="card card-default">
    <div class="card-body">
        <h4>Registro</h4>
        <?php
        $form = ActiveForm::begin([
                    'action' => Yii::$app->urlManager->createUrl("area/default/crear"),
        ]);
        ?>

        <div class="form-group form-group-default required ">
            <label>Nombre Área</label>
            <input type="text" class="form-control" required name="nombre">
        </div>

        <br>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-primary btn-lg btn-icon-left">
                    <span>REGISTRAR</span>
                </button>
            </div>
            <div class="col-md-6">
                <a href="<?= Yii::$app->urlManager->createUrl("/area"); ?>" class="btn btn-block btn-warning btn-lg btn-icon-left">
                    <span class="">CANCELAR</span>
                </a>
            </div>

        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- END card -->
