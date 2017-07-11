<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the teamwork of backend web. 
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Search List -->
             <div class="panel" id="p17">
                 <h1>团队：RedHackers</h1>
                  <p>
                  团队成员：李 想 (1511376)<br>
                  团队成员：崔立骁(1511366)<br>
                  团队成员：贾靖宇(1511372)<br>
                  团队成员：周 睿 (1511388)
                  </p>
                  <div class="panel-heading">
                    <span class="panel-title">作业列表</span>
                  </div>
                  <div class="panel-body pn">
                    <table class="table mbn tc-med-1 tc-bold-last">
                      <thead>
                        <tr class="hidden">
                          <th>#</th>
                          <th>First Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="favicons google va-t mr10"></span>需求文档</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/需求文档.pdf" ?> >点击预览</a></h6></td>
                        </tr>
                        <tr>
                          <td>
                            <span class="favicons yahoo va-t mr10"></span>设计文档</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/设计文档.pdf" ?> >点击预览</a></h6></td>
                        </tr>
                        <tr>
                          <td>
                            <span class="favicons google va-t mr10"></span>实现文档</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/实现文档.pdf" ?> >点击预览</a></h6></td>
                        </tr>
                        <tr>
                          <td>
                            <span class="favicons bing va-t mr10"></span>用户手册</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/用户手册.pdf" ?> >点击预览</a></h6></td>
                        </tr>
                         <tr>
                          <tr>
                          <td>
                            <span class="favicons google va-t mr10"></span>项目展示ppt</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/项目展示ppt" ?> >下载链接</a></h6></td>
                        </tr>
                             <tr>
                          <td>
                            <span class="favicons yahoo va-t mr10"></span>源码</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/源码.zip" ?> >下载链接</a></h6></td>
                        </tr>
                         <tr>
                          <td>
                            <span class="favicons google va-t mr10"></span>数据库文件</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/数据库文件.sql" ?> >下载链接</a></h6></td>
                        </tr>
                         <tr>
                          <td>
                            <span class="favicons bing va-t mr10"></span>部署文档</td>
                          <td><h6><a href= <?= dirname(dirname(Yii::$app->getHomeUrl())) . "/data/team/部署文档.pdf" ?> >点击预览</a></h6></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 