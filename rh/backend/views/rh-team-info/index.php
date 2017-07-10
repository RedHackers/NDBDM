<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhTeamInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Team Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-team-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<p>
        <?= Html::a('Create Rh Team Info', ['create'], ['class' => 'btn btn-success']) ?>
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
            <?= $form->field($searchModel, 'team_name')->textInput(['maxlength' => true])->label('team name') ?>
        </div> 

        <div class = "col-lg-3">
            <?= $form->field($searchModel, 'team_num')->textInput(['maxlength' => true])->label('team num') ?>    
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'team_dir')->textInput(['maxlength' => true])->label('team dir') ?> 
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'team_motto')->textInput(['maxlength' => true])->label('team motto') ?>
        </div>  

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'team_intro')->textInput(['maxlength' => true])->label('team intro') ?>
        </div> 

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'team_intro')->textInput(['maxlength' => true])->label('team intro') ?>
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

            'team_name',
            'team_num',
            'team_dir',
            'team_motto',
            'team_pic',
            // 'team_intro:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
