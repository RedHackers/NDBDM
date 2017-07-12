<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member info search of backend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-member-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_name') ?>

    <?= $form->field($model, 'member_major') ?>

    <?= $form->field($model, 'live_pic_id') ?>

    <?= $form->field($model, 'member_degree') ?>

    <?= $form->field($model, 'member_duty') ?>

    <?php // echo $form->field($model, 'member_interest') ?>

    <?php // echo $form->field($model, 'member_email') ?>

    <?php // echo $form->field($model, 'member_live') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
