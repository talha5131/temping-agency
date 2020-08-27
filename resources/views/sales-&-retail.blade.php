@extends('layouts.base')
@section('title','Sales & Retail')
@section('content')


<style>
	html,
	body {
		width: 100%;
		margin: 0px;
		padding: 0px;
		overflow-x: hidden;
	}
</style>


		<div id="banner-area">

			<img src="public/assets/images/banner/banner1.jpg" alt="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2> Sales & Retail</h2>

					<ul class="breadcrumb">

						<li><a href="index"> Home</a></li>

						<li>Services</li>

						<li> Sales & Retail </li>

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

						<h2 class="title2">Sales & Retail

							<span class="title-desc"> Temping Agency </span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">


						<p>
							Our client is one of the leading international providers of co-working spaces. In addition to various successful locations in North America, the Middle East and the Asia-Pacific region, our client is also increasingly expanding in Europe. As part of the market entry in Germany at the end of 2018, we are now looking for a sales manager (m / f / d) who will set milestones in the market penetration of the respective regional markets and also build up and maintain a network to create sustainable synergies here.</p>

						<p>Although our client hides a well-situated and well-structured group, the Berlin work environment is characterized by a positive, dynamic and varied working atmosphere. In addition to a friendly and friendly working atmosphere, you can expect a permanent contract, a responsible job and good development opportunities.</p>


						<h3> The area of ​​responsibility </h3>

						<ul class="list-group list-group-flush">
							<li class="list-group-item">Support and advice for customers and interested parties in Berlin</li>
							<li class="list-group-item">Marketing of space and participation in the definition of the service portfolio</li>
							<li class="list-group-item">Support for customers on site</li>
							<li class="list-group-item">Establishment of a sales-relevant network in Berlin</li>
							<li class="list-group-item">Pursuit of a project pipeline</li>
							<li class="list-group-item">Responsibility for budget and sales</li>
							<li class="list-group-item">Drafting offers and coordinating the Contract management</li>
						</ul>

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

						<h3>The requirement profile</h3>

						<ul class="list-group list-group-flush">
							<li class="list-group-item">Completed commercial training or a degree in economics or a comparable qualification</li>
							<li class="list-group-item">Professional experience in a comparable position</li>
							<li class="list-group-item">Well-versed handling of the MS Office package</li>
							<li class="list-group-item">Excellent manners, high level of commitment and pronounced service orientation/li>
							<li class="list-group-item">Professional, friendly demeanor and pronounced teamwork</li>
							<li class="list-group-item">Loyalty, motivation and pronounced service awareness are a matter of course</li>
						</ul>

						<br>

						<h3>Are you interested?</h3>

						<br>

						<p>Then please send us your meaningful application documents using the "Apply" button or call us at +49 (0) 30 5 7700 5124 to find out more about this position. Please tell us your desired salary, your notice periods and your earliest possible start date. Our specialist advisor Mr. Patrick Bierhals looks forward to your application documents!
						</p>













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
