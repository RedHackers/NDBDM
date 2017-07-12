<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the info link update of backend web.
 */

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
