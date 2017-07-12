<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity info view of backend web.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityInfo */

$this->title = $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-activity-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->activity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->activity_id], [
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
            'activity_name',
            'activity_detail:ntext',
            'activity_pic',
            'activity_id',
        ],
    ]) ?>

</div>
