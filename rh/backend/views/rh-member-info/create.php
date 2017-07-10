<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RhMemberInfo */

$this->title = 'Create Rh Member Info';
$this->params['breadcrumbs'][] = ['label' => 'Rh Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rh-member-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
