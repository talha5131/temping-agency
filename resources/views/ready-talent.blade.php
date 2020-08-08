<!DOCTYPE html>

<html lang="en">

<head>



	<!-- Basic Page Needs

		================================================== -->

	<meta charset="utf-8">

	<title>Ready Talent</title>

	<meta name="description" content="">

	<meta name="author" content="">



	<!-- Mobile Specific Metas

		================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



	<!-- Favicons

		================================================== -->

	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">

	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">

	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- CSS

		================================================== -->



	<!-- Bootstrap -->

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Template styles-->

	<link rel="stylesheet" href="css/style.css">

	<!-- Responsive styles-->

	<link rel="stylesheet" href="css/responsive.css">

	<!-- FontAwesome -->

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Animation -->

	<link rel="stylesheet" href="css/animate.css">

	<!-- Prettyphoto -->

	<link rel="stylesheet" href="css/prettyPhoto.css">

	<!-- Owl Carousel -->

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/owl.theme.css">

	<!-- Flexslider -->

	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Flexslider -->

	<link rel="stylesheet" href="css/cd-hero.css">

	<!-- Style Swicther -->

	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">



	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

	<!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

  <![endif]-->



</head>



<body>
	<!-- Modal Import -->
	@include('layouts.modal')
	<div class="body-inner">



		<!-- Header start -->
		@include('layouts.header')
		<!--/ Header end -->

		<div id="banner-area">

			<img src="images/banner/banner1.jpg" alt="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2>Ready Talent</h2>

					<ul class="breadcrumb">

						<li><a href="index.html"> Home</a></li>

						<li>Services</li>

						<li> Ready Talent </li>

					</ul>

				</div>

			</div><!-- Subpage title end -->

		</div><!-- Banner area end -->



		<!-- Main container start -->



		<section id="main-container">

			<div class="container">



				<!-- Company Profile -->



				<div class="row">

					<div class="col-md-12 heading text-center">

						<h2 class="title2"> Ready Talent

							<span class="title-desc"> Temping Agency </span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">



						<p> Call us to hire any temp whenever you needs from our big pool of talent – Temps registered with us are always ready to fit right into your business when you need them. </p>

						<section>

							<div class="container">

								<div class="row">

									<div class="w3-content w3-section" style="max-width:1100px">



										<img class="mySlides" src="images/slider/0.jpg" style="width:100%">

										<img class="mySlides" src="images/slider/00.jpg" style="width:100%">

										<img class="mySlides" src="images/slider/000.jpg" style="width:100%">

										<img class="mySlides" src="images/slider/0000.jpg" style="width:100%">

										<img class="mySlides" src="images/slider/00000.jpg" style="width:100%">





									</div>

								</div>

							</div>

						</section>







						<h3>Temping Agency – A new way to Hire </h3>

						<br>

						<p> Our exclusive service model means our temps receive hours of industry-focused preparation – make sure they are the perfect fit for your business from day one. </p>













					</div>
					<!--/ About message end -->

					<!--/ About image end -->

				</div>
				<!--/ Content row end -->







				<!-- Company Profile -->



			</div>
			<!--/ 1st container end -->





			<div class="gap-60"></div>





			<!-- Counter Strat -->

			<div class="ts_counter_bg parallax parallax2">

				<div class="parallax-overlay"></div>

				<div class="container">

					<div class="row wow fadeInLeft text-center">

						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-user"></i></span>

							<div class="facts-num">

								<span class="counter">1500</span>

							</div>

							<h3>Candidates</h3>

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-institution"></i></span>

							<div class="facts-num">

								<span class="counter">1277</span>

							</div>

							<h3>Recruitments</h3>

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-suitcase"></i></span>

							<div class="facts-num">

								<span class="counter">1469</span>

							</div>

							<h3>Jobs</h3>

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-trophy"></i></span>

							<div class="facts-num">

								<span class="counter">76</span>

							</div>

							<h3>Awwards</h3>

						</div>











					</div>
					<!--/ row end -->

				</div>
				<!--/ Container end -->

			</div>
			<!--/ Counter end -->







		</section>
		<!--/ Main container end -->



		<!-- Footer start -->
		@include('layouts.footer')
		<!--/ Footer end -->



		<!-- Javascript Files

		================================================== -->

		<script>
			var myIndex = 0;

			carousel();



			function carousel() {

				var i;

				var x = document.getElementsByClassName("mySlides");

				for (i = 0; i < x.length; i++) {

					x[i].style.display = "none";

				}

				myIndex++;

				if (myIndex > x.length) {
					myIndex = 1
				}

				x[myIndex - 1].style.display = "block";

				setTimeout(carousel, 2000); // Change image every 2 seconds

			}
		</script>

		<!-- initialize jQuery Library -->

		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- Bootstrap jQuery -->

		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Style Switcher -->

		<script type="text/javascript" src="js/style-switcher.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="js/owl.carousel.js"></script>

		<!-- PrettyPhoto -->

		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

		<!-- Bxslider -->

		<script type="text/javascript" src="js/jquery.flexslider.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="js/cd-hero.js"></script>

		<!-- Isotope -->

		<script type="text/javascript" src="js/isotope.js"></script>

		<script type="text/javascript" src="js/ini.isotope.js"></script>

		<!-- Wow Animation -->

		<script type="text/javascript" src="js/wow.min.js"></script>

		<!-- SmoothScroll -->

		<script type="text/javascript" src="js/smoothscroll.js"></script>

		<!-- Eeasing -->

		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

		<!-- Counter -->

		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

		<!-- Waypoints -->

		<script type="text/javascript" src="js/waypoints.min.js"></script>

		<!-- Template custom -->

		<script type="text/javascript" src="js/custom.js"></script>

	</div><!-- Body inner end -->

</body>

</html>