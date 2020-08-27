@extends('layouts.base')
@section('title','Staff On Call')
@section('content')


<style>
	@media only screen and (min-width: 200px) and (max-width: 768px) {
		body {
			/* width: 100%; */
			overflow-x: hidden;
		}
	}
</style>



		<div id="banner-area">

			<img src="public/assets/images/banner/banner1.jpg" alt="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2> Staff On Call</h2>

					<ul class="breadcrumb">

						<li><a href="index"> Home</a></li>

						<li>Services</li>

						<li> Staff On Call </li>

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

						<h2 class="title2">Staff On Call

							<span class="title-desc"> Temping Agency </span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">



						<p> One of the benefits of having access to temporary staff is that you can arrange for staff to be on call. This means that your chosen temps are ready to come to work at a moment’s notice. All you have to do is ask the agency to make a call to the temp and inform him / her that they are needed at your offices. </p>

						<br>

						<h3> How does the staff on call system work? </h3>

						<br>

						<p> The on-call system is a very simple system. For it to work, the agency has to understand your productivity needs. It is also important that the temp understands what is expected of him / her. The best approach would be to identify the ideal candidate for the job and introduce him / her to the company and the office that s/he will be working in. It is also advisable to allow the temp to spend some time observing / working in your office in order to get a feel for the job that s/he will be expected to do. </p>

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

						<h3> Agree the terms and conditions </h3>

						<br>

						<p> Once the ideal candidate is identified, the terms and conditions of his / her on-call status need to be negotiated. Some of the terms could be the hours that the candidate will be expected to be on call. Furthermore, the rate per hour for the period of on-call service also needs to be determined. The rate could be the same as if the candidate is actually working. Alternatively there could be a reduced rate for the on-call period with an increased rate for actual hours worked. </p>

						<br>

						<h3> Convenience </h3>

						<br>

						<p> Our service provides for a service that makes candidates conveniently available whenever you need temporary staff. The candidate will be ready to go in to your office at a moment’s notice and work the hours required. This makes for a convenient solution to having work done on a just-in-time basis at the most affordable way possible. </p>











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
