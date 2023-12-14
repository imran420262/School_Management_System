@extends('admin.admin_master')
@section('admin')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Messages From Site Visitors</h3>		  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Phone</th>
                <th>Message</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allmessage as $key => $message )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $message['name'] }}</td>				 
				<td> {{ $message['email'] }}</td>				 
				<td> {{ $message['subject'] }}</td>				 
				<td> {{ $message['phone'] }}</td>				 
				<td> {{ $message['message'] }}</td>				 
				<td>
<a href="{{ route('public.message.read',$message['id']) }}" class="btn btn-info @if ($message['read'] == 'yes') disabled @endif">Mark As Read</a>

				</td>
				 
			</tr>
			@endforeach
							 
						</tbody>
						<tfoot>
							 
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
