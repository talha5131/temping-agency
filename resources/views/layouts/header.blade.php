<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/assets/css/style.css">

</head>

<body>
	<header id="header" class="navbar-fixed-top header" role="banner" style="background-color: black; opacity: 0.9">
		<div class="container-fluid">

			<nav class="collapse navbar-collapse clearfix" role="navigation" style="margin-bottom: 15px;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav navbar-nav navbar-left nav-top-content" style="margin-left: 5%">
								<li class="">
									<a href="#" style=" color: white;">CALL US <strong>+442030869080</strong></a>
								</li>
								<li class="">
									<a href="cv-upload"  style=" color: white;">Get A Quote</a>
								</li>
								<li class="">
									<a href="cv-upload"  style=" color: white;">Email Us</a>
								</li>
							</ul>
							<div class="nav-top-content navbar-right" style="margin-right: 5%;">
								<ul class="nav navbar-nav">
									<li class="">
										<a href="{{route('employer')}}" class="btn btn-primary cd-btn" style="margin-top: 10px; color: white; font-size: 11px">Employer</a>
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
<!-- 									<li class="">
										<a href="#" class="btn btn-primary cd-btn" style="padding-right:15px; margin-top: 10px;
										margin-left: 5px; color: white; font-size: 11px; padding-left: 17px" data-toggle="modal" data-target="#modalRegisterLogin">Register/Login</a>
									</li> -->
								</ul>
							</div>
						</div>
						<div class="col-md-12" style="margin-top: 5%; margin-bottom: 5%;">
							<!-- Logo start -->
							<div class="">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="" style="position: absolute;top: 0px; margin-left: 6%;">
									<a href="{{ url('/')}}">
										<img class="img-responsive" src="public/assets/images/logo.png" alt="logo">
									</a>
								</div>
							</div>
							<!--/ Logo end -->
							<ul class="nav navbar-nav navbar-left nav-mid-content" style="margin-left: 27%; margin-right: 5%">
								<li class="active"><a href="{{ url('/')}}">Home </a></li>
								<li><a href="about2">About Us</a></li>
								<li><a href="why-us">Why Us</a></li>
								<li><a href="career">Jobs</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle">Services <i class="fa fa-angle-down"></i> </a>
									<div class="dropdown-menu mega-menu" style="background-color: rgba(81, 40, 79, 0.5); border: 1px solid rgba(81, 40, 79, 0.5); border-radius: 20px">
										<div class="row">
											<div class="col-sm-4">
												<img src="public/assets/images/catering/2705385-min.jpg" class="img-responsive">
												<a href="catering">
													<h4>CATERING</h4>
												</a>
												<img src="public/assets/images/light-industrial-staff/welder-673559.jpg" class="img-responsive">
												<a href="light-industrial-staff">
													<h4>Light Industrial Staff</h4>
												</a>

												<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
												<a href="construction">
													<h4>Construction</h4>
												</a>

											</div>
											<div class="col-sm-4">
												<img src="public/assets/images/events/events2.jpg" alt="Events" class="img-responsive">
												<a href="events-&-promotions">
													<h4>Events & Promotions</h4>
												</a>

												<img src="public/assets/images/it-and-tech/tech1.jpg" class="img-responsive">
												<a href="it-&-telecom">
													<h4>IT & Telecom</h4>
												</a>

											</div>
											<div class="col-sm-4">
												<img src="public/assets/images/hospitality/hospitality1.jpg" class="img-responsive">
												<a href="hospitality">
													<h4>Hospitality</h4>
												</a>
												<img src="public/assets/images/sales-and-retail/sales1.jpg" class="img-responsive">
												<a href="sales-&-retail">
													<h4>Sales & Retail</h4>
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
						</div>
						<div class="col-md-12">

						</div>
					</div>
				</div>
			</nav>
			<!--/ Navigation end -->
			<!--/ Row end -->
		</div>
		<!--/ Container end -->
	</header>
	<!--/ Header end -->


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
</body>

</html>
