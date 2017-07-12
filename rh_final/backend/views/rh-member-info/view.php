<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member info view of backend web.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberInfo */

$this->title = $model->member_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->member_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->member_name], [
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
            'member_major',
            'live_pic_id',
            'member_degree',
            'member_duty',
            'member_interest',
            'member_email:email',
            'member_live:ntext',
        ],
    ]) ?>

</div>
