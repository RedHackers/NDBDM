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
				<a class="scroll" href="#services"><span class="nav-icon4"> </span><label>Services</label></a>
			</div>
			<div class="col-md-4 about-nav5">
				<a class="scroll" href="#portfolio"><span class="nav-icon5"> </span><label>Activities</label></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="header-bottom-grids">
			<div class="col-md-6 left-grid text-left">
					<div class="about-nav">
						<a class="scroll" href="#about"><span class="nav-icon"> </span><label>Team</label></a>
					</div>
					<div class="about-nav1">
						<a class="scroll" href="#team"><span class="nav-icon1"> </span><label>Members</label></a>
					</div>
					<div class="clearfix"> </div>				
			</div>
			<div class="col-md-6 right-grid text-right">
					<div class="about-nav2">
						<a class="scroll" href="#blog"><span class="nav-icon2"> </span><label>Messages</label></a>
					</div>
					<div class="about-nav3">
						<a class="scroll" href="#contact"><span class="nav-icon3"> </span><label>Contact</label></a>
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
				<ul>
					<li class="active"><a class="scroll" href="#home">HOME</a></li>
					<li><a class="scroll" href="#about">TEAM</a></li>					
					<li><a class="scroll" href="#team">MEMBERS</a></li>
					<li><a class="scroll" href="#services">SERVICES</a></li>
					<li><a class="scroll" href="#portfolio">ACTIVITIES</a></li>
					<li><a class="scroll" href="#blog">MESSAGES</a></li>
					<li class="contact"><a class="scroll" href="#contact">CONTACT</a></li>
					<div class="clearfix"> </div>
				</ul>
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

	<!-- content -->
	<div class="content">
		<!-- team -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 content-top-grid">					
						<sub> </sub>
						<h3>团队名称</h3>
						<p>南开大学. <br>
							计算机与控制工程学院. <br>
							<?= "rh_team_info['team_name']" ?>.<br>团队.
						</p>					
				</div>
				<div class="col-md-3 content-top-grid">					
						<span> </span>
						<h3>团队成员</h3>
						<p>骨干人员. <br>
							<?= "rh_team_info['team_num']" ?>名. <br>
							Information security and Law.
						</p>					
				</div>
				<div class="col-md-3 content-top-grid">					
						<small> </small>
						<h3>团队方向</h3>
						<p><?= "rh_team_info['team_dir']" ?>.</p>					
				</div>
				<div class="col-md-3 content-top-grid">			
						<big> </big>
						<h3>团队格言</h3>
						<p><?= "rh_team_info['team_motto']" ?>.</p>					
				</div>
			</div>
		</div>
		<!-- team -->
	</div>
	<!-- content -->

	<!-- content-team-intro -->
	<div id="about" class="content-about">
		<!-- container -->
		<div class="container">
			<div class="content-about-text">
				<h2>About <small>us</small></h2>
				<span style="height:114px; important!"> </span>
				<!-- 设置css的优先级最高防止覆盖 -->
			</div>
			<div class="row">
				<div class="col-md-6 content-about-grid-left">
					<img src= <?= "front_assets/images/screen1.png" // "front_assets/images/team/" . rh_team_info['team_pic'] . ".jpg" ?> >
				</div>
				<div class="col-md-6 content-about-grid-right">					
						<p>团队介绍 <?= "rh_team_info['team_intro']" ?></p>
						<div class="learn">
							<a href="#">Learn more</a>
						</div>					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- container -->
		<div class="content-about-bottom">
			<div class="content-about-bottom-text">
				<img src="front_assets/images/quote.png">
				<p>We are preparing for your coming and need!</p>
			</div>
		</div>
	</div>
	<!-- content-team-intro -->

	<!-- content-members -->
	<div id="team" class="content-team">
		<!-- container -->
		<div class="container">
			<div class="content-team-text">
				<h2>Our <small>members</small></h2>
				<span style="height:114px; important!"> </span>
				<!-- 设置css的优先级最高防止覆盖 -->
			</div>
			<div class="arrows">
				<div class="left-arrow"> </div>
				<div class="right-arrow"> </div>
				<div class="clearfix"> </div>
			</div>
			<div class="row">
				<!-- requried-jsfiles-for owl -->
									<script>
									$(document).ready(function() {
									  $("#owl-demo1").owlCarousel({
										items : 3,
										lazyLoad : true,
										autoPlay : true,
										navigation : true,
										navigationText :  true,
										pagination : false,
									  });
									});
									</script>
				<!-- //requried-jsfiles-for owl -->
				<!-- start content_slider -->
				<div id="owl-demo1" class="owl-carousel">
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team4.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>李想</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team5.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>贾靖宇</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>崔立骁</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>周睿</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>李想</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>贾靖宇</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>崔立骁</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
					<div class="item">
							<div class="team-left-grid">
								<img src=<?= "front_assets/images/team6.jpg" //"front_assets/images/" . rh_member_live[rh_member_live.live_pic_id % 3 + 1] . ".jpg" ?> >
								<h2>周睿</h2>
								<p>2015级 / Information security and Law</p>
								<div class="team-icon-grid">
									<div class="col-md-6 f-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="col-md-6 g-icon">
										<a href="#"><span> </span></a>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
					</div>
				</div>
			</div>
		<!-- // container -->
		</div>
	</div>
	<!-- // content-members -->

	<!-- content-services -->
	<div id="services" class="content-skills">
		<!-- container -->
		<div class="container">
			<div class="content-skills-text">
				<h2>Our <small>services</small></h2>
				<span style="height:114px; important!"> </span>
				<!-- 设置css的优先级最高防止覆盖 -->
			</div>
			<div class="col-md-6">
				<div class="progress-head">
				<h3>WEB DESIGN</h3>
				<p class="percent">4/4</p>
				<div class="clearfix"></div>
				<div class="progressy1"><p></p></div>
				</div>
				<div class="progress-head">
				<h3>EXPLOIT/GUARD</h3>
				<p class="percent">4/4</p>
				<div class="clearfix"></div>
				<div class="progressy2"><p></p></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="progress-head">
				<h3>HTML/CSS</h3>
				<p class="percent">4/4</p>
				<div class="clearfix"></div>
				<div class="progressy3"><p></p></div>
				</div>
				<div class="progress-head">
				<h3>NETWORK/LAW</h3>
				<p class="percent">4/4</p>
				<div class="clearfix"></div>
				<div class="progressy4"><p></p></div>
				</div>
			</div>		
		</div>	 
		<!-- container -->
		<div class="content-about-bottom">
			<div class="content-services-bottom-text">
				<img src="front_assets/images/service.png">
				<p class="bottom-text">Our services will meet all your needs.
				</p>
			</div>
		</div>
		<!-- // container -->
	</div>
	<!-- // content-services -->

	<!-- content-services-messages -->
	<div id="blog" class="content-services">
		<div class="container">
			<!-- services -->
			<div class="services-grids">
				<div class="col-md-3 service-grid">
					<h2>365</h2>
					<p>Forever in</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2>100%</h2>
					<p>Devoting</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2>69</h2>
					<p>Overall</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2><?= round((strtotime(date("Y-m-d"))-strtotime("2015-09-11"))/3600/24) ?></h2>
					<p>Programing days</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- // services -->
			<!-- requried-jsfiles-for owl -->
			<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 1,
					lazyLoad : true,
					autoPlay : true,
					navigation : false,
					navigationText :  false,
					pagination : true,
				});
			});
			</script>
			<!-- //requried-jsfiles-for owl -->
			<!-- messages -->
			<div id="owl-demo" class="owl-carousel">
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n1.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n2.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n3.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n4.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n5.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/n1.jpg" // "front_assets/images/" . rh_note_show[rh_note_id] . ".jpg"?> >
					</div>
					<div class="services-text">
						<p>
							<?= "留言内容" 
							// rh_note_record[rh_note_id].note_detaile] ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= "留言用户名称" 
							// rh_note_record[rh_note_id].user_name ?>
						</p>	
					</div>
				</div>
			</div>
			<!-- // messages -->
			<div class="services-bottom"></div>
		</div>
		<!-- messages -->
	</div>
	<!-- // content-services-messages -->

	<!-- content-activities -->
		<!-- container -->
