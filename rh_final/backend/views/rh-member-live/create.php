<?php
/**
 * Team: RedHackers,NKU
 * Coding by Rui Zhou 1511388, 20170704
 * This is the member live create of frontend web.
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberLive */

$this->title = 'Create Rh Member Live';
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Lives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-live-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
