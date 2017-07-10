<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhInfoLink */

$this->title = 'Create Rh Info Link';
$this->params['breadcrumbs'][] = ['label' => 'Rh Info Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-info-link-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