<div class="container">			
	<div id="portfolio" class="portfolio">
		<div class="port-text">
		 	<h2>Our <small>activities</small></h2>
			<span class="folio"; style="height:114px; important!"> </span>
		</div>
		<div  class="section" id="section-3">
	      	<ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">全部活动</span></li>
			<li><span class="filter" data-filter="app">竞赛活动</span></li>
			<li><span class="filter" data-filter="card">志愿活动</span></li>			
			<li><span class="filter" data-filter="fun">体育活动</span></li>
	        </ul>
	     	<div id="portfoliolist">
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/t1.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
						<p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>
				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src= <?= "front_assets/images/t2.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
							 <p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
							 <div class="tour-caption">
							 <span> </span>	
						     </div>

						</div>
					</div>					
				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/t3.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
						<p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>				
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/t4.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
						<p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>	
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/t5.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
						<p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>	
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/t6.jpg" //  "front_assets/images/" . rh_activity_info[activity_id].activity_pic . "./jpg" ?>
						class="img-responsive" alt=""/></a>
						<p><?= "成员名称" // rh_activity_attend[activity_id].member_name ?></p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>					  
		    	<div class="clearfix"></div>	
		    	<div class="watchmore">
					<a href="#">Watch more</a>
					<!-- 更多活动的地址 -->
				</div>
	  		</div>
		</div>
	</div> 
	<script type="text/javascript">
		$(function () {
			var filterList = {
				init: function () {
				// MixItUp plugin
				// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});
				},
				hoverEffect: function () {
				// Simple parallax effect
					$('#portfoliolist .portfolio').hover(
						function () {
							$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
						},
						function () {
							$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
						}
						);				
				}
			};
			// Run the show!
			filterList.init();
		});	
	</script>
	<!-- // Gallery Script -->	
