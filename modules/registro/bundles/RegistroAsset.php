<?php

namespace app\modules\registro\bundles;

use yii\web\AssetBundle;

class RegistroAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/registro/assets';
    public $css = [
        'css/main.css',
    ];

    public $js = [
        'js/main.js',
    ];

    public $depends = [
        'app\bundles\TemplateAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,
    ];

}