<?php

use app\modules\formulario\bundles\FormularioAsset;

$bundle = FormularioAsset::register($this);
?>
<div class="row">
    <div class="col-md-6">
        <div class="full-height">
            <div class="vertical-align full-height pdd-horizon-70">
                <div class="table-cell">
                    <h1 class="text-dark font-size-80 text-light">¡Muy bien hecho!</h1>
                    <p class="lead lh-1-8">Tus datos fueron registrados con éxito</p>
                    <a href="<?= Yii::$app->urlManager->createUrl("/formulario"); ?>" class="btn btn-warning">Regresar al formulario</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 ml-auto hidden-sm hidden-xs">
        <div class="full-height height-100">
            <div class="vertical-align full-height">
                <div class="table-cell">
                    <img class="img-responsive" src="<?php echo $bundle->baseUrl ?>/img/success.png" alt="">
                </div>
            </div>
        </div>	
    </div>
</div>