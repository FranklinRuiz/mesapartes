<?php

namespace app\modules\formulario\bundles;

use yii\web\AssetBundle;

class FormularioAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/formulario/assets';
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