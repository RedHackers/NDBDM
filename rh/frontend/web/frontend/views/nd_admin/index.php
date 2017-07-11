<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NdAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nd Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nd-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nd Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adminname',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
