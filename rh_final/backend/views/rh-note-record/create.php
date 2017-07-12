<?php
/**
 * Team: RedHackers,NKU
 * Coding by Lixiao Cui 1511366, 20170704
 * This is the note record create of backend web.
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhNoteRecord */

$this->title = 'Create Rh Note Record';
$this->params['breadcrumbs'][] = ['label' => 'Rh Note Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-note-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
