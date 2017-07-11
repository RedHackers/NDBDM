<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhInfoLinkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-info-link-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'link_name') ?>

    <?= $form->field($model, 'link_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
