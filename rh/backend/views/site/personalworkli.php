<?php
/**
 * Team: RedHackers,NKU
 * Coding by Jingyu Jia 1511372, 20170704
 * This is the activity display of frontend web.
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '个人作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>李想(1511376)</h1>

    <p>
        所属成员：RedHackers,NKU
    </p>
    <br/>
    <div class="row">
        <div class="col-lg-5">
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/personal/李想/作业1(1511376_李想).pdf" ?> >作业1：网页前端初探</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/personal/李想/作业2(1511376_李想).pdf" ?> >作业2：Web前端设计</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/personal/李想/作业3(1511376_李想).pdf" ?> >作业3：开源建站工具初试</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/personal/李想/个人作业(1511376_李想).zip" ?> >下载链接</a></h4>
        </div>
    </div>

</div>
