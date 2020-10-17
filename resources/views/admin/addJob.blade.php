@extends('admin.layout.base')
@section('title','Add Job')
@section('content')

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
                    <form id="postAJob" action="{{ route('admin.addJob')}}" method="post">
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
                                <label for="desc"> Meta Description</label>
                                <textarea class="form-control" rows="7" id="meta" name="meta"></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="desc"> Job Description</label>
                                <textarea class="form-control job-content" rows="7" id="desc" name="desc">
                                    {{Request::old('desc')}}
                                </textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="jobTitle">External Link</label>
                                <input type="url" class="form-control" id="link" name="link" placeholder="Add External Link">
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
                                <button type="submit" style=" float:right;" class=" btn btn-primary"> Reset</button>
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
    <script type="text/javascript" src="public/assets/js/jquery.richtext.min.js"></script>
    <script>
        $('.job-content').richText();
    </script>
    @endsection