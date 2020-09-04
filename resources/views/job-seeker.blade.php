@extends('layouts.base')
@section('title','Job Seeker')
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

            <h2>Job Seeker</h2>

            <ul class="breadcrumb">

                <li><a href="{{url('/')}}"> Home</a></li>

                <li>Services</li>

                <li>Job Seeker</li>

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

                <h2 class="title2">Job Seeker

                    <span class="title-desc"> Temping Agency </span>

                </h2>

            </div>

        </div><!-- Title row end -->



        <div class="row about-wrapper-top text-align">

            <div class="col-md-12 ts-padding about-message">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align: center;">Facts & Figures</h3>
                    </div>
                    <div class="col-md-4">
                        <h4>SIGNIFICANT EXPERIENCE</h4>
                        <p>We ensure all our operatvies Must have least 1 - 2 years important Experience.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h4>
                            24/7 Availability</h4>
                        <p>Our customer service staff is available 24/7 online and on phone to fill in any urgent vacancy.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h4>ADAPTABLE AND RELIABLE</h4>
                        <p>Every one of our temps are completely ready to begin on short notice at whatever point required.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h1>1000+</h1>
                        <p>More than 1,000 job seekers got their expected jobs by Labourer Agency.</p>
                    </div>
                    <div class="col-md-4">
                        <h1>10,000+</h1>
                        <p>Temping Agency has now grown its team to more than 10,000 talented people.</p>
                    </div>
                    <div class="col-md-4">
                        <h1>MILLIONS</h1>
                        <p>Since founded, millions of job searchers have been registered with temping agency.</p>
                    </div>
                </div>
                <br>
                <h3>Job SEARCHER</h3>

                <br>

                <p>At Temping Agency, we don’t prioritize our clients as compared to our candidates unlike other recruitment agencies. Our main focus is our candidates and we believe that they’re important and they deserve the best service that we can offer.
                </p>

                <p>We provide the following services to our job seekers:</p>

                <br>

                <h3> Quick Turnaround </h3>

                <br>

                <p>We won't leave you waiting for a call after you make your application. We will guarantee we hit you up quickly, regardless of the result of your application.</p>

                <h3> CONSISTENT CONTACT </h3>

                <br>

                <p>We realize the significance of building a solid and long-lasting relationship with our candidates, which is the reason we will consistently stay in touch with you. We will do this all through the recruitment process and when you start work, just to guarantee you are getting on well. We will consistently attempt to contact you back rapidly with any inquiries you may have.</p>

                <br>

                <h3> Advice and Support </h3>

                <br>

                <p>The job searching procedure can be very overwhelming, particularly if you don't have a lot of experience in it and we need to make it simpler for you by giving continuous guidance and support. We will offer guidance on your CV and interview skills, to help guarantee you perform as well as possible during interview.
                </p>

                <br>

                <h3> Feedback </h3>

                <br>

                <p>There is nothing more awful than going for a job interview and not hearing anything back. It tends to be frustrating and this is the reason we will consistently give you feedback, regardless of the outcome. </p>

                <p>We realize how significant it is for your progress and believe it is quite reasonable when you have done the effort of applying and attend interview.</p>

                <p>We will talk you through your feedback and offer any help you may need to improve later and for other interviews.</p>
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