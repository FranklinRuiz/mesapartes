<?php

namespace app\bundles;

use yii\web\AssetBundle;

class TemplateAsset extends AssetBundle {

    public $sourcePath = '@app/assets';
    public $baseUrl = '@web';
    public $css = [
        'plugins/pace/pace-theme-flash.css',
        'plugins/bootstrap/css/bootstrap.min.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'plugins/jquery-scrollbar/jquery.scrollbar.css',
        'plugins/select2/css/select2.min.css',
        'pages/css/themes/corporate.css',
        'css/style.css',
    ];
    public $js = [
        'plugins/pace/pace.min.js',
        'plugins/liga.js',
        'plugins/jquery/jquery-3.2.1.min.js',
        'plugins/modernizr.custom.js',
        'plugins/jquery-ui/jquery-ui.min.js',
        'plugins/popper/umd/popper.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/jquery/jquery-easy.js',
        'plugins/jquery-unveil/jquery.unveil.min.js',
        'plugins/jquery-ios-list/jquery.ioslist.min.js',
        'plugins/jquery-actual/jquery.actual.min.js',
        'plugins/jquery-scrollbar/jquery.scrollbar.min.js',
        'plugins/select2/js/select2.full.min.js',
        'plugins/classie/classie.js',
        'plugins/jquery-validation/js/jquery.validate.min.js',
        'pages/js/pages.js',
        'js/scripts.js'
    ];
    public $depends = [
        'app\bundles\AppAsset',
    ];

}
