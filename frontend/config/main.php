<?php
require __DIR__ . '/const.php';
$rules = require __DIR__ . '/rules.php';
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'vi-VN',
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'components' => [
        'request' => [
            'enableCookieValidation' => true,
            'enableCsrfValidation' => false,
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 't-X35MSnjfnpwc60yDvcbsNisYIJ8pqK',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
        'cache' => [
            #'class' => 'yii\redis\Cache',
            'class' => 'yii\caching\FileCache',
            'keyPrefix' => 'usvn_'
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => REDIS_HOST,
            'port' => REDIS_PORT,
            'password' => REDIS_PASS,
            'database' => 0,
            'retries' => 1,
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                //'site/*',
                //'rbac/*',
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $rules
        ],
    ],
    'params' => $params,
];
