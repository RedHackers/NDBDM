<?php
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the activity view of backend web.
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityAttend */

$this->title = $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Attends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-activity-attend-view">

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
            'activity_id',
            'member_name',
            'activity_sort',
        ],
    ]) ?>

</div>