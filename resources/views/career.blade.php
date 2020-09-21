@extends('layouts.base')
@include('meta::manager', [
    'title'         => 'Our Services',
    'description' => 'Temp agency provides temp jobs in various industries that helps our clients finding their dream jobs according to their necessities.',
])
@section('title','Jobs')
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

	.title{
		display: inline-block;
		white-space: nowrap;
		overflow-x: hidden;
		text-overflow: ellipsis;
		max-width: 300px;	    
	}
</style>


<div id="banner-area">
	<img src="public/assets/images/banner/banner2.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Jobs Openings</h2>
			<ul class="breadcrumb">
				<li>Home</li>
				<li>Company</li>
				<li><a href="#"> Jobs</a></li>
			</ul>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->

<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="row">
					@foreach($jobs as $job)
					<div class="col-md-4">
						<div class="well">
							<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
							<h4><span class="title">{{ $job->title }}</span></h4>
							<a href="our-services/{{$job->slug}}" class="btn btn-primary">Read More</a>
						</div>
					</div>
					@endforeach
			</div>
					{{ $jobs->links() }}
			<!--/ Content col end -->

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sidebar sidebar-right">
					<!-- category start -->
					<div class="widget widget-categories">
						<h3 class="text-align">How to Apply</h3>
						<p class="text-align">Send your cv, relevant work experience and anything else that will make you stand out to Temping Agency.</p>
					</div><!-- category end -->

					<!-- tags start -->
					<div class="widget widget-tags">
						<h3 class="text-align">Why Us</h3>
						<p class="text-align">We are an award winning company. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>
					</div><!-- tags end -->


				</div>
				<!--/ Sidebar end -->
			</div>
			<!--/ Sidebar col end -->
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->

</div><!-- Body inner end -->

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