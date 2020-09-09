@extends('layouts.base')
@section('title','Hire Temporary Staff')
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

            <h2> Hire Temporary Staff </h2>

            <ul class="breadcrumb">

                <li><a href="{{url('/')}}"> Home</a></li>

                <li>Services</li>

                <li> Hire Temporary Staff </li>

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

                <h2 class="title2">Hire Temporary Staff

                    <span class="title-desc"> Temping Agency </span>

                </h2>

            </div>

        </div><!-- Title row end -->

        <form id="contact-form">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" id="name" placeholder="" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" id="email" placeholder="" type="email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" name="subject" id="subject" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control contact-content" name="message" id="message" rows="10"></textarea>
                <label style="color:red;" id="message-error"></label>
            </div>
            <div class="text-right"><br>
                <button class="btn btn-primary solid blank" id="btn-submit" type="submit">Send Message</button>
            </div>
        </form>

        <div class="row about-wrapper-top">

            <div class="col-md-12 ts-padding about-message">

                <h3 class="text-align"> Choosing a Temp over a full-time employee </h3>

                <br>

                <p class="text-align">Are you needs temporary staff? Call temping agency for temporary staffing solution.</p>

                <p class="text-align">Companies often face a dilemma when it comes to appointing a new employee. There are many options and pros and cons to these options. Two of the main considerations are either appointing a full-time employee or contract in a temp. Of course each has its own advantages and disadvantages as illustrated below:</p>

                <br>

                <h3 class="text-align">Full-time employee:</h3>

                <br>
                <ul class="list-group list-group-flush text-align">
                    <li class="list-group-item">Expensive recruitment process</li>
                    <li class="list-group-item">Regular salary</li>
                    <li class="list-group-item">Statutory taxes and deductions</li>
                    <li class="list-group-item">Statutory leave e.g. sick leave / annual leave etc.</li>
                    <li class="list-group-item">Disciplinary process to manage performance</li>
                </ul>

                <br>

                <h3 class="text-align">Temp employee:</h3>

                <br>

                <ul class="list-group list-group-flush text-align">
                    <li class="list-group-item">The Temping Agency will have done all the recruitment interviews and checks</li>
                    <li class="list-group-item">You only pay for the hours that the temp actually works</li>
                    <li class="list-group-item">Any statutory deductions and requirements are managed by the temp agencies</li>
                    <li class="list-group-item">If there is any performance or disciplinary issues, the temping agency will
                        immediately replace the troublesome temp with a new temp. The agency will then take the necessary action
                        where appropriate.</li>
                </ul>
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

                <h3 class="text-align">Why Agency Temps?</h3>

                <br>

                <p class="text-align">An agency temp usually comes with a replacement guarantee from the temping agency. This is very pleasing to a company. Once a permanent employee has been appointed, it is very difficult to dismiss them for any infringement in the workplace. Disciplinary processes can be very drawn out and eventually expensive if a moderator from outside the company has to be appointed.</p>
                <p class="text-align">Taking a temp on board is a more satisfying option for the company. It saves time and money for the company and gives it the reassurance that the employee will perform to the right standard. A permanent employee is only an option when a specific skill and expertise is required. These the company hang onto at all costs.</p>
                <p class="text-align">With temping agency companies have the security of top-class temporary employees. We provide properly and expertly interviewed temps. Our consultants are professionals with in-depth knowledge of their field of expertise and they will know whether a potential candidate will suit the client’s requirements. If s/he does, the candidate is introduced to the client and s/he will start working shortly after that.</p>
                <p class="text-align">The process with a permanent employee is a little more drawn out. Unlike the temp agency, candidates for a permanent position have to go through several levels of interviews and tests. Then there’s the shortlisting process and another round of interviews. This is followed by background and reference checks. In the meantime the work that the candidate has to do is piling up with no-one to do it.</p>
                <p class="text-align">One call to a temping agency can solve this problem. The temp can be used for the period that it takes to find a permanent employee, or the temp may also be offered the permanent position due to his / her competence in the job.</p>
                <p class="text-align">Here Temping Agency helps the employer to draft a suitable contract and also helps the candidate go through the contract in detail before s/he makes up his / her mind. Once agreement is reached, the candidate is converted from temp status to perm status and the agency collects a placement fee.</p>
                <p class="text-align">Companies choose temp for the convenience of managing the whole performance and recruitment process.</p>

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




<!-- Javascript Files ================================================== -->

<!-- Javascript Files
		================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="public/assets/js/jquery.js"></script>

<!-- Google Map API Key Source -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src="public/assets/js/gmap3.js"></script>

<!-- jQuery Validation -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<!-- jQuery Minimalist Editor -->

<script type="text/javascript" src="public/assets/js/jquery.richtext.min.js"></script>

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

    $('.contact-content').richText();


    // Contact Us Form Validation

    $('#contact-form').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
            },
        }
    });

    $("#contact-form").submit(function() {
        if ($("#message").val() == "<div><br></div>") {
            $("#message-error").html("This field is required");
            event.preventDefault();
        } else if ($("#message").val() == "<br>") {
            $("#message-error").html("This field is required");
            event.preventDefault();
        } else {
            $("#message-error").html("");
        }
    });
</script>

</div><!-- Body inner end -->