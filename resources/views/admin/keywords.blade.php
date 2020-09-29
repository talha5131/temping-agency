@extends('admin.layout.base')
@section('title','Keywords')
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
                            <h1 class="m-0 text-dark">Bulk Actions</h1>
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

		@if (session('success'))
		<div class="row">
			<div class="col-md-12 heading text-center">
				<div class="alert  alert-success alert-dismissible" role="alert">
					{{ session('success') }}
				</div>
			</div>
		</div>
		@endif

            <section class="content">

            	<div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-0 text-dark">Keywords</h4></br>
                        <form method="POST" action="{{route('admin.savekey')}}">
                        	@csrf
	                    	<input type="text" class="form-group" name="key" placeholder="Keyword">  <input type="submit" value="Add Keyword" class="btn btn-primary">
                    	</form>
                        <hr>
                    </div>
                    <div class="col-sm-6">

                    </div>
            	</div>
            	<div class="row">
                    <div class="col-sm-6">
                        <h4 class="m-0 text-dark">Terms</h4></br>
                        <form method="POST" action="{{route('admin.saveterm')}}"enctype="multipart/form-data">
                        	@csrf
	                    	<select name="keyword" class="form-control">
	                    		<option disabled>Select Keyword</option>
	                    		@foreach($keys as $key)
	                    			<option value="{{$key->name}}">{{ $key->name }}</option>
	                    		@endforeach	
	                    	</select> 
	                    	<input type="file" class="form-group" name="term" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"> <input type="submit" value="Add Term" placeholder="Term" class="btn btn-primary">
                    	</form>
                        <hr>
                    </div>
                    <div class="col-sm-6">

                    </div>
            	</div>


                <table class="table table-bordered table-striped">
                    <tr>
                        <th>#</th>
                        <th>Keyword</th>
                        <th>Term</th>
                        <!-- <th>Actions</th> -->
                    </tr>

                    @foreach($terms as $key => $term)
                    <tr>
                        <td>{{ $terms->firstItem() + $key }}</td>
                    	<td>{{$term->key->name}}</td>
                    	<td>{{$term->name}}</td>
                    	<!-- <td></td> -->
                    </tr>
                    @endforeach
		        </table>
                {{$terms->links()}}
		    </section>
        </div>
    </div>

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('savekey').on('click', function() {			
			$.ajax({
		        type: 'post',
		        url: '',
		        data: {
		            '_token': $('input[name=_token]').val(),
		            'key': $('input[name=key]').val()
		        },
		        success: function(data) {
		            if ((data.errors)) {
		                // $('.error').removeClass('hidden');
		                // $('.error').text(data.errors.name);
		            } else {
		                $('.error').remove();
		                // $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
		            }
		        },
	    	});
	    	$('#name').val('');
		});
	});

</script>
@endsection