</div>
	<!-- // content-activities -->

	<!-- content-Get-in-touch -->
	<div id="contact" id="arrow" class="content-Get-in-touch">
		<!-- container -->
		<div class="container">
			<div class="Get-in-touch-text">
				<h2>Get <small>in touch</small></h2>
				<span class="portfolio"; style="height:114px; important!"> </span>
			</div>
			<div class="Get-in-touch-grids">
				<div class="col-md-6">
					<form>
						<input type="text" maxlength="20" value="Your Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}">
						<input type="text" maxlength="20" value="Your Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Email';}">
						<textarea value="Your Message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Message';}"></textarea>
						<div class="clearfix"></div>
						<div class="email">
							<a href="#">Send email</a>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="Get-in-touch-right-grid">
						<p>
							追逐于信息安全与法学,<br>
							执着于渗透利用与漏洞,<br>
							思索于过去现在与将来,<br>
							成长于自己社会与所在.<br>
							RedHackers团队,前进于安全的道路上,不断拼搏!
						</p>
						<h4>南开大学 计算机与控制工程学院.<br>
							信息安全与法学专业.<br>
							中国 天津 津南.
						</h4>
						<span>I: idealeer521@gmail.com</span>
						<small>Q: idealeer@qq.com</small>
						<div class="Get-in-touch-icons">
							<a href="#"><span class="icon1"> </span></a>
							<a href="#"><span class="icon2"> </span></a>
							<a href="#"><span class="icon3"> </span></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-portfolio">
				<a href="#"><img src="front_assets/images/ftr.png"></a>
				<p>Copyright &copy; 2017-<?= date("Y") ?>. RedHackers All rights reserved. </p>
			</div>
		</div>
		<!-- // container -->
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<?php $this->registerJs($this->blocks['js_end'], yii\web\View::POS_LOAD) ?>
  	<!-- 注册js -->
	<?php $this->endBody() ?>
</body>
<?php $this->endPage() ?>
