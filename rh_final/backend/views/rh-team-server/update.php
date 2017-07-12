<?php
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the team service update of backend web.
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamServer */

$this->title = 'Update Rh Team Server: ' . ' ' . $model->server_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Team Servers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->server_name, 'url' => ['view', 'id' => $model->server_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rh-team-server-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
