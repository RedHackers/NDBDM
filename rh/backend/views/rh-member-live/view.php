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
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberLive */

$this->title = $model->member_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Lives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-live-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'member_name' => $model->member_name, 'live_pic_id' => $model->live_pic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'member_name' => $model->member_name, 'live_pic_id' => $model->live_pic_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'member_name',
            'live_pic_id',
            'live_pic',
        ],
    ]) ?>

</div>
