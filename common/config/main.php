<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            'cookieParams' => [
                'httpOnly' => true,
                'lifeTime' => 3600 * 24 * 30
            ],
        ],
    ],
];
