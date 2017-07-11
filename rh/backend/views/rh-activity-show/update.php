<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity display of frontend web.
 */
=======
>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1

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
