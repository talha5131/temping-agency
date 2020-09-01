@extends('layouts.base')
@section('title','Contact Us')
@section('content')
<link rel="icon" href="public/assets/images/logo-favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" href="public/assets/images/logo-favicon.png">
<style>
	@media only screen and (min-width: 200px) and (max-width: 768px) {
		body {
			/* width: 100%; */
			overflow-x: hidden;
		}
		.text-align {
			text-align: center;
		}
	}
</style>

<div class="body-inner">

	<div id="banner-area">
		<img src="public/assets/images/banner/banner2.jpg" alt="" />
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
					<form id="contact-form">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" name="name" id="name" placeholder="" type="text">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" placeholder="" type="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subject" id="subject" placeholder="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control contact-content" name="message" id="message" rows="10"></textarea>
							<label style="color:red;" id="message-error"></label>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" id="btn-submit" type="submit">Send Message</button>
						</div>
					</form>
				</div>
				<div class="col-md-5">
					<div class="contact-info">
						<h3 class="text-align">Contact Details</h3>
						<p class="text-align">We are here to help you.</p>
						<br>
						<p ><i class="fa fa-home info"></i> 344-348 High road, Ilford IG1 1QP </p>
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



	<!-- Javascript Files
		================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="public/assets/js/jquery.js"></script>

	<!-- Google Map API Key Source -->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
	<script type="text/javascript" src="public/assets/js/gmap3.js"></script>

	<!-- jQuery Validation -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

	<!-- jQuery Minimalist Editor -->

	<script type="text/javascript" src="public/assets/js/jquery.richtext.min.js"></script>

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

		$("#btn-submit").click(function() {
			if ($("#message").text() == "") {
				$("#message-error").html("This field is required");
				console.log("button is clicked");
				// event.preventDefault();
			}

		});

		// Contact Us Form Validation

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
			}
		});

		$('#contact-form').submit(function() {
			if ($("#message").text() == "") {
				event.preventDefault();
			} else {

			}
		});

		$('.contact-content').richText();
	</script>

</div><!-- Body inner end -->