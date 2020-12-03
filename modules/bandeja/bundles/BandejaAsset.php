<?php

namespace app\modules\bandeja\bundles;

use yii\web\AssetBundle;

class BandejaAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/bandeja/assets';
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