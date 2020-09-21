@extends('layouts.base')
@include('meta::manager', [
    'title'         => 'About Us',
    'description' => 'Temping Agency is one of the best recruitment agencies in London, working to millions of individuals to secure their dream jobs according to their necessities. We have been providing brilliant recruitment services to our customers since the last 10 years by offering millions of the most recent employment opportunity postings in different industries.',
])@section('title','About Us')
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
			<h2>About Us</h2>
			<ul class="breadcrumb">
				<li> <a href="{{url('/')}}">Home </a></li>
				<li>Company</li>
				<li> About Us</a></li>
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
				<h2 class="title2">About Our Company
					<span class="title-desc">Quality Recruitment Solutions</span>
				</h2>
			</div>
		</div><!-- Title row end -->

		<div class="row about-wrapper-top">
			<div class="col-md-12 ts-padding about-message">

				<p class="text-align">As part of Workers Direct, Our team known as one of the best temping agency in London. We can claim this based on the many years of experience that we have in the temporary recruitment field. <br> Our placement rates, satisfied clients and happy candidates all attest to our ability to provide an excellent service. </p>
				<p> Some of the things that you need to look out for in a temping agency are:</p>
				<ul class="unstyled arrow">
					<li>Professional service </li>
					<li>Efficient matching between job specification and candidate </li>
					<li>Consultants’ ability to interview and determine the skills, qualifications and experience of potential candidates </li>
					<li>The ability to recognise the client’s company culture and match candidates accordingly </li>
					<li>Consultants’ ability to give professional service and keep clients on the agency’s books </li>

				</ul>
				<br>
				<p class="text-align">As team of professionals we can confidently say that we have an outstanding track record in all of the above. Our first concern is always the client’s needs and then we consider our candidates’ potential to fulfil those needs. We are not the regular staff recruitment agency that you will find advertised on the net and in the papers. Our candidates come from a range of backgrounds and are placed on our extensive, specialist databases. </p>
				<p class="text-align"> One of the things that we are very proud of is the speciality fields within the agency. We cater for staff in industries such as the hospitality industry, medical fields etc. Our consultants in each specialist field are uniquely trained to do both interviews and placements based on the field that they are working in. Our placement rate in these fields is very high and our candidates as well as our clients are very happy with the matches that we made. </p>


				<p class="text-align">As a top<a style="color:#51284f; " href="https://www.temping-agency.com"> temping agency in London </a>, we are the best choice for all your recruitment and staffing needs backed by professional service and a replacement guarantee. </p>
				<br> <br> <br>



				<div class="container">
					<!-- Product Blocks -->


					<div class="row text-center wow fadeInRight">

						<div class="col-md-12   ftco-animate">
							<div>
								<iframe style="border:0; height: 500px; width: 100%;" src="https://www.youtube.com/embed/neRtbXyynsU"></iframe>
							</div>
							<br>
						</div>
					</div>


				</div>






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
</div><!-- Body inner end -->