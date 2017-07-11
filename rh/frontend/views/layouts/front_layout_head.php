<?php

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\models\RhInfoLink;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<?php $this->beginBody() ?>
	<!-- header-top -->
	<div id="home" class="header-top">
		<!-- container -->
		<div class="container">
			<div class="header-logo">
				<a href="#"><img src="front_assets/images/logo.png" alt=""/></a>
			</div>
			<div class="header-sub-text">
				<h2>南开大学 计算机与控制工程学院 RedHackers 团队.</h2>
				<p>The latest and the most hacking team called RedHackers from Computer and control engineering college, Nankai University.
				<small>Information security and Law.</small></p>
			</div>
		<div class="header-top-grids">
			<div class="col-md-4 about-nav4">
				<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#services" ?> ><span class="nav-icon4"> </span><label>Services</label></a>
			</div>
			<div class="col-md-4 about-nav5">
				<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#portfolio" ?> ><span class="nav-icon5"> </span><label>Activities</label></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-bottom-grids">
			<div class="col-md-6 left-grid text-left">
					<div class="about-nav">
						<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#about"?> ><span class="nav-icon"> </span><label>Team</label></a>
					</div>
					<div class="about-nav1">
						<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#team" ?> ><span class="nav-icon1"> </span><label>Members</label></a>
					</div>
					<div class="clearfix"> </div>				
			</div>
			<div class="col-md-6 right-grid text-right">
					<div class="about-nav2">
						<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#blog" ?> ><span class="nav-icon2"> </span><label>Messages</label></a>
					</div>
					<div class="about-nav3">
						<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#contact" ?> ><span class="nav-icon3"> </span><label>Contact</label></a>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arrow-grid">
			<div class="arrow">
				<a class="scroll" href="#header-nav"><span> </span></a>
			</div>
		</div>
		</div>
		<!-- container -->
	</div>
	<!-- header-top -->
	<!-- header-bottom -->
	<div id="header-nav" class="header-nav">
		 <div class="top-nav">		
			 <nav>
			 <div class="logo">
				<a href="#"><img src="front_assets/images/logo2.png" alt=""/></a>
			 </div>
				<span class="menu"></span>
				<ul><h3>
					<li class="active">
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#home" ?> >HOME&nbsp;&nbsp;</a></li>
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#about"?> >TEAM&nbsp;&nbsp;</a></li>					
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#team" ?> >MEMBERS&nbsp;&nbsp;</a></li>
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#services" ?> >SERVICES&nbsp;&nbsp;</a></li>
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#portfolio" ?> >ACTIVITIES&nbsp;&nbsp;</a></li>
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#blog" ?> >MESSAGES&nbsp;&nbsp;</a></li>
					<a class="scroll" href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record#contact" ?> >CONTACT&nbsp;&nbsp;</a></li>
					<div class="clearfix"> </div>
				</h3></ul>
			 </nav>
		 </div>
		 <script>
		 $("span.menu").click(function(){
		 $(".top-nav ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
	</div>
	<!-- header-bottom -->

	<?php echo $content; ?>
	<!-- 上下分层 -->
<!-- footer 友情链接 -->
<div class="content-portfolio">
	<a href="#"><img src="front_assets/images/ftr.png"></a>
	<p>Copyright &copy; 2017-<?= date("Y") ?>. RedHackers All rights reserved. </p>
	<div align="center">
        <tr>
            <td>
            友情链接：&nbsp;&nbsp;
            <a target="_blank" href= <?= RhInfoLink::find()->where(['link_name' => "南开大学",])->one()->link_url; ?> >南开大学</a>
            &nbsp;|&nbsp;
            <a target="_blank" href= <?= RhInfoLink::find()->where(['link_name' => "南开大学计算机与控制工程学院",])->one()->link_url; ?> >南开大学计算机与控制工程学院</a>
            &nbsp;|&nbsp;
            <a target="_blank" href= <?= RhInfoLink::find()->where(['link_name' => "南开大学数据库与信息系统实验室",])->one()->link_url; ?> >南开大学数据库与信息系统实验室</a>
            &nbsp;|&nbsp;      
            </td>
        </tr>
	</div>
</div>
<!-- // footer 友情链接 -->
	<?php $this->registerJs($this->blocks['js_end'], yii\web\View::POS_LOAD) ?>
 	<!-- 注册js -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
