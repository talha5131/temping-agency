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
                                <h3>{{ isset($job->title)?$job->title:'' }}</h3>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="tags">Job Tags</label>
                                <h3>{{ isset($job->tags)?$job->tags:'' }}</h3>
                            </div>



                            <div class="col-sm-4 form-group">
                                <label for="jobtype">Job Category</label>
                                <h3>{{ isset($job->category)?$job->category:'' }}</h3>
                            </div>



                            <div class="col-sm-4 form-group">
                                <label for="location">Location</label>
                                <h3>{{ isset($job->location)?$job->location:'' }}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="joiningDate">Joining Date</label>
                                <h3>{{ isset($job->joining_date)?$job->joining_date:'' }}</h3>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="endingDate">Ending Date</label>
                                <h3>{{ isset($job->end_date)?$job->end_date:'' }}</h3>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="openingDate">Opening Date</label>
                                <h3>{{ isset($job->opening_dates)?$job->opening_dates:'' }}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="jobtype">Job Timing</label>
                                <h3>{{ isset($job->timings)?$job->timings:'' }}</h3>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="salary">Salary</label>
                                <h3>{{ isset($job->salary)?$job->salary:'' }}</h3>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="location">Duration</label>
                                <h3>{{ isset($job->duration)?$job->duration:'' }}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="jobPurpose">Job Purpose</label>
                                <h3>{{ isset($job->purpose)?$job->purpose:'' }}</h3>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="responsibilities">Job Responsibilites</label>
                                <h3>{{ isset($job->responsibilities)?$job->responsibilities:'' }}</h3>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="requirements">Job Requirements</label>
                                <h3>{{ isset($job->requirements)?$job->requirements:'' }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="vacancy">Vacancy</label>
                                <h3>{{ isset($job->vacancies)?$job->vacancies:'' }}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="desc"> Job Description</label>
                                <h3>{{ isset($job->description)?$job->description:'' }}</h3>
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