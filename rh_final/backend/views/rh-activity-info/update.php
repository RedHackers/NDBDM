<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity info update of backend web.
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityInfo */

$this->title = 'Update Rh Activity Info: ' . ' ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-activity-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
