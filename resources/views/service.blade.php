@extends('layouts.base')
@section('title','Our Services')
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

			<h2> Our Services</h2>

			<ul class="breadcrumb">

				<li><a href="{{url('/')}}"> Home</a></li>

				<li> Our Services</li>

			</ul>

		</div>

	</div><!-- Subpage title end -->

</div><!-- Banner area end -->



<!-- Main container start -->



<!-- Main container start -->

<section id="main-container">
	<div class="container">
	<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon pull-left"><i class="fa fa-cogs"></i></span>
				<h1 class="title">Service We Provide <span class="title-desc"> Quality Recruitment Solutions</span></h1>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
					<div class="service-content text-center">
						<span class="service-icon icon-pentagon"><i class="fas fa-utensils"></i></span>
						<h3> Catering </h3>
						<p> Our catering division is widely recognised as one of the market leaders in London, supplying professional, well trained staff to the…</p> <br>
						<a href="catering" class="btn btn-primary cd-btn">Read More</a>

					</div>
				</div>
				<!--/ End first service -->

				<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
					<div class="service-content text-center">
						<span class="service-icon icon-pentagon"><i class="fas fa-hands-helping"></i></span>
						<h3> Events & Promotions </h3>
						<p>Event staff recruitment is a much specialised field in the recruitment industry.Many of the positions are seasonal while others require much…</p> <br>
						<a href="events-&-promotions" class="btn btn-primary cd-btn">Read More</a>
					</div>

				</div>
				<!--/ End Second service -->

				<div class="col-md-4 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
					<div class="service-content text-center">
						<span class="service-icon icon-pentagon"><i class="fas fa-laptop-code"></i></span>
						<h3>IT & Telecom</h3>
						<p>Incorporated in the mid-90s, our client is one of Asia’s largest real estate groups. The Singapore office operates one of the largest…</p> <br>
						<a href="it-&-telecom" class="btn btn-primary cd-btn">Read More</a>

					</div>
				</div>
				<!--/ End Third service -->
			</div>
		</div> <br> <br> <br><br>
		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fas fa-users"></i></span>
					<h3> Light Industrial Staff</h3>
					<p>There are many positions that could arise in an industrial setting. Temping Agency will be able to fill any of them on short notice – from cleaning staff to…</p> <br>
					<a href="light-industrial-staff" class="btn btn-primary cd-btn">Read More</a>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fas fa-percent"></i></span>

					<h3> Sales & Retail </h3>
					<p>Our client is one of the leading international providers of co-working spaces. In addition to various successful locations in North America, the…</p> <br>
					<a href="sales-&-retail" class="btn btn-primary cd-btn">Read More</a>

				</div>

			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="far fa-smile"></i></span>

					<h3> Hospitality </h3>
					<p>With over four million confirmed cases of coronavirus around the world, governments across the globe have had to implement stringent measures to…</p> <br>
					<a href="hospitality" class="btn btn-primary cd-btn">Read More</a>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fas fa-hammer"></i></span>

					<h3> Construction </h3>
					<p>At Temping Agency, we specialise in providing Construction Labourers and skilled tradespeople to the construction and residential industries. We can…</p> <br>
					<a href="construction" class="btn btn-primary cd-btn">Read More</a>


				</div>
			</div>
			<!--/ End 4th service -->
		</div>
	</div><!-- Content row end -->
	<!--/ Container end -->
</section>
	</div>
	<!--/ 1st container end -->

</section>
<!--/ Main container end -->
</div><!-- Body inner end -->