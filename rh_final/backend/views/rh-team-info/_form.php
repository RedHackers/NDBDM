<?php
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the team info form of backend web.
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rh-team-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'team_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_num')->textInput() ?>

    <?= $form->field($model, 'team_dir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_motto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_intro')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
