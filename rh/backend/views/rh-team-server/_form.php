<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamServer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-team-server-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'server_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'server_member_num')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
