@extends('layouts.base')
@section('title','Agency Temp')
@section('content')

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

			<h2> Agency Temps</h2>

			<ul class="breadcrumb">

				<li><a href="index"> Home</a></li>

				<li>Services</li>

				<li> Agency Temps</li>

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

				<h2 class="title2">Agency Temps

					<span class="title-desc"> Temping Agency </span>

				</h2>

			</div>

		</div><!-- Title row end -->



		<div class="row about-wrapper-top">

			<div class="col-md-12 ts-padding about-message">



				<p class="text-align"> Very often a company has the need for a temporary employee and then decides to employ that person on a permanent basis. These practices are common enough for agencies to have clauses in their contracts dealing with this situation.</p>

				<br>

				<h3 class="text-align">Temp to Perm Staff </h3>

				<br>

				<p class="text-align"> Temp workers are usually hard workers with varied experience and qualifications. However, they are also willing to learn as this will help them perform well in their next assignment. As part of their reward they are often asked to join the company on a permanent basis. This is a great opportunity for the temp and they will often want to accept the offer that is made to them. At this point the employer is then referred to the agency in order to negotiate the most appropriate conditions of employment on behalf of the temp. </p>

				<br>

				<h3 class="text-align">Contractual Staffing Solutions </h3>

				<br>

				<p>Despite the fact that the client has a contract with the agency, we are always willing to negotiate terms and conditions on behalf of the temp. Here there are two issues at stake: </p>

				<ol>

					<li>The contractual relationship with the agency </li>

					<li>The new contractual relationship between the client and the temp </li>

				</ol>

				<p class="text-align">As soon as the agency is notified of the offer of permanent employment, we will follow the terms in the existing contract and only charge a placement fee in keeping with the negotiated tariff when the contract was signed. After that there are no further costs or charges for the additional service of getting the temp’s employment contract negotiated and eventually signed. The temp may work at the client’s business for the duration of the negotiations. </p>

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

				<h3 class="text-align">Agency involvement </h3>

				<br>

				<p class="text-align"> We pride ourselves on the excellent relationship that we have with both our candidates and clients and we happily assist with the employment process. Our consultants are fully trained to assist with advice as well as practicalities such as reading the employment contract with the candidate and giving an opinion on what is on offer. We will also help the client formulate an appropriate employment contract to offer to the candidate. </p>













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