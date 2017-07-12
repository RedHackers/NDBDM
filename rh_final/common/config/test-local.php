 * This is created by yii2.<?php

/**
 * Team: RedHackers,NKU
 * Coding by yii2, 20170704
 */

return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/main.php'),
    require(__DIR__ . '/main-local.php'),
    require(__DIR__ . '/test.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=yii2advanced_test',
            ]
        ],
    ]
);
