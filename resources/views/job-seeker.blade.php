@extends('layouts.base')
@section('title','Job Seeker')
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

            <h2>Job Seeker</h2>

            <ul class="breadcrumb">

                <li><a href="index"> Home</a></li>

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



        <div class="row about-wrapper-top">

            <div class="col-md-12 ts-padding about-message">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="text-align: center;">Facts & Figures</h3>
                    </div>
                    <div class="col-md-4">
                        <h4>Relevant Experience</h4>
                        <p>We make sure all our operatvies Must have minimum 1 - 2 years relevant Experience.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h4>
                            24/7 Availability</h4>
                        <p>Our Customer Service staff available online & on phone 24/7 to fill any urgent vacancy.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h4>Flexible & Reliable</h4>
                        <p>All our temps are fully able to start on short noitce whenever require.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4">
                        <h1>1000+</h1>
                        <p>More than 1,000 job seekers got their expected jobs by Labourer Agency.</p>
                    </div>
                    <div class="col-md-4">
                        <h1>10,000+</h1>
                        <p>Labourer Agency has grown to a team of more than 10,000 talented individuals.</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Millions</h1>
                        <p>Since opening, millions of Job Seekers have been registered with Labourer Agency.</p>
                    </div>
                </div>
                <br>
                <h3>Job Seeker</h3>

                <br>

                <p>Unlike many other recruitment agencies, at Labourer Agency UK, we definitely don’t believe that clients are more
                    important than our candidates. We strongly believe that our candidates are important and deserve the best service
                    we can offer, after all, where would we be without you!</p>

                <p>We provide the following services to our job seekers.</p>

                <br>

                <h3> Quick Turnaround </h3>

                <br>

                <p>We won’t leave you hanging around waiting for a phone call after you make your application. We will ensure we get
                    back to you quickly, no matter what the outcome of your application.</p>

                <h3> Regular Contact </h3>

                <br>

                <p>We understand the importance of building a strong and lasting relationship with our candidates, which is why we will
                    always keep in regular contact with you. We will do this throughout the recruitment process and when you start a
                    job, just to ensure you are getting on well. We will always endeavour to get back to you quickly with any
                    questions you may have.</p>

                <br>

                <h3> Advice and Support </h3>

                <br>

                <p>The job searching process can be quite daunting, especially if you don’t have much experience with it and we want
                    to make it easier for you by providing ongoing advice and support. We will offer guidance on your CV and interview
                    skills, to help ensure you perform as well as possible at interview stage.
                </p>

                <br>

                <h3> Feedback </h3>

                <br>

                <p>There is nothing worse than applying for a job or attending an interview and not hearing anything back. It can be
                    very frustrating and this is why we will always provide you with feedback, regardless of the outcome.
                </p>

                <p>We know how important it is for your development and believe it is only fair when you have went to the effort to apply or attend interview.</p>

                <p>We will talk you through your feedback and offer any support you might need to improve in the future and for other interviews.</p>
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