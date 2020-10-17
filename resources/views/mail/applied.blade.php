<head>

    <!-- Basic Page Needs
		================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
		================================================== -->
    <link rel="icon" href="public/assets/img/favicon/favicon-32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/img/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/img/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="public/assets/img/favicon/favicon-54x54.png">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .col-md-12 ul h4 {
            text-transform: none;
            color: black;
        }

        .ts-testimonial-content .temping-logo {
            float: left;
            margin: 0 30%;
            width: 35%;
            height: 11%;
            border-radius: 0%;
        }

        .classic {
            /* margin-top: 6px;
            margin-left: 15px; */
            font-size: 20px;
            text-align: center;
            margin-top: 25%;
            color: black;
        }

        /* .temping-logo{
            margin: 0 38%;
            width: 150px;
        } */
        .vertical-hr {
            border-left: 6px solid #51284f;
            height: 480px;
        }

        .vertical-hr1 {
            position: relative;
            left: 100px;
            /* border-left: 2px solid #51284f; */
            height: 95px;
            margin-left: 10px;
            padding-top: 17px;
        }

        .fas,
        .far {
            color: #51284f;
            font-size: 20px;
            /* border-right:1px solid #51284f; */
            margin-right: 15px;
            margin-bottom: 15px;
        }

        #main-container.portfolio {
            background: none;
        }

        section {
            padding: 80px 0;
            position: relative;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'JaapokkiRegular';
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }


        .ts-testimonial-content {
            position: relative;
            padding: 30px 30px 15px 30px;
            border-width: 1px;
            border-style: solid;
            border-color: #e7e7e7;
            margin-bottom: 40px;
        }

        .ts-testimonial-content:after {
            content: "";
            position: absolute;
            bottom: -40px;
            left: 45px;
            border-style: solid;
            border-width: 40px 0px 0 30px;
            border-color: #e7e7e7 transparent;
            display: block;
            width: 0;
            z-index: 1;
        }

        .ts-testimonial-content img {
            float: left;
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }

        .ts-testimonial-text {
            padding-left: 110px;
        }

        .ts-testimonial-author {
            position: absolute;
            bottom: -60px;
            left: 90px;
        }

        .ts-testimonial-author h3.name {
            font-size: 14px;
            margin: 10px 0 0;
        }

        .ts-testimonial-author h3 span {
            display: block;
            font-size: 13px;
            margin-top: -10px;
            text-transform: capitalize;
            color: #555;
        }

        .mb-15 {
            margin-bottom: 15px;
        }
    </style>

</head>

<!-- Main container start -->

<!-- Bootstrap -->


<!-- Template styles-->


<section id="main-container">
    <div class="container">

        <!-- Services -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="ts-testimonial-content" style="margin: 0 25%;padding-bottom: 50px;">
                    <img src="{{ url('public/assets/images/temping-logo.png')}}" alt="testimonial" class="temping-logo">
                    <div class="row">
                        <div class="col-md-12 heading">
                            <h3 class="classic" style="color: #51284f;"> <strong> You Posted For The Job. </strong></h3>
                        </div>
                    </div>
                    <div class="row vertical-hr">
                        <div class="col-md-12 col-sm-12">
                            <div style="border-right: 2px solid #51284f;">
                                <img style="padding-left: 15px; padding-right:15px; margin-top:30px;" src="{{ url('public/assets/images/clients/testimonial1.jpg')}}" alt="testimonial" style="position: relative;top:10px;color: black;">
                            </div>
                            <div class="vertical-hr1">
                                <h2 style="position: relative;left: -50px;top:20px;color: black; margin-top:25px; font-size:2em;">Hammad Ahmad</h2>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12 col-sm-12">
                            <ul style="list-style-type:none">
                                <h4>
                                    {{-- <li class="mb-15"><i class="far fa-envelope"></i>{{ $user['email'] }}</li> --}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Email:</label> abc@gmail.com</li>
                                </h4>
                                <h4>
                                    {{--<li class="mb-15"><i class="fas fa-phone-alt"></i>{{ $user['phone'] }}</li> --}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f;" > Phone Number:</label>0284737732882</li>
                                </h4>
                                <h4>
                                    {{--<li class="mb-15"><i class="fas fa-key"></i>{{ $user['code'] }}</li>--}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Code Number: </label>23523523</li>
                                </h4>
                                <h4>
                                    {{--<li class="mb-15"><i class="fas fa-file-alt"></i>{{ $user['title'] }}</li>--}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Title: </label>NAjeeb</li>
                                </h4>

                                <h4>
                                    {{--<li class="mb-15"><i class="fas fa-map-marker-alt"></i>{{ $user['location'] }}</li>--}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Location: </label>LAhore</li>
                                </h4>
                                <h4>
                                    {{--<li class="mb-15"><i class="far fa-clock"></i>{{ $user['type'] }}</li>--}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Job Type: </label>abc</li>
                                </h4>
                                <h4>
                                    {{-- <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Email: </label>20</li>--}}
                                </h4>
                                <h4>
                                    {{--<li class="mb-15"><i class="far fa-building"></i>{{ $user['company'] }}</li>--}}
                                    <li class="mb-15" style="font-size:1.5em;"><label style="color: #51284f; "> Company: </label>Falcon</li>
                                </h4>
                            </ul>
                        </div>
                    </div>
                </div><!-- Testimonial content end -->
                <br><br>
                <h5 style="margin: 0 35%;">Thanks For posting the Job.</h5>
            </div><!-- End col-md-6 -->
        </div><!-- Content row  end -->

    </div>
    <!--/ container end -->

</section>
<!--/ Main container end -->

</div><!-- Body inner end -->