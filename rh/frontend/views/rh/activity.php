<?php

/**
 * Team: RedHackers,NKU
 * Coding by Xiang Li 1511376, 20170704
 * This is the main layout of frontend web.
 */

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\ActivityAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use frontend\models\RhActivityShow;

ActivityAsset::register($this);
?>
<body>
	<!-- banner -->
	<div class="banner">
		
		<!-- banner-slider -->
			<div class="banner-slider">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="jarallax agileits-banner-info">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3><?= RhActivityShow::find()->where(['activity_show_id' => 1])->one()->activity_show_name; ?></h3>
												<p><?= RhActivityShow::find()->where(['activity_show_id' => 1])->one()->activity_show_detail; ?></p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info1">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3><?= RhActivityShow::find()->where(['activity_show_id' => 2])->one()->activity_show_name; ?></h3>
												<p><?= RhActivityShow::find()->where(['activity_show_id' => 2])->one()->activity_show_detail; ?></p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info2">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3><?= RhActivityShow::find()->where(['activity_show_id' => 3])->one()->activity_show_name; ?></h3>
												<p><?= RhActivityShow::find()->where(['activity_show_id' => 3])->one()->activity_show_detail; ?></p>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
			</div>
			<!-- //banner-slider -->
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h2>Welcome</h2>
			</div>
				<div class="bs-example bs-example-tabs welcome-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">01</a></li>
						<li role="presentation" class=""><a href="#Feature1" role="tab" id="Feature1-tab" data-toggle="tab" aria-controls="Feature1" aria-expanded="false">02</a></li>
						<li role="presentation" class=""><a href="#Feature2" role="tab" id="Feature2-tab" data-toggle="tab" aria-controls="Feature2" aria-expanded="false">03</a></li>
						<li role="presentation" class=""><a href="#Feature3" role="tab" id="Feature3-tab" data-toggle="tab" aria-controls="Feature3" aria-expanded="false">04</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 4])->one()->activity_show_pic; ?> alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4><?= RhActivityShow::find()->where(['activity_show_id' => 4])->one()->activity_show_name; ?></h4>
									<p><?= RhActivityShow::find()->where(['activity_show_id' => 4])->one()->activity_show_detail; ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
							<div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4><?= RhActivityShow::find()->where(['activity_show_id' => 5])->one()->activity_show_name; ?></h4>
									<p><?= RhActivityShow::find()->where(['activity_show_id' => 5])->one()->activity_show_detail; ?></p>
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 5])->one()->activity_show_pic; ?> alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
							<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 6])->one()->activity_show_pic; ?> alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4><?= RhActivityShow::find()->where(['activity_show_id' => 6])->one()->activity_show_name; ?></h4>
									<p><?= RhActivityShow::find()->where(['activity_show_id' => 6])->one()->activity_show_detail; ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab"><div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4><?= RhActivityShow::find()->where(['activity_show_id' => 7])->one()->activity_show_name; ?></h4>
									<p><?= RhActivityShow::find()->where(['activity_show_id' => 7])->one()->activity_show_detail; ?></p>
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 7])->one()->activity_show_pic; ?> alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>


	<div class="gallery-grids">
		<div class="container">
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 8])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 8])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 8])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 8])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 9])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 9])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 9])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 9])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 10])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 10])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 10])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 10])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 11])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 11])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 11])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 11])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 12])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 12])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 12])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 12])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 13])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 13])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 13])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 13])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 14])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 14])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 14])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 14])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 15])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 15])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 15])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 15])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 16])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 16])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 16])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 16])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 17])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 17])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 17])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 17])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 18])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 18])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 18])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 18])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 19])->one()->activity_show_pic; ?> class="lsb-preview" data-lsb-group="header">
							<img src=<?= "front_assets/images/activity_show/" . RhActivityShow::find()->where(['activity_show_id' => 19])->one()->activity_show_pic; ?> alt="" />
							<div class="agileits-caption">
								<h4><?= RhActivityShow::find()->where(['activity_show_id' => 19])->one()->activity_show_name; ?></h4>
								<p><?= RhActivityShow::find()->where(['activity_show_id' => 19])->one()->activity_show_detail; ?></p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script>
				$(window).load(function() {
				  $.fn.lightspeedBox();
				});

			</script>
		</div>
	</div>
	<!-- //welcome-->
	<!-- welcome-bottom -->

    
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- lightspeedBox -->

	<!-- //lightspeedBox -->


	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	
</body>	