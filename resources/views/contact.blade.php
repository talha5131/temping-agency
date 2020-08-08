<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
		================================================== -->
	<meta charset="utf-8">
	<title>Contact Us</title>
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

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/richtext.min.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
	<div class="body-inner">

		<!-- Header start -->
		@include('layouts.header')
		<!--/ Header end -->

		<div id="banner-area">
			<img src="images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>Contact Us</h2>
					<ul class="breadcrumb">
						<li>Home</li>
						<li><a href="#"> Contact</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">



				<div class="gap-40"></div>

				<div class="row">
					<div class="col-md-7">
						<form id="contact-form" role="form">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control" name="name" id="name" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" name="email" id="email" placeholder="" type="email" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Subject</label>
										<input class="form-control" name="subject" id="subject" placeholder="" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control content" name="message" id="message" rows="10" required></textarea>
							</div>
							<div class="text-right"><br>
								<button class="btn btn-primary solid blank" type="submit">Send Message</button>
							</div>
						</form>
					</div>
					<div class="col-md-5">
						<div class="contact-info">
							<h3>Contact Details</h3>
							<p>We are here to help you.</p>
							<br>
							<p><i class="fa fa-home info"></i> 344-348 High road, Ilford IG1 1QP </p>
							<p><i class="fa fa-phone info"></i> +44 (0) 2030 869080 </p>
							<p><i class="fa fa-envelope-o info"></i> info@temping-agency.com</p>
							<p><i class="fa fa-globe info"></i> www.workers-direct.com</p>
						</div>
					</div>

				</div>

				<br><br><br>

				<div class="row">
					<!-- Map start here -->
					<div id="map-wrapper" class="no-padding">
						<div class="map" id="map">






							<iframe style="border:0; height: 400px; width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.78303202202!2d-0.14459818479928202!3d51.517196417808655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761bbe2fc04b43%3A0xd63a826bf9b4f497!2sTemp%20Agency!5e0!3m2!1sen!2s!4v1568042407431!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0"></iframe>






						</div>
					</div>
					<!--/ Map end here -->

				</div><!-- Content row  end -->

			</div>
			<!--/ container end -->

		</section>
		<!--/ Main container end -->


		<!-- Footer start -->
		@include('layouts.footer')
		<!--/ Footer end -->

		<!-- Javascript Files
		================================================== -->

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
		<!-- CD Hero slider -->
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

		<!-- Google Map API Key Source -->
		<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
		<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
		<script type="text/javascript" src="js/gmap3.js"></script>

		<!-- jQuery Validation -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

		<!-- jQuery Minimalist Editor -->

		<script type="text/javascript" src="js/jquery.richtext.min.js"></script>

		<script type="text/javascript">
			$(function() {
				$('#map')
					.gmap3({
						address: "14600 Goldenwest St #101A, Westminster, California 92683",
						zoom: 17,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						scrollwheel: false
					})
					.marker(function(map) {
						return {
							position: map.getCenter(),
							icon: 'http://themewinter.com/html/marker.png'
						};
					});
			});
			$('.content').richText();

			// Contact Us Form Validation

			$(document).ready(function() {
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
						},
						email: {
							required: true,
							email: true
						},
						subject: {
							required: true,
						},
						message: {
							required: true,
						}
					}
				});
			});
		</script>


		<!-- Template custom -->
		<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
</body>

</html>