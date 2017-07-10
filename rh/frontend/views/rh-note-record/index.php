<?php

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main display of frontend web.
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
use frontend\models\RhTeamInfo;
use frontend\models\RhMemberInfo;
use frontend\models\RhMemberLive;
use frontend\models\RhNoteRecord;
use frontend\models\RhNoteShow;
use frontend\models\RhActivityInfo;
use frontend\models\RhActivityAttend;
?>

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
							<?= RhTeamInfo::findOne("RedHackers")->team_name; ?>.<br>团队.
						</p>		
				</div>
				<div class="col-md-3 content-top-grid">					
						<span> </span>
						<h3>团队成员</h3>
						<p>骨干人员. <br>
							<?= RhTeamInfo::findOne("RedHackers")->team_num; ?>名. <br>
							Information security and Law.
						</p>					
				</div>
				<div class="col-md-3 content-top-grid">					
						<small> </small>
						<h3>团队方向</h3>
						<p><?= RhTeamInfo::findOne("RedHackers")->team_dir; ?>.</p>					
				</div>
				<div class="col-md-3 content-top-grid">			
						<big> </big>
						<h3>团队格言</h3>
						<p><?= RhTeamInfo::findOne("RedHackers")->team_motto; ?>.</p>					
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
					<img src= <?= "front_assets/images/team/" . RhTeamInfo::findOne("RedHackers")->team_pic; ?> >
				</div>
				<div class="col-md-6 content-about-grid-right">					
						<p><?= RhTeamInfo::find()->where(['team_name' => 'RedHackers'])->one()->team_intro; ?></p>
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_li" ?> >
								<!-- 随机获取一张照片 -->
								<img src= <?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '李想', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
								</a>
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_jia" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '贾靖宇', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_cui" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '崔立骁', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_zhou" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '周睿', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_li" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '李想', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_jia" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '贾靖宇', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_cui" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '崔立骁', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
								<!-- 跳转到成员介绍 -->
								<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/member_zhou" ?> >
								<!-- 随机获取一张照片 -->
								<img src=<?= "front_assets/images/member/" . RhMemberLive::find()->where(['member_name' => '周睿', 'live_pic_id' => rand(1, 4)])->one()->live_pic; ?> >
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
						<img src= <?= "front_assets/images/note/note1.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 1,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 1,])->one()->note_id),
							 ])->one()->user_name; ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/note/note2.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 2,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 2,])->one()->note_id),
							 ])->one()->user_name; ?>
						</p>
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/note/note3.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 3,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 3,])->one()->note_id),
							 ])->one()->user_name; ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/note/note4.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 4,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 4,])->one()->note_id),
							 ])->one()->user_name; ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/note/note5.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 5,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 5,])->one()->note_id),
							 ])->one()->user_name; ?>
						</p>	
					</div>
				</div>
				<div class="item">
					<div class="image-grid">
						<img src= <?= "front_assets/images/note/note6.jpg" ?> >
					</div>
					<div class="services-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 6,])->one()->note_id),
							 ])->one()->note_content; ?>
						</p>
					</div>
					<div class="services-bottom-text">
						<p>
							<?= RhNoteRecord::find()->where(['note_id' => 
							(RhNoteShow::find()->where(['note_show_id' => 6,])->one()->note_id),
							 ])->one()->user_name; ?>
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
						<img src= <?= "front_assets/images/activity/voluntary/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 5,])->one()->activity_id), ])->one()->activity_pic; ?>
						class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 5,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>
				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/activity/competition/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 1,])->one()->activity_id), ])->one()->activity_pic; ?>
							class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 1,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
							<span> </span>
						</div>
					</div>
				</div>					
				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/activity/competition/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 2,])->one()->activity_id), ])->one()->activity_pic; ?>
							class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 2,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
							<span> </span>
						</div>
					</div>
				</div>				
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/activity/sport/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 3,])->one()->activity_id), ])->one()->activity_pic; ?>
							class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 3,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
							<span> </span>
						</div>
					</div>
				</div>	
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/activity/voluntary/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 6,])->one()->activity_id), ])->one()->activity_pic; ?>
						class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 6,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
						<span> </span>
						</div>
					</div>
				</div>	
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						<img src= <?= "front_assets/images/activity/sport/" . RhActivityInfo::find()->where(['activity_id' => (RhActivityAttend::find()->where(['activity_id' => 4,])->one()->activity_id), ])->one()->activity_pic; ?>
							class="img-responsive" alt=""/>
						</a>
						<p>
							<?= RhActivityAttend::find()->where(['activity_id' => 4,])->one()->member_name; ?>
						</p>
						<div class="tour-caption">
							<span> </span>
						</div>
					</div>
				</div>					  
		    	<div class="clearfix"></div>	
		    	<div class="watchmore">
					<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/activity" ?> >Watch more</a>
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
				<h2>
					<a href= <?= Yii::$app->getHomeUrl() . "?r=rh-note-record/contact" ?> > Click to </a>
					<small>contact</small>
				</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- // container -->
</div>
	<!-- // content-Get-in-touch -->

	<!-- go-to-top -->
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- // go-to-top -->
