@extends('layouts.base')
@include('meta::manager', [
    'title'         => 'Temp Agency - Quality Recruitment & Temporary Jobs Specialist',
    'description' => 'Are You Looking for Temporary Jobs or Would Like to Hire Temp? We are UK’s Top-Rated Temp Agency, Specialist Recruitment Agency for Short Terms & Temporary Staff.',
    'keywords' => 'Temp Agency, Temp, Agency',
])
@section('title','Temp Agency - Quality Recruitment & Temporary Jobs Specialist')
@section('content')
<link rel="icon" href="public/assets/images/logo-favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" href="public/assets/images/logo-favicon.png">
<style>
	#recruitment-image-index {
		height: 650px;
	}

	.cd-slider-nav{
		margin-bottom: 40px;
	}

	@media only screen and (min-width: 200px) and (max-width: 768px) {
		body {
			/* width: 100%; */
			overflow-x: hidden;
		}

		#recruitment-image-index {
			height: 340px;
		}

		.text-align {
			text-align: center;
		}

		#myVideo {
			position: fixed;
			max-height: 100%;
			max-width: 100%;
			position: fixed;
			top: 80px !important;
			min-width: 100%;
		}

		.video-bg {
			height: 44vh !important;
		}

		.mobile-margin-top {
			margin-top: -35px;
		}
	}
</style>
<!-- Slider start -->
<section id="home" class="no-padding">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected video-bg">
				<div class="overlay2">
					<!-- <img class="" src="images/slider/bg1.jpg" alt="slider"> -->
					<video autoplay muted loop id="myVideo">
						<source src="public/assets/videos/temping-agency-8-9-20.mp4" type="video/mp4">
					</video>
				</div>
				<div class="cd-full-width">
					<h2> Temping Agency </h2>
					<h3> Top Rated Temp Agency</h3>
					<p> Our exclusive service model means our temps receive hours of industry-focused preparation – make sure they are the perfect fit for your business from day one.</p>
					<a href="book-a-temp" class="btn btn-primary white cd-btn">HIRE A TEMP</a>
					<a href="about2" class="btn btn-primary solid cd-btn">Learn More</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="public/assets/images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>Hire Staff On-Demand</h2>
					<p> Over 60,000 flexible workers available 24/7</p>
					<p>We have a large pool of candidates, who always ready to start a job on short notice</p>
					<a href="book-a-temp" class="cd-btn btn btn-primary solid">Hire Temporary Staff</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="public/assets/images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="public/assets/images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="public/assets/images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2> Looking For a Job? </h2>
					<p>If you looking for a full time, part time or seasonal Job in London then registering with a temping agency is always a good move. </p>
					<a href="job-seeker" class="cd-btn btn btn-primary white">Job Seekr</a>
					<a href="our-services" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2> Professional Service </h2>
					<h4 style="color:#fff;"> Efficient matching between job specification and candidate </h4>
					<p>As a top temping agency in London, we are the best choice for all your recruitment and staffing needs backed by professional service and a replacement guarantee. </p>
					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video" width>
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul class="mobile-margin-top">
					<li class="selected"><a href="#0"><i class="fas fa-poll" style="color:#51284f;"></i> Intro</a></li>
					<li><a href="#0"><i class="fas fa-edit" style="color:#51284f;"></i> Hire</a></li>
					<li><a href="#0"><i class="fas fa-address-card" style="color:#51284f;"></i> Jobs</a></li>
					<li class="video"><a href="#0"><i class="fa fa-video-camera" style="color:#51284f;"></i> Video</a></li>
				</ul>
			</nav>
		</div> <!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->

