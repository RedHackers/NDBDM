<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the info link view of backend web.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RhInfoLink */

$this->title = $model->link_name;
$this->params['breadcrumbs'][] = ['label' => 'Rh Info Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-info-link-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->link_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->link_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'link_name',
            'link_url:url',
        ],
    ]) ?>

</div>
