<?php

/**
 * Team: RedHackers,NKU
 * Coding by yii2, 20170704
 * This is created by yii2.
 */

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
  /*   'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
            //在原配置的基础上，增加以下配置（新增一个target）
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning','info'],
                'logVars'=>[],
                //表示以yii\db\或者app\models\开头的分类都会写入这个文件
                'categories'=>['yii\db\*','app\models\*'],
                //表示写入到文件sql.log中年月日记录日志
                'logFile'=>'@runtime/../logs/sql/sql.log'.date('Ymd'),
            ],
        ],
    
    ], */
];
