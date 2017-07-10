<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityAttend */

$this->title = 'Create Rh Activity Attend';
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Attends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="contact" id="arrow" class="content-Get-in-touch">
    <!-- container -->
    <div class="container">
        <div class="Get-in-touch-text">
            <span class="portfolio"; style="height:114px; important!"> </span>
        </div>
        <div class="Get-in-touch-grids">
            <div class="col-md-6">

                <div class="rh-activity-attend-create">

    				<h1><?= Html::encode($this->title) ?></h1>

    				<?= $this->render('_form', [
        				'model' => $model,
    				]) ?>

				</div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- // container -->
    </div>
</div>