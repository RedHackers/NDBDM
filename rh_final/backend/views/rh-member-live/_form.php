<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member live form of frontend web.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberLive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-member-live-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'live_pic_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'live_pic')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
