<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the info link form of backend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhInfoLink */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-info-link-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
