<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\bundles\TemplateAsset;

$bundle = TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="fixed-header menu-pin menu-behind">
        <?php $this->beginBody() ?>
        <div class="login-wrapper ">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Caption-->
                <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
                    <h1 class="semi-bold text-white">Sistema de mesa de partes virtual </h1>
                </div>
                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <?= $content ?>
            <!-- END Login Right Container-->
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
