<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NdAdmin */

$this->title = 'Update Nd Admin: ' . $model->adminname;
$this->params['breadcrumbs'][] = ['label' => 'Nd Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adminname, 'url' => ['view', 'id' => $model->adminname]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nd-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
