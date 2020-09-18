@extends('admin.layout.base')
@section('title','Candidates')
@section('content')
<link rel="icon" href="public/assets/images/logo-favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" href="public/assets/images/logo-favicon.png">
<style>
    a {
        color: #51284f;
    }
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
                            <h1 class="m-0 text-dark">ALL Candidates</h1>
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

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Candidates</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Candidates</li>
            </ul>
            <!-- Main content -->
            <section class="content">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Category</th>
                        <th>Expected Salary</th>
                        <th>Location</th>
                        <th>Platform</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($total as $key => $cv)
                    <tr>
                        <td>{{ $total->firstItem() + $key }}</td>
                        <td>{{$cv->name}}</td>
                        <td>{{$cv->email}}</td>
                        <td>{{$cv->phone}}</td>
                        <td>{{$cv->category}}</td>
                        <td>{{$cv->expected_salary}}</td>
                        <td>{{$cv->location}}</td>
                        <td>{{$cv->platform}}</td>
                        <td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-info-circle"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                <!-- /.container-fluid -->
            </section>
            {{$total->links()}}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <h4 class="modal-title">Candidates</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- <div class="containe"> -->



                        <!-- Company Profile -->



                        
                        <!-- @if (session('success'))
                        <div class="row">
                            <div class="col-md-12 heading text-center">
                                <div class="alert  alert-success alert-dismissible" role="alert">
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                        @endif -->


                        
                        <!--/ Content row end -->



                        <div class="row about-wrapper-top">
                            <!-- <div class=" ts-padding about-message"> -->
                                <!-- <form id="cvUploadForm" action="cv-upload" method="post" enctype="multipart/form-data"> -->
                                    <!-- @csrf -->
                                    <!-- <div class="form-group">
                                        <label for="id">#</label>
                                        <label  id="id" name="id" >1</label>
                                    </div>
                                    <hr> -->
                                    <div class="form-group col-md-6">
                                        <label for="name">Name:</label>
                                        <label  id="name" name="name" >Muhammad Najeeb Ul Hassan</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="image">Image:</label>
                                        <label  id="image" name="image" ><img src="https://www.w3schools.com/images/lamp.jpg" alt="Lamp" width="100" height="100"></label>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email:</label>
                                        <label  id="email" name="email" >umuhammadnajeeb@gmail.com</label>
                                    </div>
                                    
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="number">Phone Number:</label>
                                        <label  id="number" name="number" >+923204304148</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="address">Address:</label>
                                        <label  id="address" name="address" >F-406/3 Street: 4 Block: G DHA R.A Bazar Lahore Cantt.</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="location">Location:</label>
                                        <label  id="location" name="location" >London</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="category">Category:</label>
                                        <label  id="category" name="category" >Site Laborers and Cleaners</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="experience">Prev Experience:</label>
                                        <label  id="experience" name="experience" >Yes</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="temporary">Pref Temporary:</label>
                                        <label  id="temporary" name="temporary" >Yes</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="availability">Availability:</label>
                                        <label  id="availability" name="availability" >Yes</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="salary">Expected Salary:</label>
                                        <label  id="salary" name="salary" >10000</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="cv">CV:</label>
                                        <label class=" btn btn-primary" id="cv" name="cv" ><i class="fas fa-file-csv"></i></label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="userId">User Id:</label>
                                        <label  id="userId" name="userId" >5</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="platform">Platform:</label>
                                        <label  id="platform" name="platform" >Temping Agency</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="created">Created At:</label>
                                        <label  id="created" name="created" >2020/11/2 00:14:18</label>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="updated">Updated At:</label>
                                        <label  id="updated" name="updated" >2020/11/2 00:14:18</label>
                                    </div>
                                    
                                <!-- </form> -->

                            <!-- </div> -->
                            <!--/ About image end -->

                        </div>
                        <!--/ Content row end -->







                        <!-- Company Profile -->



                    <!-- </div> -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    @endsection