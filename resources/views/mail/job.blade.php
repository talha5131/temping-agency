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

    <!-- CSS
		================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ url('public/assets/css/responsive.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ url('public/assets/css/animate.css')}}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{ url('public/assets/css/prettyPhoto.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('public/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/owl.theme.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ url('public/assets/css/flexslider.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ url('public/assets/css/cd-hero.css')}}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{ url('public/assets/css/presets/preset3.css')}}" media="screen" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ url('public/assets/css/fa.min.css')}}">

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
            border-left: 2px solid #51284f;
            height: 95px;
        }
        .fas,.far{
            color: #51284f;
            font-size: 20px;
            /* border-right:1px solid #51284f; */
            margin-right: 15px;
        }
    </style>
</head>

<!-- Main container start -->

<section id="main-container">
    <div class="container">

        <!-- Services -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="ts-testimonial-content" style="margin: 0 25%;padding-bottom: 50px;">
                    <img src="{{ url('public/assets/images/temping-logo.png')}}" alt="testimonial" class="temping-logo">
                    <div class="row">
                        <div class="col-md-12 heading">
                            <h3 class="classic">You Posted For The Job.</h3>
                        </div>
                    </div>
                    <div class="row vertical-hr">
                        <div class="col-md-12 col-sm-12">
                            <img src="{{ url('public/assets/images/clients/testimonial1.jpg')}}" alt="testimonial" style="position: relative;top:10px;color: black;">
                            <div class="vertical-hr1">
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12 col-sm-12">
                            <ul style="list-style-type:none">
                                <h4>
                                    <li><i class="far fa-envelope"></i>{{ $user['email'] }}</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-phone-alt"></i>{{ $user['phone'] }}</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-key"></i>{{ $user['code'] }}</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-file-alt"></i>{{ $user['title'] }}</li>
                                </h4>

                                <h4>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $user['location'] }}</li>
                                </h4>
                                <h4>
                                    <li><i class="far fa-clock"></i>{{ $user['type'] }}</li>
                                </h4>
                                <h4>
                                </h4>
                                <h4>
                                    <li><i class="far fa-building"></i>{{ $user['company'] }}</li>
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


<!-- Javascript Files
		================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="{{ url('public/assets/js/jquery.js')}}"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{ url('public/assets/js/style-switcher.js')}}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ url('public/assets/js/owl.carousel.js')}}"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{ url('public/assets/js/jquery.prettyPhoto.js')}}"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{ url('public/assets/js/jquery.flexslider.js')}}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{ url('public/assets/js/cd-hero.js')}}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{ url('public/assets/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{ url('public/assets/js/ini.isotope.js')}}"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{ url('public/assets/js/wow.min.js')}}"></script>
<!-- SmoothScroll -->
<script type="text/javascript" src="{{ url('public/assets/js/smoothscroll.js')}}"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{ url('public/assets/js/jquery.easing.1.3.js')}}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ url('public/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{ url('public/assets/js/waypoints.min.js')}}"></script>
<!-- Template custom -->
<script type="text/javascript" src="{{ url('public/assets/js/custom.js')}}"></script>
</div><!-- Body inner end -->
