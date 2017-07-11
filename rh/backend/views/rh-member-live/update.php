<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
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
