<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity display of frontend web.
 */
=======
>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-activity-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activity_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activity_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activity_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
