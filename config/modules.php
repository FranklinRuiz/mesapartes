<?php

return [
    'gii' => [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1'],
    ],
    'rbac' => [
        'class' => 'johnitvn\rbacplus\Module',
        'as access' => [
            'class' => 'yii\filters\AccessControl',
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['admin'],
                ],
            ],
        ],
    ],
    'login' => [
        'class' => 'app\modules\login\LoginModule',
    ],
    'gridview' => [
        'class' => 'kartik\grid\Module'
    ],
    'formulario' => [
        'class' => 'app\modules\formulario\Formulario',
    ],
    'registro' => [
        'class' => 'app\modules\registro\Registro',
    ],
    'bandeja' => [
        'class' => 'app\modules\bandeja\Bandeja',
    ],
    'dashboard' => [
        'class' => 'app\modules\dashboard\Dashboard',
    ],
    'seguimiento' => [
        'class' => 'app\modules\seguimiento\Seguimiento',
    ],
    'area' => [
        'class' => 'app\modules\area\Area',
    ],
];
