<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the note show of backend web. 
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhNoteRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Note Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-note-record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rh Note Record', ['create'], ['class' => 'btn btn-success']) ?>
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
            <?= $form->field($searchModel, 'user_name')->textInput(['maxlength' => true])->label('username') ?>
        </div> 

        <div class = "col-lg-3">
            <?= $form->field($searchModel, 'note_email')->textInput(['maxlength' => true])->label('note email') ?>    
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'note_content')->textInput(['maxlength' => true])->label('note content') ?> 
        </div>  

           <div class = "col-lg-3">
            <?= $form->field($searchModel, 'note_id')->textInput(['maxlength' => true])->label('note_id') ?>
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

            'user_name',
            'note_email:email',
            'note_content:ntext',
            'note_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
