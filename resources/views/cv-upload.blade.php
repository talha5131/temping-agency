@extends('layouts.base')
@section('title','CV Register')
@section('content')


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

	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">

	<!-- Template styles-->

	<link rel="stylesheet" href="public/assets/css/style.css">

	<!-- Responsive styles-->

	<link rel="stylesheet" href="public/assets/css/responsive.css">

	<!-- FontAwesome -->

	<link rel="stylesheet" href="public/assets/css/font-awesome.min.css">

	<!-- Animation -->

	<link rel="stylesheet" href="public/assets/css/animate.css">

	<!-- Prettyphoto -->

	<link rel="stylesheet" href="public/assets/css/prettyPhoto.css">

	<!-- Owl Carousel -->

	<link rel="stylesheet" href="public/assets/css/owl.carousel.css">

	<link rel="stylesheet" href="public/assets/css/owl.theme.css">

	<!-- Flexslider -->

	<link rel="stylesheet" href="public/assets/css/flexslider.css">

	<!-- Flexslider -->

	<link rel="stylesheet" href="public/assets/css/cd-hero.css">

	<!-- Style Swicther -->

	<link id="style-switch" href="public/assets/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">



	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

	<!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

  <![endif]-->



</head>



		<div id="banner-area">

			<img src="public/assets/images/banner/banner1.jpg" alt="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2>Upload a CV</h2>

					<ul class="breadcrumb">

						<li><a href="{{ url('/') }}"> Home</a></li>

						<li>Upload a CV</li>



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

						<h2 class="title2">Upload a CV

							<span class="title-desc"> Quality Recruitment Solutions</span>

						</h2>

					</div>

				</div><!-- Title row end -->
                @if (session('success'))
                    <div class="row">
                        <div class="col-md-12 heading text-center">
                            <div class="alert  alert-success alert-dismissible" role="alert">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif


				<div class="row about-wrapper-bottom">



					<div class="col-md-6 ts-padding about-message">



						<h3> CV Registration </h3>

						<br>

						<p>Fill out the form below. Register your details together with your CV to access our candidate community pages where you can store search profiles, see the latest vacancies since you last logged in, create job alerts and more.</p>





					</div>
					<!--/ About message end -->



					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(public/assets/images/pages/about-4.jpg) 50% 50% / cover no-repeat;">

					</div>
					<!--/ About image end -->



				</div>
				<!--/ Content row end -->



				<div class="row about-wrapper-top">
					<div class="col-md-12 ts-padding about-message">
						<form id="cvUploadForm" action="cv-upload" method="post" enctype="multipart/form-data">
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
								<label for="address">Address / Post Code (Where Staff)</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Address / Post Code">
								<h5 id="addresscheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="location">Location <small>(optional)</small></label>
								<input type="text" class="form-control" id="location" name="location" placeholder="e.g. London">
							</div>
							<hr>
							<div class="form-group">
								<label for="jobtype">Select Your Relevant Job Category</label>
								<select class="form-control" id="category" name="category">
									<option selected disabled>Please Select</option>
									<option value="Trade & Construction">Trade & Construction</option>
									<option value="Site Labourers & Cleaners">Site Labourers & Cleaners</option>
									<option value="Multi-Skilled Builders">Multi-Skilled Builders</option>
									<option value="Forklift Operatives">Forklift Operatives</option>
									<option value="Warehouse">Warehouse</option>
									<option value="Drivers">Drivers</option>
									<option value="Pickers & Packers">Pickers & Packers</option>
									<option value="Electricians & Electricians Mate">Electricians & Electricians Mate</option>
									<option value="Plumbing">Plumbing</option>
									<option value="Electrical">Electrical</option>
									<option value="Cleaning">Cleaning</option>
									<option value="Property Maintenance">Property Maintenance</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label for="desc">Are you happy to work on temporary basis?</label>
								<br>
								<input type="radio" id="yes" name="choice" value="yes" checked>
								<label for="yes">Yes</label><br>
								<input type="radio" id="no" name="choice" value="no">
								<label for="no">No</label><br>
							</div>
							<hr>
							<div class="form-group">
								<label for="availability">Availability (Are you immediately available to start work or need notice period)</label>
								<input type="text" class="form-control" id="availability" name="availability">
								<h5 id="availabilitycheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="salary">Desired Salary / Wages (Per Hour Rate)</label>
								<input type="text" class="form-control" id="salary" name="salary">
								<h5 id="salarycheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="pictureUpload">Upload Your Picture</label>
										<input type="file" id="image" name="image">
										<small class="form-text text-muted">Maximum file size: 2 MB.</small>
									</div>
									<div class="col-md-6">
										<label for="cvUpload">Upload Your CV</label>
										<input type="file" id="cv" name="cv">
										<small class="form-text text-muted">Maximum file size: 2 MB.</small>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div>
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

								<span class="counter">1200</span>

							</div>

							<h3>Clients</h3>

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-institution"></i></span>

							<div class="facts-num">

								<span class="counter">1277</span>

							</div>

							<h3>Item Sold</h3>

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-suitcase"></i></span>

							<div class="facts-num">

								<span class="counter">869</span>

							</div>

							<h3>Projects</h3>

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



		<!-- initialize jQuery Library -->

		<script type="text/javascript" src="public/assets/js/jquery.js"></script>

		<!-- Bootstrap jQuery -->

		<script type="text/javascript" src="public/assets/js/bootstrap.min.js"></script>

		<!-- Style Switcher -->

		<script type="text/javascript" src="public/assets/js/style-switcher.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="public/assets/js/owl.carousel.js"></script>

		<!-- PrettyPhoto -->

		<script type="text/javascript" src="public/assets/js/jquery.prettyPhoto.js"></script>

		<!-- Bxslider -->

		<script type="text/javascript" src="public/assets/js/jquery.flexslider.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="public/assets/js/cd-hero.js"></script>

		<!-- Isotope -->

		<script type="text/javascript" src="public/assets/js/isotope.js"></script>

		<script type="text/javascript" src="public/assets/js/ini.isotope.js"></script>

		<!-- Wow Animation -->

		<script type="text/javascript" src="public/assets/js/wow.min.js"></script>

		<!-- SmoothScroll -->

		<script type="text/javascript" src="public/assets/js/smoothscroll.js"></script>

		<!-- Eeasing -->

		<script type="text/javascript" src="public/assets/js/jquery.easing.1.3.js"></script>

		<!-- Counter -->

		<script type="text/javascript" src="public/assets/js/jquery.counterup.min.js"></script>

		<!-- Waypoints -->

		<script type="text/javascript" src="public/assets/js/waypoints.min.js"></script>

		<!-- Template custom -->

		<script type="text/javascript" src="public/assets/js/custom.js"></script>

		<!-- jQuery Validation -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

	</div><!-- Body inner end -->

	<script type="text/javascript">
			$('#cvUploadForm').validate({
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
					address: {
						required: true,
					},
					availability: {
						required: true,
					},
                    category: {
					    required: true,
                    },
					salary: {
						required: true,
					},
					image: {
						required: true,
					},
					cv: {
						required: true,
					},
				}
			});
	</script>
