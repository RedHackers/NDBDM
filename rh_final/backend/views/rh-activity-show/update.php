<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity show update of backend web.
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityShow */

$this->title = 'Update Rh Activity Show: ' . ' ' . $model->activity_show_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Shows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_show_id, 'url' => ['view', 'id' => $model->activity_show_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-activity-show-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
