<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
		================================================== -->
	<meta charset="utf-8">
	<title>Temping Agency</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<!-- Favicons
		================================================== -->
	<link rel="icon" href="public/assets/img/favicon/favicon-32x32.png" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="public/assets/img/favicon/favicon-54x54.png">

	<!-- CSS
		================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="public/assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="public/assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="public/assets/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="public/assets/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="public/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="public/assets/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="public/assets/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="public/assets/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="public/assets/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
	<!-- Modal Import -->
	@include('layouts.modal')
	<!-- Style switcher end -->

	<div class="body-inner">

		<!-- Header start -->
		@include('layouts.header')
		<!-- Slider start -->
		<section id="home" class="no-padding">
			<div id="main-slide" class="cd-hero">
				<ul class="cd-hero-slider">
					<li class="selected">
						<div class="overlay2">
							<!-- <img class="" src="images/slider/bg1.jpg" alt="slider"> -->
							<video autoplay muted loop id="myVideo">
								<source src="public/assets/videos/temping-agency.mp4" type="video/mp4">
							</video>
						</div>
						<div class="cd-full-width">
							<h2> Temping Agency </h2>
							<h3> Quality Recruitment Solutions</h3>
							<p> Our exclusive service model means our temps receive hours of industry-focused preparation – make sure they are the perfect fit for your business from day one.</p>
							<a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
							<a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
						</div> <!-- .cd-full-width -->
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="public/assets/images/slider/bg2.jpg" alt="slider">
						</div>
						<div class="cd-half-width">
							<h2>Hire Staff On-Demand</h2>
							<p> Over 60,000 flexible workers available 24/7</p>
							<p>We have a large pool of candidates, who always ready to start a job on short notice</p>
							<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
						</div> <!-- .cd-half-width -->

						<div class="cd-half-width cd-img-container">
							<img src="public/assets/images/slider/bg-thumb1.png" alt="">
						</div> <!-- .cd-half-width.cd-img-container -->
					</li>
					<li>
						<div class="overlay2">
							<img class="" src="public/assets/images/slider/bg3.jpg" alt="slider">
						</div>
						<div class="cd-half-width cd-img-container img-right">
							<img src="public/assets/images/slider/bg-thumb2.png" alt="">
						</div> <!-- .cd-half-width.cd-img-container -->
						<div class="cd-half-width">
							<h2> Looking For a Job? </h2>
							<p>If you looking for a full time, part time or seasonal Job in London then registering with a temping agency always a good move. </p>
							<a href="#0" class="cd-btn btn btn-primary white">Start</a>
							<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
						</div> <!-- .cd-half-width -->
					</li>
					<li class="cd-bg-video">
						<div class="cd-full-width">
							<h2> Professional Service </h2>
							<h4 style="color:#fff;"> Efficient matching between job specification and candidate </h4>
							<p>As a top temping agency in London, we are the best choice for all your recruitment and staffing needs backed by professional service and a replacement guarantee. </p>
							<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
						</div> <!-- .cd-full-width -->

						<div class="cd-bg-video-wrapper" data-video="videos/video">
							<!-- video element will be loaded using jQuery -->
						</div> <!-- .cd-bg-video-wrapper -->
					</li>
				</ul>
				<!--/ cd-hero-slider -->

				<div class="cd-slider-nav">
					<nav>
						<span class="cd-marker item-1"></span>
						<ul>
							<li class="selected"><a href="#0"><i class="fas fa-poll" style="color:#51284f"></i> Intro</a></li>
							<li><a href="#0"><i class="fas fa-edit" style="color:#51284f"></i> Hire</a></li>
							<li><a href="#0"><i class="fas fa-address-card" style="color:#51284f"></i> Jobs</a></li>
							<li class="video"><a href="#0"><i class="fa fa-video-camera" style="color:#51284f"></i> Video</a></li>
						</ul>
					</nav>
				</div> <!-- .cd-slider-nav -->

			</div>
			<!--/ Main slider end -->
		</section>
		<!--/ Slider end -->

		<section class="service angle">
			<div class="container">

				<!-- Company Profile -->
				<div class="col-md-12 heading text-center">
					<h2 class="title2">Welcome to Temping Agency
						<span class="title-desc"> Quality Recruitment Solutions </span>
					</h2>
				</div>

				<div class="row about-wrapper-top">
					<div class="col-md-6 ts-padding about-message">



						<h3> An Award Winning Recruitment Agency</h3> <br>
						<p> As part of Workers Direct, Our team known as one of the best temping agency in London. We can claim this based on the many years of experience that we have in the temporary recruitment field. Our placement rates, satisfied clients and happy candidates all attest to our ability to provide an excellent service.
						</p>





						<!--/ About message end -->

					</div>
					<!--/ Content row end -->

					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-3.jpg) 50% 50% / cover no-repeat;">
					</div>
				</div>
				<div class="row about-wrapper-bottom">
					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-2.jpg) 50% 50% / cover no-repeat;">
					</div>
					<!--/ About image end -->
					<div class="col-md-6 ts-padding about-message">

						<p>As team of professionals we can confidently say that we have an outstanding track record in all of the above. Our first concern is always the client’s needs and then we consider our candidates’ potential to fulfil those needs.</p>

						<p> We are not the regular staff recruitment agency that you will find advertised on the net and in the papers. Our candidates come from a range of backgrounds and are placed on our extensive, specialist databases. </p>
						<p>As a temping agency we vetted all candidates with great vigour. Being a top temp agency our consultants not only present the candidate’s CV, but also with test results of their skills and full reference checks. </p>



					</div>
					<!--/ About message end -->
				</div>
				<!--/ Content row end -->

				<div class="row about-wrapper-top">
					<div class="col-md-6 ts-padding about-message">

						<p> The consultant that you deal with will have had a thorough face-to-face interview with the candidate and will be able to tell you his / her impressions of the candidate. </p>
						<p>Agency temps are usually very experienced individuals as they are required to work in a variety of settings. Here they gain a smorgasbord of knowledge and learn to be very adaptable to the different situations that they are placed in. Temps are also very keen to learn as each new skills provides them with an additional opportunity to find assignments. This is beneficial to your company as the work will be done with new creativity and analytical skills. </p>
					</div>
					<!--/ About message end -->
					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-1.jpg) 50% 50% / cover no-repeat;">
					</div>
					<!--/ About image end -->
				</div>
				<!--/ Content row end -->



				<!-- Company Profile -->

			</div>
			<!--/ 1st container end -->
		</section>

		<!-- Service box start -->
		<section id="service" class="service angle">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading">
						<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
						<h2 class="title">Service We Provide <span class="title-desc"> Quality Recruitment Solutions</span></h2>
					</div>
				</div><!-- Title row end -->

				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
								<h3> Catering </h3>
								<p> Our catering division is widely recognised as one of the market leaders in London, supplying professional, well trained staff to the…</p> <br>
								<a href="service2.php" class="btn btn-primary cd-btn">Read More</a>

							</div>
						</div>
						<!--/ End first service -->

						<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
								<h3> Events & Promotions </h3>
								<p>Event staff recruitment is a much specialised field in the recruitment industry.Many of the positions are seasonal while others require much…</p> <br>
								<a href="service9.php" class="btn btn-primary cd-btn">Read More</a>
							</div>

						</div>
						<!--/ End Second service -->

						<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
							<div class="service-content text-center">
								<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
								<h3>IT & Telecom</h3>
								<p>Incorporated in the mid-90s, our client is one of Asia’s largest real estate groups. The Singapore office operates one of the largest…</p> <br>
								<a href="service10.php" class="btn btn-primary cd-btn">Read More</a>

							</div>
						</div>
						<!--/ End Third service -->
					</div>
				</div> <br> <br> <br><br>
				<div class="row">
					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3> Light Industrial Staff</h3>
							<p>There are many positions that could arise in an industrial setting. Temping Agency will be able to fill any of them on short notice – from cleaning staff to…</p> <br>
							<a href="service4.php" class="btn btn-primary cd-btn">Read More</a>
						</div>
					</div>
					<!--/ End first service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>

							<h3> Sales & Retail </h3>
							<p>Our client is one of the leading international providers of co-working spaces. In addition to various successful locations in North America, the…</p> <br>
							<a href="service11.php" class="btn btn-primary cd-btn">Read More</a>

						</div>

					</div>
					<!--/ End Second service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>

							<h3> Hospitality </h3>
							<p>With over four million confirmed cases of coronavirus around the world, governments across the globe have had to implement stringent measures to…</p> <br>
							<a href="service12.php" class="btn btn-primary cd-btn">Read More</a>
						</div>
					</div>
					<!--/ End Third service -->

					<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>

							<h3> Construction </h3>
							<p>At Temping Agency, we specialise in providing Construction Labourers and skilled tradespeople to the construction and residential industries. We can…</p> <br>
							<a href="service8.php" class="btn btn-primary cd-btn">Read More</a>


						</div>
					</div>
					<!--/ End 4th service -->
				</div>
			</div><!-- Content row end -->
			<!--/ Container end -->
		</section>
		<!--/ Service box end -->

		<!-- Portfolio start -->



		<!-- Counter Strat -->
		<section class="ts_counter no-padding">
			<div class="container-fluid">
				<div class="row facts-wrapper wow fadeInLeft text-center">
					<div class="facts one col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-user"></i></span>
						<div class="facts-num">
							<span class="counter">1200</span>
						</div>
						<h3>Clients</h3>
					</div>

					<div class="facts two col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-institution"></i></span>
						<div class="facts-num">
							<span class="counter">1277</span>
						</div>
						<h3>Item Sold</h3>
					</div>

					<div class="facts three col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
						<div class="facts-num">
							<span class="counter">869</span>
						</div>
						<h3>Projects</h3>
					</div>

					<div class="facts four col-md-3 col-sm-6">
						<span class="facts-icon"><i class="fa fa-trophy"></i></span>
						<div class="facts-num">
							<span class="counter">76</span>
						</div>
						<h3>Awwards</h3>
					</div>

				</div>
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Counter end -->

		<!-- Feature box start -->
		<section id="feature" class="feature">
			<div class="container">
				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-heart-o"></i></span>
						<div class="feature-content">
							<h3>Clean &amp; Modern Design</h3>
							<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-codepen"></i></span>
						<div class="feature-content">
							<h3>Useful Shortcodes</h3>
							<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
						</div>
					</div>
					<!--/ End 2nd featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-film"></i></span>
						<div class="feature-content">
							<h3>Parallax Section</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
					<!--/ End 3rd featurebox -->
				</div><!-- Content row end -->

				<div class="gap-40"></div>

				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-newspaper-o"></i></span>
						<div class="feature-content">
							<h3>Multipurpose Concept</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
					<!--/ End 1st featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-desktop"></i></span>
						<div class="feature-content">
							<h3>Responsive Layout</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
					<!--/ End 2nd featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-pagelines"></i></span>
						<div class="feature-content">
							<h3>Light wight Performance</h3>
							<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
						</div>
					</div>
					<!--/ End 3rd featurebox -->

				</div><!-- Content row end -->

				<div class="gap-40"></div>

				<div class="row">
					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-recycle"></i></span>
						<div class="feature-content">
							<h3>Free Lifetime Updates</h3>
							<p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat</p>
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
						<div class="feature-content">
							<h3>Endless Possibilites</h3>
							<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua</p>
						</div>
					</div>
					<!--/ End first featurebox -->

					<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<span class="feature-icon pull-left"><i class="fa fa-whatsapp"></i></span>
						<div class="feature-content">
							<h3>24/7 Live Support</h3>
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
					<!--/ End first featurebox -->
				</div><!-- Content row end -->

			</div>
			<!--/ Container end -->
		</section>
		<!--/ Feature box end -->


		<section id="image-block" class="image-block no-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 ts-padding" style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
					</div>
					<div class="col-md-6 ts-padding img-block-right">
						<div class="img-block-head text-center">

							<h3>Why Choose Us</h3>
							<p>In the competitive corporate world, it is very difficult to find the right temp for the job. You need specific skills and experience and most people with these skills and experience are already taken – either as temps or on a permanent basis.
							</p>
						</div>

						<div class="gap-30"></div>

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-bicycle"></i></span>
							<div class="feature-content">
								<h3> Right Temp on Right Time</h3>
								<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
							</div>
						</div>
						<!--/ End 1st block -->

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-diamond"></i></span>
							<div class="feature-content">
								<h3>Your Temp Agency</h3>
								<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
							</div>
						</div>
						<!--/ End 1st block -->

						<div class="image-block-content">
							<span class="feature-icon pull-left"><i class="fa fa-street-view"></i></span>
							<div class="feature-content">
								<h3> Temps Registered With Us</h3>
								<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
							</div>
						</div>
						<!--/ End 1st block -->

					</div>
				</div>
			</div>
		</section>
		<!--/ Image block end -->


		<!-- Team start -->


		<!-- Parallax 1 start -->



		<!-- Testimonial start-->
		<section class="testimonial parallax parallax2">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
						<div class="item">
							<div class="testimonial-thumb">
								<img src="public/assets/images/team/testimonial1.jpg" alt="testimonial">
							</div>
							<div class="testimonial-content">
								<p class="testimonial-text">
									Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
								</p>
								<h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-thumb">
								<img src="public/assets/images/team/testimonial2.jpg" alt="testimonial">
							</div>
							<div class="testimonial-content">
								<p class="testimonial-text">
									Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
								</p>
								<h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-thumb">
								<img src="public/assets/images/team/testimonial3.jpg" alt="testimonial">
							</div>
							<div class="testimonial-content">
								<p class="testimonial-text">
									Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
								</p>
								<h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
							</div>
						</div>
					</div>
					<!--/ Testimonial carousel end-->
				</div>
				<!--/ Row end-->
			</div>
			<!--/  Container end-->
		</section>
		<!--/ Testimonial end-->


		<!-- Clients start -->
		<section id="clients" class="clients">
			<div class="container">
				<div class="row wow fadeInLeft">
					<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client1.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client2.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client3.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client4.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client5.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client6.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client7.png" alt="client">
							</a>
						</figure>
						<figure class="item client_logo">
							<a href="#">
								<img src="public/assets/images/clients/client8.png" alt="client">
							</a>
						</figure>
					</div><!-- Owl carousel end -->
				</div><!-- Main row end -->
			</div>
			<!--/ Container end -->
		</section>
		<!--/ Clients end -->

		<!-- Footer start -->
		@include('layouts.footer')
		<!--/ Footer end -->

		<!-- Javascript Files
		================================================== -->

		<!-- initialize jQuery Library -->
		<script type="text/javascript" src="public/assets/js/jquery.js"></script>
		<!-- Bootstrap jQuery -->
		<script type="text/javascript" src="public/assets/js/bootstrap.min.js"></script>
		<!-- Style Switcher -->
		<script type="text/javascript" src="public/assets/js/style-switcher.js"></script>
		<!-- Owl Carousel -->
		<script type="text/javascript" src="public/assets/js/owl.carousel.js"></script>
		<!-- PrettyPhoto -->
		<script type="text/javascript" src="public/assets/js/jquery.prettyPhoto.js"></script>
		<!-- Bxslider -->
		<script type="text/javascript" src="public/assets/js/jquery.flexslider.js"></script>
		<!-- CD Hero slider -->
		<script type="text/javascript" src="public/assets/js/cd-hero.js"></script>
		<!-- Isotope -->
		<script type="text/javascript" src="public/assets/js/isotope.js"></script>
		<script type="text/javascript" src="public/assets/js/ini.isotope.js"></script>
		<!-- Wow Animation -->
		<script type="text/javascript" src="public/assets/js/wow.min.js"></script>
		<!-- SmoothScroll -->
		<script type="text/javascript" src="public/assets/js/smoothscroll.js"></script>
		<!-- Eeasing -->
		<script type="text/javascript" src="public/assets/js/jquery.easing.1.3.js"></script>
		<!-- Counter -->
		<script type="text/javascript" src="public/assets/js/jquery.counterup.min.js"></script>
		<!-- Waypoints -->
		<script type="text/javascript" src="public/assets/js/waypoints.min.js"></script>
		<!-- Template custom -->
		<script type="text/javascript" src="public/assets/js/custom.js"></script>

	</div>


	<!-- Body inner end -->


</body>

</html>