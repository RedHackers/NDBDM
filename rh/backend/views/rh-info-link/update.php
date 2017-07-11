<?php
<<<<<<< HEAD
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhInfoLink */

$this->title = 'Update Rh Info Link: ' . ' ' . $model->link_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Info Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->link_name, 'url' => ['view', 'id' => $model->link_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-info-link-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
