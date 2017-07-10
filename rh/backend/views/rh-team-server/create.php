<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamServer */

$this->title = 'Create Rh Team Server';
$this->params['breadcrumbs'][] = ['label' => 'Rh Team Servers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-team-server-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
