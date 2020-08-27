@extends('layouts.base')
@section('title','Jobs')
@section('content')

<style>
	html,
	body {
		width: 100%;
		margin: 0px;
		padding: 0px;
		overflow-x: hidden;
	}
</style>


		<div id="banner-area">
			<img src="public/assets/images/banner/banner2.jpg" alt="" />
			<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
				<div class="text-center">
					<h2>Jobs Openings</h2>
					<ul class="breadcrumb">
						<li>Home</li>
						<li>Company</li>
						<li><a href="#"> Jobs</a></li>
					</ul>
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Banner area end -->

		<!-- Main container start -->

		<section id="main-container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="row">
                            @foreach($jobs as $job)
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
									<h4><a href="#">{{ $job->title }}</a></h4>
									<p>{{ $job->description }}</p>
									<a href="job/{{$job->id}}" class="btn btn-primary">Read More</a>
								</div>
							</div>
                            @endforeach
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/pictures/hub-05-29-jobinterviewlies-Hero-1200x900.jpg" class="img-responsive">
									<h4><a href="#">Accountant – US Department of Veterans Affairs – Sheridan, WY</a></h4>
									<p>Applicants wishing to receive credit for such experience must indicate clearly the nature of their duties and responsibilities in each position and the number… $43,251 – $83,210 a year</p>
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
									<h4><a href="#">Accountant – US Department of Veterans Affairs – Sheridan, WY</a></h4>
									<p>Applicants wishing to receive credit for such experience must indicate clearly the nature of their duties and responsibilities in each position and the number… $43,251 – $83,210 a year</p>
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/pictures/hub-05-29-jobinterviewlies-Hero-1200x900.jpg" class="img-responsive">
									<h4><a href="#">Accountant – US Department of Veterans Affairs – Sheridan, WY</a></h4>
									<p>Applicants wishing to receive credit for such experience must indicate clearly the nature of their duties and responsibilities in each position and the number… $43,251 – $83,210 a year</p>
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
									<h4><a href="#">Accountant – US Department of Veterans Affairs – Sheridan, WY</a></h4>
									<p>Applicants wishing to receive credit for such experience must indicate clearly the nature of their duties and responsibilities in each position and the number… $43,251 – $83,210 a year</p>
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well">
									<img src="public/assets/images/construction/Construction-Laborers.jpg" class="img-responsive">
									<h4><a href="#">Accountant – US Department of Veterans Affairs – Sheridan, WY</a></h4>
									<p>Applicants wishing to receive credit for such experience must indicate clearly the nature of their duties and responsibilities in each position and the number… $43,251 – $83,210 a year</p>
									<button class="btn btn-primary">Read More</button>
								</div>
							</div>
						</div>
						<!--
						<h3 class="title-border">Senior Manager</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

						<div class="panel-group" id="accordionA">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseOne">Job Requirements</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>B.Sc. from any reputed university</li>
											<li>MBA in Marketing from any reputed university is very much desired</li>
											<li>Two (02) years of experience in Software Company is an advantage.</li>
											<li>Experience as Business Analyst will be an added advantage</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 1 end-->

						<!-- 							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseTwo"> Job Responsibilities</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Global Business Development &amp; Strategic Account Management</li>
											<li>Marketing Research</li>
											<li>Marketing Collaterals development</li>
											<li>Business Analysis</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 2 end-->

						<!--
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree"> What’s in it for you?</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused &amp; Stable organization.</li>
											<li>Training on new technology.</li>
											<li>Overseas Tour with Opportunity to work with Global Companies.</li>
											<li>Most importantly a friendly work environment with opportunity to learn from a number of highly skilled mentors.</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 3 end-->

						<!-- 							<div class="gap-20"></div>

							<p><a href="#" class="btn btn-primary solid">Apply Now <i class="fa fa-long-arrow-right"></i></a></p>

						</div> -->
						<!--/ Accordion end -->

						<!--/ 1st career end -->

						<!-- 						<div class="gap-40"></div>

						<h3 class="title-border">Assistent Manager (P&amp;L)</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>

						<div class="panel-group" id="accordionB">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseA">Job Requirements</a>
									</h4>
								</div>
								<div id="collapseA" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>B.Sc. from any reputed university</li>
											<li>MBA in Marketing from any reputed university is very much desired</li>
											<li>Two (02) years of experience in Software Company is an advantage.</li>
											<li>Experience as Business Analyst will be an added advantage</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 1 end-->

						<!-- 							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseB"> Job Responsibilities</a>
									</h4>
								</div>
								<div id="collapseB" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Global Business Development &amp; Strategic Account Management</li>
											<li>Marketing Research</li>
											<li>Marketing Collaterals development</li>
											<li>Business Analysis</li>
											<li>Manage and execute lead generation activities.</li>
											<li>Help building marketing strategy, tool and approach by thorough research</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 2 end-->


						<!-- 							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseC"> What’s in it for you?</a>
									</h4>
								</div>
								<div id="collapseC" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="unstyled arrow">
											<li>Very Competitive Salary and Long Term Benefits with Excellent Career Opportunity in a Focused &amp; Stable organization.</li>
											<li>Training on new technology.</li>
											<li>Overseas Tour with Opportunity to work with Global Companies.</li>
											<li>Most importantly a friendly work environment with opportunity to learn from a number of highly skilled mentors.</li>
										</ul>
									</div>
								</div>
							</div> -->
						<!--/ Panel 3 end-->
						<!--
							<div class="gap-20"></div>

							<p><a href="#" class="btn btn-primary solid">Apply Now <i class="fa fa-long-arrow-right"></i></a></p>

						</div> -->
						<!--/ Accordion end -->

					</div>
					<!--/ Content col end -->

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="sidebar sidebar-right">
							<!-- category start -->
							<div class="widget widget-categories">
								<h3>How to Apply</h3>
								<p>Send your cv, relevant work experience and anything else that will make you stand out to Temping Agency.</p>
							</div><!-- category end -->

							<!-- tags start -->
							<div class="widget widget-tags">
								<h3>Why Us</h3>
								<p>We are an awward winning company. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, natus voluptatibus adipisci porro magni dolore eos eius ducimus corporis quos perspiciatis quis iste, vitae autem libero ullam omnis cupiditate quam.</p>
							</div><!-- tags end -->


						</div>
						<!--/ Sidebar end -->
					</div>
					<!--/ Sidebar col end -->
				</div>
				<!--/ row end -->
			</div>
			<!--/ container end -->
		</section>
		<!--/ Main container end -->T

	</div><!-- Body inner end -->
