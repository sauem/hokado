<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
        'api' => [
            'class' => 'backend\modules\Api',
        ],
    ],
    'layout' => 'main.blade',
    'components' => [
        'jwt' => [
            'class' => \sizeg\jwt\Jwt::class,
            'key'   => 'secret',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'blade' => [
                    'class' => '\cyneek\yii2\blade\ViewRenderer',
                    'cachePath' => '@runtime/blade_cache',
                ],
            ],
        ],
        'request' => [
            'enableCookieValidation' => true,
            'enableCsrfValidation' => false,
            'cookieValidationKey' => '88i-pzkud4b8eSW8jCa8bkx1C3WablQ8',
            'csrfParam' => '_csrf-backend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '*',
            'rbac/*',
        ]
    ],
    'params' => $params,
];
