<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhNoteRecord */

$this->title = 'Update Rh Note Record: ' . ' ' . $model->note_id;
$this->params['breadcrumbs'][] = ['label' => 'Rh Note Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->note_id, 'url' => ['view', 'id' => $model->note_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-note-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
