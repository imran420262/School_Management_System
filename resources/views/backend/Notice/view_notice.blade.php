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
				  <h3 class="box-title">Manage School Notices</h3>
	<a href="{{ route('site.notice.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Notice</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Notice Name</th> 
				<th width="10%">Notice Date</th> 
				<th>Notice Description</th> 
				<th>Notice Created By</th> 
				<th>Notice Updated By</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($noticeDetails as $key => $notice )
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $notice['notice_name'] }}</td>
				<td>
					{{ date('d-M-y',strtotime($notice['notice_date'])) }}
				</td>
				<td>{{ $notice['notice_description'] }}</td>
				<td>{{ $notice['created_by']['name'] }}</td>
				<td>{{ $notice['updated_by']['name'] }}</td>
				{{-- <td>{{ $eventDetails[0]['created_by'] }}</td>				  --}}
				<td>
				<a href="{{ route('site.notice.edit',$notice->id) }}" class="btn btn-info">Edit</a>
				<a href="{{ route('site.notice.delete',$notice->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
