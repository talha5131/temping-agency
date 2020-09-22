@extends('layouts.base')
@include('meta::manager', [
    'title'         => 'Testimonials',
    'description' => 'WHAT OUR CLIENTS SAY
I employed 10 staff over an 8 week contract to provide front of house staff for Paddington on Ice. The staff proved reliable and very helpful. Always willing to work and in time. Temping Agency provided great support and communication throughout the contract and I would not hesitate to use them repeatedly.
KIM KATHERINE
Recruitment Manager
The company I work for hired a couple of guys for a day\'s fairly heavy duty work on a building site in London. They were punctual and worked very hard all day. They were well thought of by our site staff who are very difficult to please! Mark Thomas.
MARK THOMAS
General Manager
',
])
@section('title','Testimonials')
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
	}
</style>

<div id="banner-area">
	<img src="public/assets/images/banner/banner2.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Testimonials</h2>
			<ul class="breadcrumb">

				<li><a href="{{url('/')}}"> Home</a></li>
				<li>Testimonials</li>

			</ul>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->

<section id="main-container">
	<div class="container">

		<!-- Services -->

		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title classic">What Our Clients Say</h2>
			</div>
		</div>


		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="ts-testimonial-content">
					<img src="public/assets/images/testimonials/testimonials4.jpg" alt="testimonial">
					<p class="ts-testimonial-text">
						I employed 10 staff over a 8 week contract to provide front of house staff for Paddington on Ice.
						The staff proved reliable and very helpful.
						Always willing to work and in time.
						Temping Agency provided great support and communication throughout the contract and I would not hesitate to use them over and over again.
					</p>

					<div class="ts-testimonial-author">
						<h3 class="name">Kim Katherine<span>Recruitment Manager</span></h3>
					</div>
				</div><!-- Testimonial content end -->

			</div><!-- End col-md-6 -->

			<div class="col-md-6 col-sm-6">
				<div class="ts-testimonial-content">
					<img src="public/assets/images/testimonials/testimonials5.png" alt="testimonial">
					<p class="ts-testimonial-text">
						The company I work for hired a couple of guys for a day's fairly heavy duty work on a building site in London. They were punctual and worked very hard all day. They were well thought of by our site staff who are very difficult to please!
						Mark Thomas.
					</p>

					<div class="ts-testimonial-author">
						<h3 class="name">Mark Thomas<span>General Manager</span></h3>
					</div>
				</div><!-- Testimonial content end -->

			</div><!-- End col-md-6 -->
		</div><!-- Content row  end -->

	</div>
	<!--/ container end -->

</section>
<!--/ Main container end -->

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3> Email us at info@temping-agency.com
				</h3>
				<a href="mailto:info@temping-agency.com" class="pull-right btn btn-primary white">Email Us</a>
			</div>
		</div>
	</div>
</section>

</div><!-- Body inner end -->