@extends('admin.layout.base')
@section('title','Blogs')
@section('content')
<link rel="icon" href="public/assets/images/logo-favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/images/logo-favicon.png">
<link rel="apple-touch-icon-precomposed" href="public/assets/images/logo-favicon.png">
<style>
    a{
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
                            <h1 class="m-0 text-dark">All Blogs</h1>
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
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Blogs</li>
            </ul>
            <!-- Main content -->
            <section class="content">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Approved</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>ABC</td>
                        <td>ABC</td>
                        <td>ABC</td>
                    </tr>
                    <tr>
                        <td>ABC</td>
                        <td>ABC</td>
                        <td>ABC</td>
                    </tr>
                </table>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    @endsection