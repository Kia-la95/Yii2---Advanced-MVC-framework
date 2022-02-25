<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'kvgrid' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@vendor/kartik-v/yii2-grid/messages',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule','controller'=>'country'],
            ],
        ],


        'assetManager' => [
            'bundles' => [
                'kartik\form\ActiveFormAsset' => [
                    'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                ],
            ],
        ],
    ],
    'params' => $params,

    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
            // enter optional module parameters below - only if you need to
            // use your own export download action or custom translation
            // message source
            // 'downloadAction' => 'gridview/export/download',
            // 'i18n' => []
        ],

        'gridviewKrajee' =>  [
            'class' => '\kartik\grid\Module',
            // your other grid module settings

        ],

        'controllerMap' => [
            // Common migrations for the whole application
            'migrate-app' => [
                'class' => 'yii\console\controllers\MigrateController',
                'migrationNamespaces' => ['app\migrations'],
                'migrationTable' => 'migration_app',
                'migrationPath' => null,
            ],
            // Migrations for the specific project's module
            'migrate-module' => [
                'class' => 'yii\console\controllers\MigrateController',
                'migrationNamespaces' => ['module\migrations'],
                'migrationTable' => 'migration_module',
                'migrationPath' => null,
            ],
            // Migrations for the specific extension
            'migrate-rbac' => [
                'class' => 'yii\console\controllers\MigrateController',
                'migrationPath' => '@yii/rbac/migrations',
                'migrationTable' => 'migration_rbac',
            ],
        ],


    ],
];