<section class="service angle">
	<div class="container">

		<!-- Company Profile -->
		<div class="col-md-12 heading text-center">
			<h1 class="title2">Welcome to Temping Agency
				<span class="title-desc"> Top Rated Temp Agency </span>
			</h1>
		</div>

		<div class="row about-wrapper-top">
			<div class="col-md-6 ts-padding about-message">



				<h3 class="text-align"> An Award Winning Recruitment Agency</h3> <br>
				<p class="text-align"> As part of Workers Direct, Our team known as one of the best temping agency in London. We can claim this based on the many years of experience that we have in the temporary recruitment field. Our placement rates, satisfied clients and happy candidates all attest to our ability to provide an excellent service.
				</p>





				<!--/ About message end -->

			</div>
			<!--/ Content row end -->

			<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(public/assets/images/pages/about-3.jpg) 50% 50% / cover no-repeat;">
			</div>
		</div>
		<div class="row about-wrapper-bottom">
			<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(public/assets/images/pages/about-2.jpg) 50% 50% / cover no-repeat;">
			</div>
			<!--/ About image end -->
			<div class="col-md-6 ts-padding about-message">

				<h3 class="text-align"> Professionalism</h3>
				<p class="text-align">As team of professionals we can confidently say that we have an outstanding track record in all of the above. Our first concern is always the client’s needs and then we consider our candidates’ potential to fulfil those needs.</p>

				<p class="text-align"> We are not the regular staff recruitment agency that you will find advertised on the net and in the papers. Our candidates come from a range of backgrounds and are placed on our extensive, specialist databases. </p>
				<p class="text-align">As a temping agency we vetted all candidates with great vigour. Being a top temp agency our consultants not only present the candidate’s CV, but also with test results of their skills and full reference checks. </p>



			</div>
			<!--/ About message end -->
		</div>
		<!--/ Content row end -->

		<div class="row about-wrapper-top">
			<div class="col-md-6 ts-padding about-message">
				<h3 class="text-align"> Our Consultants</h3>
				<p class="text-align"> The consultant that you deal with will have had a thorough face-to-face interview with the candidate and will be able to tell you his / her impressions of the candidate. </p>
				<p class="text-align">Agency temps are usually very experienced individuals as they are required to work in a variety of settings. Here they gain a smorgasbord of knowledge and learn to be very adaptable to the different situations that they are placed in. Temps are also very keen to learn as each new skills provides them with an additional opportunity to find assignments. This is beneficial to your company as the work will be done with new creativity and analytical skills. </p>
			</div>
			<!--/ About message end -->
			<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(public/assets/images/pages/about-1.jpg) 50% 50% / cover no-repeat;">
			</div>
			<!--/ About image end -->
		</div>
		<!--/ Content row end -->



		<!-- Company Profile -->

	</div>
	<!--/ 1st container end -->
</section>

<!-- Service box start -->
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
<!--/ Service box end -->

<!-- Portfolio start -->



<!-- Counter Strat -->
<section class="ts_counter no-padding">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-2 col-sm-6">
				<span class="facts-icon"><i class="fas fa-users"></i></span>
				<div class="facts-num">
					<span class="counter">52950</span> <span> +</span>
				</div>
				<h3>Workers</h3>
			</div>

			<div class="facts two col-md-2 col-sm-6">
				<span class="facts-icon"><i class="far fa-thumbs-up"></i></span>
				<div class="facts-num">
					<span class="counter">98</span> <span> %</span>
				</div>
				<h3>Enjoy work with us</h3>
			</div>

			<div class="facts one col-md-2 col-sm-6">
				<span class="facts-icon"><i class="fas fa-user-shield"></i></span>
				<div class="facts-num">
					<span class="counter">92</span> <span> %</span>
				</div>
				<h3>Retained Workers</h3>
			</div>

			<div class="facts two col-md-2 col-sm-6">
				<span class="facts-icon"><i class="far fa-clock"></i></span>
				<div class="facts-num">
					<span class="counter">4773600</span> <span> +</span>
				</div>
				<h3>Worked Hours</h3>
			</div>

			<div class="facts three col-md-2 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span> <span> +</span>
				</div>
				<h3>Clients</h3>
			</div>

			<div class="facts four col-md-2 col-sm-6">
				<span class="facts-icon"><i class="fas fa-building"></i></span>
				<div class="facts-num">
					<span class="counter">39780</span> <span> +</span>
				</div>
				<h3>Sites</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<!-- Feature box start -->
