<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity info index of backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhActivityInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Activity Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-activity-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rh Activity Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id' => 'search-form',
        'layout' => 'horizontal',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
/*             'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-2\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'], */
            'template' => "{label}\n{beginWrapper}\n{input}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-lg-3',
                //'offset' => 'col-log-offset-4',
                'wrapper' => 'col-lg-8',
                //'error' => '',
                //'hint' => '',
            ],
        ]
    ]); ?>

      <div class = "rows">
        <div class = "col-lg-3">
            <?= $form->field($searchModel, 'activity_name')->textInput(['maxlength' => true])->label('activity name') ?>
        </div> 

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'activity_detail')->textInput(['maxlength' => true])->label('activity detail') ?>
        </div>  

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'activity_pic')->textInput(['maxlength' => true])->label('activity_ ic') ?>
        </div> 

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'activity_id')->textInput(['maxlength' => true])->label('activity id') ?>
        </div> 
</div>
     <div class = "col-lg-4">
            <span class="input-group-btn">
            <?= Html::submitButton('查询', ['class' => 'btn btn-sm btn-success']) ?>
            </span>
            <?php ActiveForm::end(); ?>
            <br/>
        </div> 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activity_name',
            'activity_detail:ntext',
            'activity_pic',
            'activity_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
