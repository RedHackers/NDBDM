<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-activity-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activity_name') ?>

    <?= $form->field($model, 'activity_detail') ?>

    <?= $form->field($model, 'activity_pic') ?>

    <?= $form->field($model, 'activity_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
