<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhTeamInfo */

$this->title = 'Create Rh Team Info';
$this->params['breadcrumbs'][] = ['label' => 'Rh Team Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-team-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
