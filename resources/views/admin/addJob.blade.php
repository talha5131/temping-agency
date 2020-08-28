@extends('admin.layout.base')
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
                                <input type="tags" data-role="tagsinput" class="form-control">
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
                                <label for="location">Duration</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Duration">
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="location">Joining Date</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Joining Date">
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="location">Ending Date</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Ending Date">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="jobtype">Job Timing</label>
                                <select class="form-control" id="jobtype" name="jobtype">
                                    <option value="Freelance">Freelance</option>
                                    <option value="Full Time" selected>Full Time</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Temporary">Temporary</option>
                                </select>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="appEmail">Salary</label>
                                <div class="row">
                                    <label class="col-sm-2">From</label>
                                    <input type="text" class="col-sm-4 form-control" id="appEmail" name="appEmail" placeholder="Enter an e-mail adress or website URL">
                                    <label class="col-sm-2">To</label>
                                    <input type="text" class="col-sm-4 form-control" id="appEmail" name="appEmail" placeholder="Enter an e-mail adress or website URL">
                                </div>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="to" class="col-form-label">Salary Type</label>
                                <div class="input-group">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payType" checked="" value="per hour" class="custom-control-input"><span class="custom-control-label">Per Hour</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payType" value="per week" class="custom-control-input"><span class="custom-control-label">Per Week</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="payType" value="per year" class="custom-control-input"><span class="custom-control-label">Per Year</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="tags">Job Purpose</label>
                                <input type="text" data-role="tagsinput" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="compName">Job Responsibilites</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Enter the name of the company">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="website">Job Requirements</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="http://">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="logo">Add Image</label>
                                    </div>
                                    
                                    <div class="col-sm-6" style="position:relative;">
                                      <a class='btn btn-primary' href='#'>
                                        Choose File..
                                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);
                                        -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;
                                        background-color:transparent;color:transparent;'
                                        name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
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
    @endsection