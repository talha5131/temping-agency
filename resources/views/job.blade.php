<!DOCTYPE html>

<html lang="en">

<head>



    <!-- Basic Page Needs

================================================== -->

    <meta charset="utf-8">

    <title>Job Seeker</title>

    <meta name="description" content="">

    <meta name="author" content="">



    <!-- Mobile Specific Metas

================================================== -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- Favicons

================================================== -->

    <link rel="icon" href="{{asset('img/favicon/favicon-32x32.png')}}" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/favicon/favicon-144x144.png')}}">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('img/favicon/favicon-72x72.png')}}">

    <link rel="apple-touch-icon-precomposed" href="{{asset('img/favicon/favicon-54x54.png')}}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- CSS

================================================== -->



    <!-- Bootstrap -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Template styles-->

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Responsive styles-->

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- FontAwesome -->

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Animation -->

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <!-- Prettyphoto -->

    <link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">

    <!-- Owl Carousel -->

    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">

    <!-- Flexslider -->

    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <!-- Flexslider -->

    <link rel="stylesheet" href="{{asset('css/cd-hero.css')}}">

    <!-- Style Swicther -->

    <link id="style-switch" href="{{asset('css/presets/preset3.css')}}" media="screen" rel="stylesheet" type="text/css">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

    <!--[if lt IE 9]>

<script src="public/assets/js/html5shiv.js"></script>-->

<!--<script src="public/assets/js/respond.min.js"></script>-->

{{--<![endif]-->--}}

    <style>
        #file-upload-button {
            color: red;
        }
    </style>

</head>



<body>
    <!-- Modal Import -->
    @include('layouts.modal')
    <div class="body-inner">


        <!-- Header start -->
        @include('layouts.header')
        <!--/ Header end -->

        <div id="banner-area">

            <img src="{{asset('images/banner/banner1.jpg')}}" alt="" />

            <div class="parallax-overlay"></div>

            <!-- Subpage title start -->

            <div class="banner-title-content">

                <div class="text-center">
                    <br>
                    <h2>Job</h2>
                </div>

            </div><!-- Subpage title end -->

        </div><!-- Banner area end -->



        <!-- Main container start -->



        <section id="main-container">

            <div class="container">



                <!-- Company Profile -->



                <div class="row">

                    <div class="col-md-12 heading text-center">

                        <h2 class="title2">{{ $job->title }}

                            <span class="title-desc"> Temping Agency </span>

                        </h2>

                    </div>

                </div><!-- Title row end -->



                <div class="row about-wrapper-top">

                    <div class="col-md-12 ts-padding about-message">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 style="text-align: center;">Job Description</h3>
                            </div>
                        </div>
                        <br>
                        <p>There is nothing worse than applying for a job or attending an interview and not hearing anything back. It can be
                            very frustrating and this is why we will always provide you with feedback, regardless of the outcome.
                        </p>
                        <br>

                        <form id="jobApplyForm" action="cv-upload" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Peter John">
                                <h5 id="namecheck"></h5>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="johnpeter@gmail.com">
                                <h5 id="emailcheck"></h5>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="+44*********">
                                <h5 id="numbercheck"></h5>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label id="cvLabel" class="btn btn-primary">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Upload Your CV
                                            <input style="color: #ffb100; display: none;" class="form-control cv g-brd-none rounded g-px-20 g-py-12" type="file" id="cv" name="cv" accept=".rtf,.doc,.docx,.pdf">
                                        </label>
                                        <small class="form-text text-muted">Maximum file size: 2 MB.</small>
                                        <h4 id="cvUploadStatus"></h4>
                                    </div>
                                    <div class="fileUpload">

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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

        <!-- Footer start -->
        @include('layouts.footer')
        <!--/ Footer end -->

        <!-- Javascript Files

================================================== -->

        <!-- initialize jQuery Library -->

        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

        <!-- Bootstrap jQuery -->

        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Style Switcher -->

        <script type="text/javascript" src="{{asset('js/style-switcher.js')}}"></script>

        <!-- Owl Carousel -->

        <script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>

        <!-- PrettyPhoto -->

        <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>

        <!-- Bxslider -->

        <script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>

        <!-- Owl Carousel -->

        <script type="text/javascript" src="{{asset('js/cd-hero.js')}}"></script>

        <!-- Isotope -->

        <script type="text/javascript" src="{{asset('js/isotope.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/ini.isotope.js')}}"></script>

        <!-- Wow Animation -->

        <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>

        <!-- SmoothScroll -->

        <script type="text/javascript" src="{{asset('js/smoothscroll.js')}}"></script>

        <!-- Eeasing -->

        <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>

        <!-- Counter -->

        <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>

        <!-- Waypoints ---->

      <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

        <!-- Template custom       <script type="text/javascript" src="public/assets/js/custom.js"></script>

        jQuery Validation -->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    </div><!-- Body inner end -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#jobApplyForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 5,
                        maxlength: 10
                    },
                    cvUpload: {
                        required: true,
                    },
                }
            });
        });
        $('#cv').change(function() {
            if ($('#cv').val() != '') {
                setTimeout(function() {
                    $('#cvUploadStatus').text('Your CV Is Uploaded.');
                }, 1000);
            }
        });
    </script>

</body>

</html>
