<?php

/**
 * Team: RedHackers,NKU
 * Coding by yii2, 20170704
 * This is created by yii2.
 */

return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
        ],
    ],
];
