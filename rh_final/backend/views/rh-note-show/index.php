<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the note show index of backend web.
 */
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\RhNoteShow;
use backend\models\RhNoteRecord;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RhNoteShowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rh Note Shows';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-note-show-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <!--  <p>
        <?= Html::a('Create Rh Note Show', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'note_id',
            'note_show_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> 

    <h2>当前展示留言</h2>
    <div class="row tray-bin pt20 bg-light dark mb50">

                <div class="col-md-6 admin-grid">

                  <div class="panel" id="p7" data-panel-color="panel-info" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 1  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 1,])->one()->note_id; ?>
                      </span>
                    </div>
                    <div class="panel-body">
                       <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 1,])->one()->note_id),
                             ])->one()->note_content; ?></p>

                    </div>
                  </div>

                  <div class="panel" id="p8" data-panel-color="panel-warning" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 3  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 3,])->one()->note_id; ?></span>
                    </div>
                    <div class="panel-body">
                     <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 3,])->one()->note_id),
                             ])->one()->note_content; ?></p>

                    </div>
                  </div>


                  <div class="panel" id="p8" data-panel-color="panel-warning" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 5  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 5,])->one()->note_id; ?></span>
                    </div>
                    <div class="panel-body">
                     <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 5,])->one()->note_id),
                             ])->one()->note_content; ?></p>

                    </div>
                  </div>

                </div>
                <div class="col-md-6 admin-grid">

                  <div class="panel" id="p9" data-panel-color="panel-primary" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 2  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 2,])->one()->note_id; ?></span>
                    </div>
                    <div class="panel-body">
                      <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 2,])->one()->note_id),
                             ])->one()->note_content; ?></p>
                    </div>
                  </div>

                  <div class="panel" id="p10" data-panel-color="panel-alert" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 4  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 4,])->one()->note_id; ?></span>
                    </div>
                    <div class="panel-body">
                      <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 4,])->one()->note_id),
                             ])->one()->note_content; ?></p>

                    </div>
                  </div>


                  <div class="panel" id="p8" data-panel-color="panel-warning" data-panel-fullscreen="false" data-panel-title="false" data-panel-remove="false" data-panel-collapse="false">
                    <div class="panel-heading">
                      <span class="panel-title"> 留言 6  留言id : <?= RhNoteShow::find()->where(['note_show_id' => 6,])->one()->note_id; ?></span>
                    </div>
                    <div class="panel-body">
                     <p><?= RhNoteRecord::find()->where(['note_id' => 
                            (RhNoteShow::find()->where(['note_show_id' => 6,])->one()->note_id),
                             ])->one()->note_content; ?></p>

                    </div>
                  </div>

                </div>
              </div>


</div>
