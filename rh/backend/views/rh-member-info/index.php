<?php
<<<<<<< HEAD
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
=======

>>>>>>> a0d61432f20fc8f6e61e693fc5cd043dfc548ee1
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhMemberInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Member Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rh Member Info', ['create'], ['class' => 'btn btn-success']) ?>
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
            <?= $form->field($searchModel, 'member_name')->textInput(['maxlength' => true])->label('member name') ?>
        </div> 

        <div class = "col-lg-3">
            <?= $form->field($searchModel, 'member_major')->textInput(['maxlength' => true])->label('member major') ?>    
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'live_pic_id')->textInput(['maxlength' => true])->label('live picid') ?> 
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'member_degree')->textInput(['maxlength' => true])->label('member degree') ?>
        </div>  

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'member_duty')->textInput(['maxlength' => true])->label('tmember duty') ?>
        </div> 

   <div class = "col-lg-3">
            <?= $form->field($searchModel, 'member_interest')->textInput(['maxlength' => true])->label('member interest') ?>
        </div> 

        <div class = "col-lg-3">
            <?= $form->field($searchModel, 'member_email')->textInput(['maxlength' => true])->label('member email') ?>
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

            'member_name',
            'member_major',
            'live_pic_id',
            'member_degree',
            'member_duty',
             'member_interest',
             'member_email:email',
             'member_live:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>