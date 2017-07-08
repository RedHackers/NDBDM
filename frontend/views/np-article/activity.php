<? php 

use frontend\assets\AppAsset;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->

<!-- font -->
<link href="http://fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
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
												<h3>Lorem ipsum dolor</h3>
												<p>Ut iaculis at mauris ut maximus. Sed laoreet in quam sit amet elementum.</p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info1">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Integer sit amet erat</h3>
												<p>Ut iaculis at mauris ut maximus. Sed laoreet in quam sit amet elementum.</p>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="jarallax agileits-banner-info agileits-banner-info2">
										<div class="container">
											<div class="w3ls-banner-shadow">
												<h3>Nullam placerat nunc</h3>
												<p>Ut iaculis at mauris ut maximus. Sed laoreet in quam sit amet elementum.</p>
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
									<img src="front_assets/images/activity_images/7.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4>pulvinar vitae sem sit</h4>
									<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat.eget auctor eros 
										ultrices. Vestibulum non erat ut odio euismod accumsan. 
										Phasellus libero tellus, pulvinar vitae sem sit amet, 
										faucibus consectetur neque.</p>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature1" aria-labelledby="Feature1-tab">
							<div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4>suscipit sapien nec </h4>
									<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros 
										ultrices. Vestibulum non erat ut odio euismod accumsan. 
										Phasellus libero tellus, pulvinar vitae sem sit amet, 
										faucibus consectetur neque.</p>
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src="front_assets/images/activity_images/6.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature2" aria-labelledby="Feature2-tab">
							<div class="w3agile_tabs">
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right2">
									<img src="front_assets/images/activity_images/5.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="col-md-7 w3agile_tab_left">
									<h4>gravida eget auctor </h4>
									<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros 
										ultrices. Vestibulum non erat ut odio euismod accumsan. 
										Phasellus libero tellus, pulvinar vitae sem sit amet, 
										faucibus consectetur neque.</p>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="Feature3" aria-labelledby="Feature3-tab"><div class="w3agile_tabs">
								<div class="col-md-7 w3agile_tab_left">
									<h4>faucibus consectetur </h4>
									<p> Cras consectetur tempus lectus id accumsan. Vivamus gravida justo mattis ex pretium, eu sollicitudin tortor ullamcorper. Quisque vitae diam molestie, tincidunt velit vitae, viverra nisl. Mauris ultrices commodo imperdiet. In urna odio, semper nec est non, pulvinar molestie quam. Etiam egestas varius nunc et rutrum. Curabitur tempor lacinia pharetra. Ut laoreet urna sed risus consequat laoreet. In volutpat sollicitudin volutpat. eget auctor eros 
										ultrices. Vestibulum non erat ut odio euismod accumsan. 
										Phasellus libero tellus, pulvinar vitae sem sit amet, 
										faucibus consectetur neque.</p>
									
								</div>
								<div class="col-md-5 w3agile_tab_right w3agile_tab_right1">
									<img src="front_assets/images/activity_images/4.jpg" alt=" " class="img-responsive" />
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
						<a href="front_assets/images/activity_images/7.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/7.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/6.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/6.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/4.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/4.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="ront_assets/images/activity_images/8.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/8.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="ront_assets/images/activity_images/5.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/5.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/13.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/13.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="ront_assets/images/activity_images/7.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/7.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/6.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/6.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="show-reel">
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/4.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/4.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/8.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/8.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/5.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/5.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 agile-gallery-grid">
					<div class="agile-gallery">
						<a href="front_assets/images/activity_images/13.jpg" class="lsb-preview" data-lsb-group="header">
							<img src="front_assets/images/activity_images/13.jpg" alt="" />
							<div class="agileits-caption">
								<h4>Consectetur</h4>
								<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
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
</html>