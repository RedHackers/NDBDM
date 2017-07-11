<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\NdAdmin */

$this->title = 'Create Nd Admin';
$this->params['breadcrumbs'][] = ['label' => 'Nd Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nd-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
