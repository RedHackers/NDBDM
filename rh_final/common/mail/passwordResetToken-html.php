<?php

/**
 * Team: RedHackers,NKU
 * Coding by yii2, 20170704
 * This is created by yii2.
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>您好， <?= Html::encode($user->username) ?>,</p>

    <p>请点击下面链接进行重置密码:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
