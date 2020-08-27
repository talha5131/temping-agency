@extends('layouts.base')
@section('title','About Us')
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

					<h2> Temporary Labourer</h2>

					<ul class="breadcrumb">

						<li><a href="index"> Home</a></li>

						<li>Services</li>

						<li> Temporary Labourer </li>

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

						<h2 class="title2">Temporary Labourer

							<span class="title-desc"> Temping Agency </span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">



						<p> Temping Agency has developed a name as one of the very best labourer agencies in London. We aim to offer our customers top quality service and provide only the best candidates. Our incredibly capable, dedicated team of recruiters are well trained in the process of conducting interviews and screening candidates so that our customers only get the cream of the crop. We know that you as a company cannot and will not settle for anything less than the very best employees and it is our goal to find those employees for you. </p>

						<br>

						<h3> Team of Site Operatives </h3>

						<br>

						<p>As far as scope of work goes, there is no job too large and no job too small for us. Whether you just need one individual to fill a post or if you require an entire team, our recruiters will find the candidates to make sure your job gets done in a manner that meets your deadlines and expectations and promotes your companies good name and image. </p>

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

						<h3> Right Candidates </h3>

						<br>

						<p> Our goal is to supply you with exactly the right candidates to fill any position you need filled. Our candidates go through a rigid screening process to ensure that they are up to scratch and suitable to fill the positions that our customers need them in. We understand full well that every candidate carries with them, our good name and reputation that we have worked hard over the years to build and thus we are not willing to send out a candidate that may compromise the view that our customers have of us as a labourer agency london.



						</p>

						<br>

						<h3> Our Guarantee

						</h3>

						<br>

						<p>With us you can rest assured that your needs are our priority, no matter how big or small those needs are we will strive to fulfill them. So for the best service and staff candidates of the highest caliber you can always feel safe placing your needs in our capable hands.



						</p>

						<br>













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
