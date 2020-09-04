@extends('layouts.base')
@section('title','Light Industrial Staff')
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

			<h2> Light Industrial Staff</h2>

			<ul class="breadcrumb">

				<li><a href="{{url('/')}}"> Home</a></li>

				<li>Services</li>

				<li> Light Industrial Staff </li>

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

				<h2 class="title2" style="padding-bottom: 10px;">Light Industrial Staff

					<span class="title-desc"> Temping Agency </span>

				</h2>

			</div>

		</div><!-- Title row end -->



		<div class="row about-wrapper-top text-align">

			<div class="col-md-12 ts-padding about-message">

				<h3> Industrial Staffing Solutions </h3>

				<br>

				<p>There are many positions that could arise in an industrial setting. Temping Agency will be able to fill any of them on short notice – from cleaning staff to fork lifters etc. We have an extensive database of candidates who will be able to fill these positions. They are experienced, have the necessary qualifications and are ready, willing and able to work as soon as the job spec comes in. If you’re not sure about which requirements the candidate should meet in order to do the specific job, our experienced consultants will help you put together the necessary job description. They will also help you with any other requirements that you may have regarding the position or other positions that you may have in mind. </p>

				<br>

				<h3> Skilled and Technical Staffing </h3>

				<br>

				<p>There is always a need for skilled and technical staff. We have many very well qualified, experienced and skilled technical staff in our database of candidates. Our consultants will be able to find the right person for your position without much trouble. Because we aim for solutions and not just service, we will also go on a recruitment drive to find the right person for you if we don’t have any suitable candidates on our books. All this at no extra cost to you. </p>

				<section>

					<div class="container">

						<div class="row">

							<div class="w3-content w3-section" style="max-width:1100px">



								<img class="mySlides" src="public/assets/images/slider3/working-1024382.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider3/excavators-1174428.jpg" style="width:100%">

								<img class="mySlides" src="public/assets/images/slider3/assembling-2739251.jpg" style="width:100%">




							</div>

						</div>

					</div>

				</section>

				<h3>Drivers and Technicians </h3>

				<br>

				<p> Drivers and technicians are always in high demand and finding ones that are available is practically impossible. Workers Direct has enough of these candidates in our database in order to fulfil your needs speedily. Our drivers have all the statutory qualifications and certifications and the technicians are suitably qualified and experienced. Both of these classes of candidates are highly skilled at what they do and come highly recommended by our consultants who deal with them on a daily basis. </p>

				<h3>General Helpers and Support Staff </h3>

				<br>

				<p> They work in the background and are hardly ever noticed. However: If they’re not there, their absence is sorely noted. If you need to hire somebody on a temporary basis to fill one of these positions, you need access to Workers Direct’s extensive database. Our friendly consultants will assist you in any way possible to find the right general helper or support person for your organisation. As with all our candidates, our general helpers and support staff are experienced and have all the statutory certification that they may need to do their jobs.



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