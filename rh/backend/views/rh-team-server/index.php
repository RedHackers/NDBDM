<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the rh_team_server's index of backend web. 
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhTeamServerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Rh Team Servers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-team-server-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <p>
        <?= Html::a('Create Rh Team Server', ['create'], ['class' => 'btn btn-success']) ?>
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
        <div class = "col-lg-4">
            <?= $form->field($searchModel, 'server_name')->textInput(['maxlength' => true])->label('server name') ?>
    
        </div> 

        <div class = "col-lg-4">
            <?= $form->field($searchModel, 'server_member_num')->textInput(['maxlength' => true])->label('server member num') ?>
    
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
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'server_name',
            'server_member_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  

</div>
