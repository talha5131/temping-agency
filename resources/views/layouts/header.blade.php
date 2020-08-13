<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
	@media (min-width: 1200px) {

		.navbar-nav .dropdown-menu,
		.navbar-nav .dropdown.megamenu div.dropdown-menu {
			background-color: rgba(81, 40, 79, 0.5);
			border: 1px solid rgba(81, 40, 79, 0.5);
			border-radius: 20px;
		}
	}

	.logo {
		position: absolute;
		top: 60px;
		margin-left: 6%;
	}

	.navbar-styles {
		background-color: black;
		height: 150px;
	}

	.nav-bottom-content {
		margin: 0.5% 5% 0 27%
	}

	.custom-scrollbar {
		overflow: hidden;
		overflow-y: scroll;
		max-height: 500px;
	}

	/* width */
	.custom-scrollbar::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	.custom-scrollbar::-webkit-scrollbar-track {
		box-shadow: inset 0 0 5px grey;
		border-radius: 10px;
	}

	/* Handle */
	.custom-scrollbar::-webkit-scrollbar-thumb {
		background: #51284f;
		border-radius: 10px;
	}

	/* Handle on hover */
	.custom-scrollbar::-webkit-scrollbar-thumb:hover {
		background: #51284f;
	}

	@media only screen and (min-width: 200px) and (max-width: 768px) {
		.nav-top-right {
			display: none;
		}

		.nav-top-left {
			display: none;
		}

		.logo {
			position: absolute;
			top: 15px;
			margin-left: 5%;
		}

		.navbar-styles {
			height: 85px;
		}

		.navbar-toggle {
			position: absolute;
			top: 15px;
			right: 10px;
		}

		#myNavbar {
			margin-top: 20%;
			background-color: black;
		}

		.nav-bottom-content {
			margin: 0;
		}

		.mobile-li {
			font-size: 12px !important;
		}

		.mobile-img {
			display: none;
		}

		.mega-menu {
			background-color: black;
		}

		.navbar-nav .dropdown-menu,
		.navbar-nav .dropdown.megamenu div.dropdown-menu {
			background-color: black;
			border: none;
		}

		/* width */
		.custom-scrollbar::-webkit-scrollbar {
			display: none;
		}
	}
</style>

<body>


	<nav class="navbar navbar-styles navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{url('/')}}" class="logo"><img class="img-responsive" src="public/assets/images/logo.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left nav-top-content nav-top-left" style="margin-left: 4%">
					<li class="">
						<a href="#" style=" color: white;">CALL US <strong>+442030869080</strong></a>
					</li>
					<li class="">
						<a href="cv-upload" style=" color: white;">Get A Quote</a>
					</li>
					<li class="">
						<a href="cv-upload" style=" color: white;">Email Us</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right nav-top-right" style="margin-top:0.5%;margin-right: 5%">
					<li class="">
						<a href="employer" class="btn btn-primary cd-btn" style="margin-top: 10px; color: white; font-size: 11px">Employer</a>
					</li>
					<li class="">
						<a href="job-seeker" class="btn btn-primary cd-btn" style="margin-top: 10px; margin-left: 5px; color: white; font-size: 11px">Job Seeker</a>
					</li>
					<li class="">
						<a href="cv-upload" class="btn btn-primary cd-btn" style="margin-top: 10px;
						margin-left: 5px; color: white; font-size: 11px">CV Upload</a>
					</li>
					<li class="">
						<a href="post-a-job" class="btn btn-primary cd-btn" style="margin-top: 10px; margin-left: 5px; color: white; font-size: 11px">Post A Job</a>
					</li>
					<li class="">
						<a href="#" class="btn btn-primary cd-btn" style="padding-right:15px; margin-top: 10px;
						margin-left: 5px; color: white; font-size: 11px; padding-left: 17px" data-toggle="modal" data-target="#modalRegisterLogin">Register/Login</a>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-left nav-bottom-content">
					<li class="active"><a href="{{url('/')}}" class="mobile-li">Home </a></li>
					<li><a href="about2" class="mobile-li">About Us</a></li>
					<li><a href="why-us" class="mobile-li">Why Us</a></li>
					<li><a href="career" class="mobile-li">Jobs</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle mobile-li" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i> </a>
						<div class="dropdown-menu mega-menu custom-scrollbar mega-menu-styles">
							<div class="row">
								<div class="col-sm-4">
									<img src="public/assets/images/catering/2705385-min.jpg" class="img-responsive mobile-img">
									<a href="catering">
										<h4 class="mobile-li">CATERING</h4>
									</a>
									<img src="public/assets/images/light-industrial-staff/welder-673559.jpg" class="img-responsive mobile-img">
									<a href="light-industrial-staff">
										<h4 class="mobile-li">Light Industrial Staff</h4>
									</a>

									<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive mobile-img">
									<a href="construction">
										<h4 class="mobile-li">Construction</h4>
									</a>

								</div>
								<div class="col-sm-4">
									<img src="public/assets/images/events/events2.jpg" alt="Events" class="img-responsive mobile-img">
									<a href="events-&-promotions">
										<h4 class="mobile-li">Events & Promotions</h4>
									</a>

									<img src="public/assets/images/it-and-tech/tech1.jpg" class="img-responsive mobile-img">
									<a href="it-&-telecom">
										<h4 class="mobile-li">IT & Telecom</h4>
									</a>

								</div>
								<div class="col-sm-4">
									<img src="public/assets/images/hospitality/hospitality1.jpg" class="img-responsive mobile-img">
									<a href="hospitality">
										<h4 class="mobile-li">Hospitality</h4>
									</a>
									<img src="public/assets/images/sales-and-retail/sales1.jpg" class="img-responsive mobile-img">
									<a href="sales-&-retail">
										<h4 class="mobile-li">Sales & Retail</h4>
									</a>
								</div>
							</div>
						</div>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
						<div class="dropdown-menu">
							<ul>

								<li><a href="blog-item">How to achieve your bonus?</a></li>
							</ul>
						</div>
					</li>
					<li><a href="testimonial">Testimonials</a></li>
					<li>
						<a href="location">Location</a>
					</li>
					<li><a href="contact">Contact</a></li>
					<li>
						<a href="book-a-temp">Book A Temp</a>
					</li>
				</ul>
				<!-- <ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul> -->
			</div>
		</div>
	</nav>


	<!-- The Modal -->
	<div class="modal fade right" id="modalRegisterLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
		<div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<!-- Nav tabs Start -->
					<ul class="nav nav-pills" role="tablist">
						<li class="nav-item active">
							<a role="button" class="nav-link" data-toggle="tab" href="#login">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#register">Register</a>
						</li>
					</ul>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<!-- Tab panes -->
					<div class="tab-content">
						<div id="login" class="container tab-pane active"><br>
							<h3>LOGIN</h3>
							<form>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
								</div>
								<div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="remember"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
						<div id="register" class="container tab-pane fade"><br>
							<h3>Register</h3>
							<form>
								<div class="form-group">
									<label for="fname">Full Name:</label>
									<input type="text" class="form-control" id="fname" placeholder="John" name="fullName">
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
								</div>
								<div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="remember"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-primary">Register</button>
							</form>
						</div>
					</div>
				</div>

				<!--Footer-->
				<div class="modal-footer justify-content-center">
					<a type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Cancel</a>
				</div>

			</div>
		</div>
	</div>
	<!-- Modal Ends Here -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
