@extends('layouts.base')
@section('title','Temporary Staffing Solutions')
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

			<img src="public/assets/images/banner/banner1.jpg" alt ="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2> Temporary Staffing Solutions</h2>

					<ul class="breadcrumb">

						<li><a href="index"> Home</a></li>

						<li>Services</li>

						<li> Temporary Staffing Solutions </li>

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

						<h2 class="title2">Temporary Staffing Solutions

							<span class="title-desc"> Temping Agency </span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">

						<h3>Easy to Hire – Whenever You Require</h3>

						<br>

						<p>We have a large pool of candidates, who always ready to start a job on short notice. This means that our team can find the right temporary staff whenever our clients needs. Team workers direct can pre-book a temporary staff for a time in the future when our clients need a temp. This will ease the process for employers and HR department of any business.</p>

						<br>

						<h3> Immediate Availability </h3>

						<br>

						<p> Due to our extensive database we can send a temp to you within hours of your request. There is no waiting and you also don’t need to give us advance notice. Once you placed your request for a temp, we will find the most appropriate temp candidate for the position and send him / her immediately to your organisation. </p>

						

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

						

						<h3> Pay As You Go Workers  </h3>

						<br>

						<p> Due to our extensive database we can send a temp to you within hours of your request. There is no waiting and you also don’t need to give us advance notice. Once you placed your request for a temp, we will find the most appropriate temp candidate for the position and send him / her immediately to your organisation. </p>

						<br>

						<h3>Pay As You Go Workers  </h3>

						<br>

						<p> One of the features of our temporary worker division is the pay as you go workers. This means that you pay an agreed amount of money to us. When you use a temp, you will not need to pay an invoice – the money will be deducted from your existing balance with us. If you don’t have funds immediately available, our pay as you go function will help you get the temp when you need it without any further payment hassles. </p>

						<br>

						<h3> We Cover Almost All Industries </h3>

						<br>

						<p>We pride ourselves on our flexibility when we provide temps to clients. Because of the diversity of our database, we can cover almost all industries. This means that whatever you need we will in all likelihood be able to provide you with the temp that you need.  </p>

						

					</div><!--/ About message end -->

					<!--/ About image end -->

				</div><!--/ Content row end -->



				



				<!-- Company Profile -->



			</div><!--/ 1st container end -->



			

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



						



						



					</div><!--/ row end -->

				</div><!--/ Container end -->

			</div><!--/ Counter end -->



			

			

		</section><!--/ Main container end -->




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

				if (myIndex > x.length) {myIndex = 1}    

					x[myIndex-1].style.display = "block";  

  setTimeout(carousel, 2000); // Change image every 2 seconds

}

</script>

</div><!-- Body inner end -->
