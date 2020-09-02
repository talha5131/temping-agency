@extends('layouts.base')
@section('title','Events & Promotions')
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

			<h2> Events & Promotions </h2>

			<ul class="breadcrumb">

				<li><a href="index"> Home</a></li>

				<li>Services</li>

				<li>Events & Promotions</li>

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

				<h2 class="title2">Events & Promotions

					<span class="title-desc"> Temping Agency </span>

				</h2>

			</div>

		</div><!-- Title row end -->



		<div class="row about-wrapper-top text-align">

			<div class="col-md-12 ts-padding about-message">

				<h3> Event Staff Recruitment </h3>

				<br>

				<p>Event staff recruitment is a much specialised field in the recruitment industry. Many of the positions are seasonal while others require much sought after skills. Our consultants who work in this division are uniquely trained and experienced at dealing with clients and candidates who work within this industry.

					As with all our other divisions it would depend on the type of placement that will determine the candidate selected for that position.
					<br> <br> These positions could be full-time, part-time, permanent or temporary, it all depends on the type and duration of the event. It would also depend on the event companyâ€™s needs and requirements.</p>

				<br>

				<h3> Recruitment Agency London and Event Staff Recruitment </h3>

				<br>

				<p>Recruitment Agency London specialises in providing exceptional, skilled and experienced candidates to companies and other organisations. We recruit, advertise and screen potential candidates vigorously and do all the relevant skills tests to make sure that the candidates are ready to start working immediately or as soon as possible.

					As with any other industry the Events industry has many different levels of staff. We cater for candidates from very junior positions to those who work at the top level of their Â organisation.</p>

				<p>Candidates are allocated to clients and positions according to their qualifications, skills, their past experience as well as their chosen career path. Mostly this industry depends on mid- to short-term placements with a fast turnover of staff. The duration of the event also plays a major role when recruiting for these positions. Some events take years to prepare while other happen literally overnight. The candidates will have to be prepared to work under these terms and conditions.</p>

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

				<h3>Recruitment Agency Londonâ€™s promise</h3>

				<br>

				<p>Recruitment Agency Londonâ€™s mission is to satisfy our clientsâ€™ needs and requirements. When doing recruitment for the Events industry, we work quickly to fill the position. Not only is it critical to meet our clientâ€™s demands, but the industry is highly competitive and a tardy response could lead to the candidate being snapped up by another agency.

					As a leader in this field, Recruitment Agency London has an extensive database of event staff and are often called on by large corporations to do their event staff recruitment.</p>

				<p> The placement consultant will check in with both the client and the candidate on a daily / weekly basis (depending on the duration of the event and its preparation) to make sure that both are satisfied with the assignmentâ€™s progress. We are constantly updating and improving our service in line with government requirements and client recommendations.
					Contact our friendly staff for more information.</p>



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

	<!-- <div class="ts_counter_bg parallax parallax2">

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











			</div> -->
			<!--/ row end -->

		<!-- </div> -->
		<!--/ Container end -->

	<!-- </div> -->
	<!--/ Counter end -->







</section>
<!--/ Main container end -->



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

</div><!-- Body inner end -->