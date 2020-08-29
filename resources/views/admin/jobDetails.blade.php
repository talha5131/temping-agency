@extends('admin.layout.base2')
@section('title','Add Job')
@section('content')
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Job</h1>
                            <hr>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Jobs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Jobs</li>
                </ul>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <form id="postAJob" action="post-a-job" method="post">
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="jobTitle">Job Title</label>
                                <h3>XYZ</h3>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="tags">Job Tags</label>
                                <h5>Tags Come Here</h5>
                            </div>



                            <div class="col-sm-4 form-group">
                                <label for="jobtype">Job Category</label>
                                <h5>Category Comes Here</h5>
                            </div>



                            <div class="col-sm-4 form-group">
                                <label for="location">Location <small>(optional)</small></label>
                                <h5>Location Comes Here</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="joiningDate">Joining Date</label>
                                <h5>Joining Date Comes Here</h5>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="endingDate">Ending Date</label>
                                <h5>Ending Date Comes Here</h5>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="openingDate">Opening Date</label>
                                <h5>Opening Date Comes Here</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="jobtype">Job Timing</label>
                                <h5>Job Timing Comes Here</h5>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="salary">Salary</label>
                                <h5>Salary Comes Here</h5>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="location">Duration</label>
                                <h5>Duration Comes Here</h5>
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
                                <h5>Job Purpose Comes Here</h5>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="responsibilities">Job Responsibilites</label>
                                <h5>Job Responsibilites Comes Here</h5>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="requirements">Job Requirements</label>
                                <h5>Job Requirements Comes Here</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="vacancy">Vacancy</label>
                                <h5>Vacancy Comes Here</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="desc"> Job Description</label>
                                <p>Job Description Comes Here</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="logo">Add Image</label>
                                        <img src="">Image Comes Here</img>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                            </div>
                        </div>

                    </form>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <script type="text/javascript" src="../public/assets/js/jquery.richtext.min.js"></script>
    <script>
        $('.job-content').richText();
    </script>
    @endsection