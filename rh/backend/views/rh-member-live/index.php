<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member display of frontend web.
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhMemberLiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Member Lives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-live-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rh Member Live', ['create'], ['class' => 'btn btn-success']) ?>
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
            <?= $form->field($searchModel, 'live_pic_id')->textInput(['maxlength' => true])->label('live picid') ?>    
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'live_pic')->textInput(['maxlength' => true])->label('live pic') ?> 
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

            'member_name',
            'live_pic_id',
            'live_pic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
