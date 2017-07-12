<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity info create of backend web.
 */

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhActivityInfo */

$this->title = 'Create Rh Activity Info';
$this->params['breadcrumbs'][] = ['label' => 'Rh Activity Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-activity-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
