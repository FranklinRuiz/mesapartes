<?php

use yii\widgets\ActiveForm;
use app\modules\registro\bundles\RegistroAsset;

$bundle = RegistroAsset::register($this);
?>
<!-- START card -->
<div class="card card-default">
    <div class="card-body">
        <h4>Registro de documento</h4>
        <?php
        $form = ActiveForm::begin([
                    'action' => Yii::$app->urlManager->createUrl("registro/default/crear"),
                    'id' => 'documento',
                    "options" => ["enctype" => "multipart/form-data"],
        ]);
        ?>

        <div class="form-group form-group-default required ">
            <label>Asunto</label>
            <input type="text" class="form-control" required name="asunto">
        </div>
        <div class="form-group form-group-default required">
            <label>Descripción</label>
            <textarea required class="form-control" style="height: 40px !important;" name="descripcion"></textarea>
        </div>
        <div class="form-group">
            <select class="full-width" data-init-plugin="select2" name="area" required>
                <option value="" selected disabled>Seleccione Area</option>
                <?php foreach ($area as $a) { ?>
                    <option value="<?= $a->id_area ?>"><?= $a->nombre ?></option>
                <?php } ?>
            </select>
        </div>
        <h4>Archivos</h4>
        <?= $form->field($model, "file[]")->fileInput(['class' => 'form-control']) ?>  
        <h4>Anexos</h4>
        <?= $form->field($model, "file[]")->fileInput(['class' => 'form-control']) ?>  
        <?= $form->field($model, "file[]")->fileInput(['class' => 'form-control']) ?>  
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary btn-lg btn-icon-left">
                <span>ENVIAR DOCUMENTO</span>
            </button>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- END card -->
