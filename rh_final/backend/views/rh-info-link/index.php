<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the info link index of backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RhInfoLinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Info Links';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-info-link-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rh Info Link', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'link_name',
            'link_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
