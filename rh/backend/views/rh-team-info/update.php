<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamInfo */

$this->title = 'Update Rh Team Info: ' . ' ' . $model->team_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Team Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_name, 'url' => ['view', 'id' => $model->team_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-team-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
