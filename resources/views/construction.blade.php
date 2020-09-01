@extends('layouts.base')
@section('title','Temping Agency')
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

<div id="banner-area">

	<img src="public/assets/images/banner/banner1.jpg" alt="" />

	<div class="parallax-overlay"></div>

	<!-- Subpage title start -->

	<div class="banner-title-content">

		<div class="text-center">

			<h2> Construction </h2>

			<ul class="breadcrumb">

				<li><a href="index"> Home</a></li>

				<li>Services</li>

				<li> Construction </li>

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

				<h2 class="title2">Construction

					<span class="title-desc"> Temping Agency </span>

				</h2>

			</div>

		</div><!-- Title row end -->



		<div class="row about-wrapper-top">

			<div class="col-md-12 ts-padding about-message">

				<h3 class="text-align"> Construction Staffing Solutions </h3>

				<br>

				<p class="text-align">At Temping Agency, we specialise in providing Construction Labourers and skilled tradespeople to the construction and residential industries. We can provide skilled and semi-skilled construction workers who pride themselves on delivering the highest standards to our clients and enhancing any project they work on.

					Our construction workers are skilled, qualified and will always deliver a professional service to meet with your requirements.</p>

				<hr>

				<section>

					<div class="container">

						<div class="row">

							<div class="w3-content w3-section" style="max-width:1100px">



								<img class="mySlides" src="public/assets/images/slider/0.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider/00.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider/000.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider/0000.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider/00000.jpg" style="width:100%">





							</div>

						</div>

					</div>

				</section>

				<p class="text-align">Cobalt is working with an established local A1 Civil Main Contractor who has a solid portfolio of projects to see them through this uncertain time period.

					They are looking to bring on an experienced Construction Manager to help drive and deliver on the operational aspects of their civil projects managing and overseeing the project and site teams.

					You will need to have at least 8 years of experience with civil projects in Singapore and have a Degree in Civil Engineering (or similar) that is recognized by the PE Board Singapore.

					Please click apply and address your application to Siu Meng (R1221703).

					Cobalt Consulting (Asia) Pte Limited | License No. 12C6031</p>














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

					<h3>Awards</h3>

				</div>











			</div>
			<!--/ row end -->

		</div>
		<!--/ Container end -->

	</div>
	<!--/ Counter end -->







</section>
<!--/ Main container end -->

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