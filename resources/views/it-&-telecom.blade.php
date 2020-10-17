@extends('layouts.base')
@include('meta::manager', [
    'title'         => 'IT & Telecom',
    'description' => 'Joined during the 90s, our customer is one of Asia\'s largest real estate groups. The Singapore office works one of the biggest hospitality portfolios in the city. We are hoping to welcome on board an IT Manager. This job will help the Infrastructure Manager to create IT foundation arrangements driving system and change. You will be a technology expert.',
])
@section('title','IT & Telecom')
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

			<h2> IT & Telecom</h2>

			<ul class="breadcrumb">

				<li><a href="{{url('/')}}"> Home</a></li>

				<li>Services</li>

				<li> IT & Telecom </li>

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

				<h2 class="title2">IT & Telecom

					<span class="title-desc"> Temping Agency </span>

				</h2>

			</div>

		</div><!-- Title row end -->



		<div class="row about-wrapper-top text-align">

			<div class="col-md-12 ts-padding about-message">
				<p>

					Incorporated in the mid-90s, our client is one of Asia’s largest real estate groups. The Singapore office operates one of the largest hospitality portfolios in the city and has a growing reputation for innovative concepts.

					We are looking to bring on board an IT Manager.

					This role will be helping the Infrastructure Manager to develop IT infrastructure solutions driving strategy and transformation. You will be a technology expert, involved in IT infrastructure designing, planning and implementation. Participating in procurement and renewal processes will require resolution of IT infrastructure issues, gathering requirements, preparing documentation/business case proposals (RFPs) and conducting presentations. You will drive to improve effectiveness of IT infrastructure operations.</p>

				<p>To be successful, you will hold a Computer Science/Engineering degree with at least 5 years’ experience and preferably be certified in networking/system technologies (CCNA). You will have experience in managing projects, managing vendors, developing business proposals and implementing general IT solutions. You will be used to working with Cisco and Microsoft Azure, and have acquired knowledge of infrastructure best practices, system, processes and methodologies.</p>
				<section>

					<div class="container">

						<div class="row">

							<div class="w3-content w3-section" style="max-width:1100px">



								<img class="mySlides" src="public/assets/images/slider3/industry-2630319 (1).jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider3/ipad-820272.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider3/engineer-2558705.jpg" style="width:100%">





							</div>

						</div>

					</div>

				</section>



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
				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="fas fa-users"></i></span>
					<div class="facts-num">
						<span class="counter">52950</span> <span> +</span>
					</div>
					<h3>Workers</h3>
				</div>

				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="far fa-thumbs-up"></i></span>
					<div class="facts-num">
						<span class="counter">98</span> <span> %</span>
					</div>
					<h3>Enjoy work with us</h3>
				</div>

				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="fas fa-user-shield"></i></span>
					<div class="facts-num">
						<span class="counter">92</span> <span> %</span>
					</div>
					<h3>Retained Workers</h3>
				</div>

				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="far fa-clock"></i></span>
					<div class="facts-num">
						<span class="counter">4773600</span> <span> +</span>
					</div>
					<h3>Worked Hours</h3>
				</div>

				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="fa fa-user"></i></span>
					<div class="facts-num">
						<span class="counter">1200</span> <span> +</span>
					</div>
					<h3>Clients</h3>
				</div>

				<div class="facts col-md-2 col-sm-6">
					<span class="facts-icon"><i class="fas fa-building"></i></span>
					<div class="facts-num">
						<span class="counter">39780</span> <span> +</span>
					</div>
					<h3>Sites</h3>
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