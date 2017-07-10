<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberLive */

$this->title = 'Update Rh Member Live: ' . ' ' . $model->member_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Lives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_name, 'url' => ['view', 'member_name' => $model->member_name, 'live_pic_id' => $model->live_pic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-member-live-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
