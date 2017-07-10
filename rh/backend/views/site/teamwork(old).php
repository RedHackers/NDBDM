<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>团队：RedHackers</h1>
    <p>
        团队成员：李 想 (1511376)<br>
        团队成员：崔立骁(1511366)<br>
        团队成员：贾靖宇(1511372)<br>
        团队成员：周 睿 (1511388)
    </p>
    <br/>
    <div class="row">
        <div class="col-lg-5">
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/需求文档.pdf" ?> >需求文档</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/设计文档.pdf" ?> >设计文档</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/实现文档.pdf" ?> >实现文档</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/用户手册.pdf" ?> >用户手册</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/项目展示PPT" ?> >项目展示PPT</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/源码" ?> >
            源码</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/数据库文件" ?> >数据库文件</a></h4>
            <h4><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/部署文档.pdf" ?> >部署文档</a></h4>
        </div>
    </div>
</div>