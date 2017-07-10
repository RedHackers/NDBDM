<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberInfo */

$this->title = 'Update Rh Member Info: ' . ' ' . $model->member_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_name, 'url' => ['view', 'id' => $model->member_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-member-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
