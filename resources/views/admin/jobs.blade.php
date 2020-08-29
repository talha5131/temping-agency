@extends('admin.layout.base')
@section('title','Admin Jobs')
@section('content')
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
                            <h1 class="m-0 text-dark">All Jobs</h1>
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
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Jobs</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Jobs</li>
            </ul>
            <!-- Main content -->
            <section class="content">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{$job->title}}</td>
                        <td>{{$job->category}}</td>
                        <td>
                            @if($job->approved == 1)
                                <a href=""><i class="far fa-eye"></i></a> 
                            @elseif($job->approved == 0)
                                <a href=""><i class="far fa-eye-slash"></i></a> 
                            @endif
                            <a href=""><i class="far fa-trash-alt"></i></a> <a href="{{ route('admin.jobDetails',['id' => $job->id])}}"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $jobs->links() }}
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
    @endsection
