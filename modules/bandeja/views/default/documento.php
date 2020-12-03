<?php

use yii\widgets\ActiveForm;
use app\modules\bandeja\bundles\BandejaAsset;
use yii\helpers\Url;

$bundle = BandejaAsset::register($this);
?>
<!-- START card -->
<div class="card card-default">
    <div class="card-body">
        <h4>Documento N° 0001-2020</h4>
        <?php
        $form = ActiveForm::begin([
                    'action' => Yii::$app->urlManager->createUrl("bandeja/default/derivar"),
                    'id' => 'bandeja-documento',
        ]);
        ?>
        <div class="form-group form-group-default">
            <label>Asunto</label>
            <input type="text" class="form-control" disabled value="<?= $data->asunto ?>">
        </div>
        <div class="form-group form-group-default">
            <label>Descripción</label>
            <textarea required class="form-control" style="height: 40px !important;" disabled><?= $data->descripcion ?></textarea>
        </div>
        <iframe src="<?= str_replace("web/", "", $archivo[0]->ruta) ?>" width="100%" height="600px"></iframe>
        <h4>Anexos</h4>
        <?php foreach ($archivo as $a) { ?>
            <?php if ($a->flg_tipo == 0) { ?>
                <div class="form-group input-group">
                    <input type="text" class="form-control" readonly value="<?= $a->nombre ?>">
                    <div class="input-group-append">
                        <a href="<?= str_replace("web/", "", $a->ruta) ?>" target="_blank" class="input-group-text primary">
                            <i class="pg-icon">menu_add</i>
                        </a>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <input type="hidden" value="<?= $data->id_documento ?>" name="idDocumento" id="idDocumento">
        <?php if ($data->estado != 1) { ?>
            <h4>Derivar</h4>
            <div class="form-group">
                <select class="full-width" data-init-plugin="select2" name="area" required>
                    <option value="" selected disabled>Seleccione Area</option>
                    <?php foreach ($area as $a) { ?>
                        <option value="<?= $a->id_area ?>" <?= ($data->id_area == $a->id_area) ? 'selected' : '' ?>><?= $a->nombre ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
        <br>
        <div class="form-group">
            <?php if ($data->estado == 1) { ?>
                <button type="button" class="btn btn-block btn-primary btn-lg btn-icon-left" id="recepcionar">
                    <span>RECEPCIONAR DOCUMENTO</span>
                </button>
            <?php } else { ?>
                <button type="submit" class="btn btn-block btn-primary btn-lg btn-icon-left">
                    <span>DERIVAR DOCUMENTO</span>
                </button>
            <?php } ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<!-- END card -->
