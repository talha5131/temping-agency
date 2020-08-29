@extends('layouts.base')
@section('title','Post A Job')
@section('content')

<style>
	@media only screen and (min-width: 200px) and (max-width: 768px) {
		body {
			/* width: 100%; */
			overflow-x: hidden;
		}
	}

	.custom-radio {
		margin-left: 10px;
	}
</style>


<div id="banner-area">

	<img src="public/assets/images/banner/banner1.jpg" alt="" />

	<div class="parallax-overlay"></div>

	<!-- Subpage title start -->

	<div class="banner-title-content">

		<div class="text-center">

			<h2>Post A Job</h2>

			<ul class="breadcrumb">

				<li><a href="index"> Home</a></li>

				<li>Post A Job</li>



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

				<h2 class="title2">Post A Job

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



				<h3> Order A Staff </h3>

				<br>

				<p>If you Need To Fill any Temporary or Permanent Job For Your Business / Organisation, Filled up the Form below and send to us for a Quick Response.</p>
				<p>Temping Agency is always ready to help their customers and users to fulfil their Job/Employment needs!</p>





			</div>
			<!--/ About message end -->



			<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(public/assets/images/pages/about-4.jpg) 50% 50% / cover no-repeat;">

			</div>
			<!--/ About image end -->



		</div>
		<!--/ Content row end -->



		<div class="row about-wrapper-top">

			<div class="col-md-12 ts-padding about-message">
				<form id="postAJob" action="post-a-job" method="post">
					@csrf
					{{-- <div class="form-group">--}}
					{{-- <label for="">Have an account?</label>--}}
					{{-- <p>--}}
					{{-- If you don't have an account you can create one below by entering your email address/username. Your account details will be confirmed via email.--}}
					{{-- </p>--}}
					{{-- <button class="btn btn-success btn-lg">Sign In</button>--}}
					{{-- </div>--}}
					<hr>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label for="jobTitle">Job Title</label>
							<input type="text" class="form-control" id="title" name="title" placeholder="Job Title">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label for="desc"> Job Description</label>
							<textarea class="form-control job-content" rows="7" id="desc" name="desc"></textarea>

						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="tags">Job Tags</label>
							<input type="tags" data-role="tagsinput" class="form-control" id="tags" name="tags" style="display: none;">
						</div>



						<div class="col-sm-4 form-group">
							<label for="jobtype">Job Category</label>
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



						<div class="col-sm-4 form-group">
							<label for="location">Location <small>(optional)</small></label>
							<input type="text" class="form-control" id="location" name="location" placeholder="e.g. London">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="joiningDate">Joining Date</label>
							<input type="text" class="form-control" id="joiningDate" name="joiningDate" placeholder="dd / mm / yyyy">
						</div>
						<div class="col-sm-4 form-group">
							<label for="endingDate">Ending Date</label>
							<input type="text" class="form-control" id="endingDate" name="endingDate" placeholder="dd / mm / yyyy">
						</div>
						<div class="col-sm-4 form-group">
							<label for="openingDate">Opening Date</label>
							<input type="text" class="form-control" id="openingDate" name="openingDate" placeholder="dd / mm / yyyy">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="jobtype">Job Timing</label>
							<select class="form-control" id="jobTiming" name="jobTiming">
								<option value="Freelance">Freelance</option>
								<option value="Full Time" selected>Full Time</option>
								<option value="Internship">Internship</option>
								<option value="Part Time">Part Time</option>
								<option value="Temporary">Temporary</option>
							</select>
						</div>

						<div class="col-sm-4 form-group">
							<label for="salary">Salary</label>
							<input type="text" class="form-control" id="salaryFrom" name="salaryFrom" placeholder="Salary">
						</div>

						<div class="col-sm-4 form-group">
							<label for="location">Duration</label>
							<input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
							<!-- <label for="tsalaryType" class="col-form-label">Salary Type</label>
							<div class="input-group">
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" name="salaryType" checked="" value="per hour" class="custom-control-input"><span class="custom-control-label custom-radio"> Per Hour</span>
								</label>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" name="salaryType" value="per week" class="custom-control-input"><span class="custom-control-label custom-radio"> Per Week</span>
								</label>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" name="salaryType" value="per year" class="custom-control-input"><span class="custom-control-label custom-radio"> Per Year</span>
								</label>
							</div> -->
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="jobPurpose">Job Purpose</label>
							<input type="text" name="jobPurpose" class="form-control" placeholder="Purpose">
						</div>
						<div class="col-sm-4 form-group">
							<label for="responsibilities">Job Responsibilites</label>
							<input type="text" class="form-control" id="responsibilities" name="responsibilities" placeholder="Responsibilities">
						</div>
						<div class="col-sm-4 form-group">
							<label for="requirements">Job Requirements</label>
							<input type="text" class="form-control" id="requirements" name="requirements" placeholder="Requirements">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label for="vacancy">Vacancy</label>
							<input type="number" id="vacancy" name="vacancy" class="form-control" placeholder="Vacancy">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="logo">Add Image</label>
								</div>

								<div class="col-md-9" style="position:relative;">
									<a class='btn btn-primary'>
										Choose File..
										<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);
										-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;
										color:transparent;' name="file_source" size="40" onchange='$("#upload-file-info").html($(this).val());'>
									</a>
									&nbsp;
									<span class='label label-info' id="upload-file-info"></span>
								</div>
							</div>
						</div>
						<div class="col-sm-6 form-group">

							<button type="submit" class=" btn btn-primary" style="float:right; margin-left:10px;">Submit</button>
						</div>
					</div>

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

<!-- jQuery Validation -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<!-- minimal Rich Text Editor With jQuery -->

<script type="text/javascript" src="public/assets/js/jquery.richtext.min.js"></script>

</div><!-- Body inner end -->
<script type="text/javascript">
	$('#postAJob').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			title: {
				required: true,
			},
			desc: {
				required: true,
				minlength: 200,
			},
			appEmail: {
				required: true,
				email: true,
			},
			company: {
				required: true,
			}
		}
	});

	$('.job-content').richText();
</script>