<section id="feature" class="feature">
	<div class="container">
		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-users"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Temporary Staff</h3>
					<p class="text-align">Our usual staff would be more than willing to go for temporary role to see if they do fit in to the mix of their next job location. This gives great opportunity for clients as well.</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-file-signature"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Contractual Staff</h3>
					<p class="text-align">Our contractual staff would be provided enough notification before job start to confirm their availability for next adventure. Most of these are our regular applicants.</p>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-search"></i></span>
				<div class="feature-content">
					<h3 class="text-align">DBS and Vetting process</h3>
					<p class="text-align">We do run through complete vetting process before sending any applicant for their thorough DBS checks. This gives us complete knowledge of their likely future roles.</p>
				</div>
			</div>
			<!--/ End 3rd featurebox -->
		</div>
		<!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-sync-alt"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Increase staffing</h3>
					<p class="text-align">To increase staff there is no reason for clients to worry as we can do it in a few moments even. Our database is full of people with unbelievable calibre of skills and experiences.</p>
				</div>
			</div>
			<!--/ End 1st featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-hourglass"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Flexible workforce</h3>
					<p class="text-align">Our workers are flexible so available to start as soon as you need them. Their experience is next to none other in that very industry and they can start right away.</p>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-sitemap"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Hire 1 or 1000 people</h3>
					<p class="text-align">Our people are available in all sorts of industries in all areas of UK. You can instantly get people from us from as little as 1 to as many as 1000 in one go.</p>
				</div>
			</div>
			<!--/ End 3rd featurebox -->

		</div>
		<!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fa fa-whatsapp"></i></span>
				<div class="feature-content">
					<h3 class="text-align">24 hour support</h3>
					<p class="text-align">Our team is available around the clock working for you. It means if you are put at halt by certain person that you need replacing we can help.</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-user-check"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Screening / vetting</h3>
					<p class="text-align">Screening/vetting process from us is usual for each and every candidate. We get reference checked and ensure our people have been vetted.</p>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon pull-left"><i class="fas fa-certificate"></i></span>
				<div class="feature-content">
					<h3 class="text-align">Permanent Staff</h3>
					<p class="text-align">Our usual staff would be more than willing to go for temporary roles to ensure they would be filled up available for next adventurous run to get permanent.</p>
				</div>
			</div>
			<!--/ End first featurebox -->
		</div>
		<!-- Content row end -->

	</div>
	<!--/ Container end -->
</section>
<!--/ Feature box end -->


<section id="image-block" class="image-block no-padding">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12 ts-padding" id="recruitment-image-index" style="background:url(public/assets/images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 col-sm-12 ts-padding img-block-right">
				<div class="img-block-head text-center">

					<h1>Why Choose Us</h1>
					<p>In the competitive corporate world, it is very difficult to find the right temp for the job. You need specific skills and experience and most people with these skills and experience are already taken – either as temps or on a permanent basis.
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon pull-left"><i class="fa fa-bicycle" style="padding-top:14px;"></i></span>
					<div class="feature-content">
						<h3 class="text-align"> Right Temp on Right Time</h3>
						<p class="text-align">Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon pull-left"><i class="fa fa-diamond" style="padding-top:14px;"></i></span>
					<div class="feature-content">
						<h3 class="text-align">Your Temp Agency</h3>
						<p class="text-align">Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon pull-left"><i class="fa fa-street-view" style="padding-top:14px;"></i></span>
					<div class="feature-content">
						<h3 class="text-align"> Temps Registered With Us</h3>
						<p class="text-align">Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->


<!-- Team start -->


<!-- Parallax 1 start -->



<!-- Testimonial start-->
<section class="testimonial parallax parallax2" style="margin-bottom: 30px;">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
				<div class="item">
					<div class="testimonial-thumb">
						<img src="public/assets/images/testimonials/testimonials1.png" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Temping Agency, A best agency in Uk which provides a temp job with a good pay rate. All are very helpful in finding a job. A good experience of working with them.
						</p>
						<h3 class="name">Ricardo Villar<span>Temp.Medical Secretary</span></h3>
					</div>
				</div>
				<div class="item">
					<div class="testimonial-thumb">
						<img src="public/assets/images/team/testimonial2.jpg" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Recently finished a 6 weeks temp assignment with temping agency as Head chef and found them very professionals.
							Strongly recommended for temp and short terms job search.
						</p>
						<h3 class="name">Sandra Rojer<span>Head Chef</span></h3>
					</div>
				</div>
				<div class="item">
					<div class="testimonial-thumb">
						<img src="public/assets/images/testimonials/testimonials3.jpg" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Good Professional people had a good experience from their services. Reliable and very helpful. Highly Recommended.
						</p>
						<h3 class="name">Katherine<span>Sales Manager</span></h3>
					</div>
				</div>
			</div>
			<!--/ Testimonial carousel end-->
		</div>
		<!--/ Row end-->
	</div>
	<!--/  Container end-->
</section>
<!--/ Testimonial end-->


<!-- Clients start -->
<!-- <section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client1.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client2.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client3.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client4.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client5.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client6.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client7.png" alt="client">
					</a>
				</figure>
				<figure class="item client_logo">
					<a href="#">
						<img src="public/assets/images/clients/client8.png" alt="client">
					</a>
				</figure> -->
</div><!-- Owl carousel end -->
</div><!-- Main row end -->
</div>
<!--/ Container end -->
</section>
<!--/ Clients end -->

</div>


<!-- Body inner end -->