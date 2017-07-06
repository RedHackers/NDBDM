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
	<!--- header-top ---->
	<div id="home" class="header-top">
		<!--- container ---->
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
		<!--- container ---->
	</div>
<!--- //header-top ---->
<!--- header-bottom ---->
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
<!-- top-nav -->
<!-- Sticky Nav --->
<!--- content ---->
	<div class="content">
		<!--- container ---->
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
		<!--- container ---->
	</div>
	<!--- content ---->
	<!--- content-team-intro ---->
	<div id="about" class="content-about">
		<!--- container ---->
		<div class="container">
			<div class="content-about-text">
				<h2>About <small>us</small></h2>
				<span style="height:114px; important!"> </span>
				<!-- 设置css的优先级最高防止覆盖 -->
			</div>
			<div class="row">
				<div class="col-md-6 content-about-grid-left">
					<img src= <?= "front_assets/images/screen1.png" // "front_assets/images/team/" . rh_team_info['team_pic'] ?> >
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
		<!--- container ---->
		<div class="content-about-bottom">
			<div class="content-about-bottom-text">
				<img src="front_assets/images/quote.png">
				<p>We are preparing for your coming and need!</p>
			</div>
		</div>
	</div>
	<!--- content-team-intro ---->
	<!--- content-members ---->
	<div id="team" class="content-team">
		<!--- container ---->
		<div class="container">
			<div class="content-team-text">
				<h2>Our <small>members</small></h2>
				<span> </span>
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
								<img src="front_assets/images/team4.jpg">
								<h2>4</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team5.jpg">
								<h2>5</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team6.jpg">
								<h2>6</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team7.jpg">
								<h2>7</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team4.jpg">
								<h2>4</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team5.jpg">
								<h2>5</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team6.jpg">
								<h2>6</h2>
								<p>CEO / Marketing Guru</p>
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
								<img src="front_assets/images/team7.jpg">
								<h2>7</h2>
								<p>CEO / Marketing Guru</p>
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
		<!--- container ---->
		</div>
	<!--- content-team ---->
	</div>
	<!--- content-skills ---->
	<div id="services" class="content-skills">
		<!--- container ---->
		<div class="container">
			<div class="content-skills-text">
				<h2>Our <small>skills</small></h2>
				<span> </span>
			</div>
			<div class="col-md-6">
				<div class="progress-head">
				<h3>WEB DESIGN</h3>
				<p class="percent">90%</p>
				<div class="clearfix"></div>
				<div class="progressy1"><p></p></div>
				</div>
				<div class="progress-head">
				<h3>GRAPHIC DESIGN</h3>
				<p class="percent">75%</p>
				<div class="clearfix"></div>
				<div class="progressy2"><p></p></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="progress-head">
				<h3>HTML/CSS</h3>
				<p class="percent">70%</p>
				<div class="clearfix"></div>
				<div class="progressy3"><p></p></div>
				</div>
				<div class="progress-head">
				<h3>UI/UX</h3>
				<p class="percent">85%</p>
				<div class="clearfix"></div>
				<div class="progressy4"><p></p></div>
				</div>
			</div>
			
			
			
		</div>	 
	</div>


		</div>
		<!--- container ---->
		<div class="content-about-bottom">
			<div class="content-services-bottom-text">
			
				<img src="images/service.png">
				<p class="bottom-text">Our services will lorem and ipsum 
					your aliquam
				</p>
			</div>
		</div>
	</div>
	<!--- content-skills ---->
	<!--- content-services ---->
	<div id="blog" class="content-services">
		<!--- container ---->
		<div class="container">
			<div class="services-grids">
				<div class="col-md-3 service-grid">
					<h2>365</h2>
					<p>Lorem ipsum</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2>98%</h2>
					<p>Lorem ipsum</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2>69</h2>
					<p>Lorem ipsum</p>
				</div>
				<div class="col-md-3 service-grid">
					<h2>1,642</h2>
					<p>Lorem ipsum</p>
				</div>
				<div class="clearfix"> </div>
			</div>
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
			<div id="owl-demo" class="owl-carousel">
				<div class="item">
					<div class="image-grid">
						<img src="images/n1.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src="images/n2.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src="images/n3.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src="images/n4.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src="images/n5.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src="images/n1.jpg">
					</div>
					<div class="services-text">
						<p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris 
							condimentum. Duis mollis, est non commodo luctus, nisi erat "
						</p>
					</div>
					<div class="services-bottom-text">
						<p>LESALE CHRISTOPER, PINTEREST</p>	
					</div>
				</div>
			</div>
			<div class="services-bottom"></div>
		</div>
		<!--- container ---->
	</div>
	<!--- content-services ---->
	<!--- content-portfolio ---->
		<!--- container ---->
<div class="container">			
	 <div id="portfolio" class="portfolio">
		 <div class="port-text">
				<h2>Our <small>portfolio</small></h2>
				<span class="folio"> </span>
			</div>
			<div  class="section" id="section-3">
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">WEB</span></li>
			<li><span class="filter" data-filter="card">APPS</span></li>			
			<li><span class="filter" data-filter="fun">ICON</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							<p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							<div class="tour-caption">
							<span> </span>
							</div>

						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
							 <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							 <div class="tour-caption">
							 <span> </span>	
						     </div>

						</div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							 <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							 <div class="tour-caption">
							 <span> </span>							
							 </div>
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							 <div class="tour-caption">
							 <span> </span>							
							</div>
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							<p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							<div class="tour-caption">
							 <span> </span>							
							 </div>
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							 <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
							 <div class="tour-caption">
							 <span> </span>							
							</div>
						</div>
			      </div>				  
		   <div class="clearfix"></div>	
		   <div class="watchmore">
				<a href="#">Watch more</a>
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
<!--Gallery Script Ends-->	
		</div>
		<!--- container ---->
	<!--- content-portfolio ---->
	<!--- content-Get-in-touch ---->
	<div id="contact" id="arrow" class="content-Get-in-touch">
		<!--- container ---->
		<div class="container">
			<div class="Get-in-touch-text">
				<h2>Get <small>in touch</small></h2>
				<span class="portfolio"> </span>
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
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
							Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
						</p>
						<h4> 1600 Pennsylvania Ave NW, Washington, 
							DC 20500, United States of America. 
						</h4>
						<span>T: (202) 456-1111</span>
						<small>M: (202) 456-1212</small>
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
				<a href="#"><img src="images/ftr.png"></a>
				<p>Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.smallseashell.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			</div>
		</div>
		<!--- container ---->
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--- content-Get-in-touch ---->

	<?php $this->registerJs($this->blocks['js_end'], yii\web\View::POS_LOAD) ?>
  <!-- 注册js -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
