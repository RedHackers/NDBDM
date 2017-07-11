<?php
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityAttend */

$this->title = 'Update Rh Activity Attend: ' . ' ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Attends', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-activity-attend-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
