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
				  <h3 class="box-title">Manage School Events</h3>
	<a href="{{ route('site.event.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Event</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Event Name</th> 
				<th width="10%">Event Date</th> 
				<th>Event Image</th> 
				<th>Event Description</th> 
				<th>Event Created By</th> 
				<th>Event Updated By</th> 
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($eventDetails as $key => $event )
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $event['event_name'] }}</td>
				<td>
					{{ date('d-M-y',strtotime($event['event_date'])) }}
					{{ date('h:i A',strtotime($event['event_time'])) }}
					{{-- {{ $event['event_time'] }} --}}
				</td>
				<td>
					<img src="{{ url('upload/school_event/'.$event['event_photo']) }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
				</td>
				<td>{{ $event['event_description'] }}</td>
				<td>{{ $event['created_by']['name'] }}</td>
				<td>{{ $event['updated_by']['name'] }}</td>
				{{-- <td>{{ $eventDetails[0]['created_by'] }}</td>				  --}}
				<td>
				<a href="{{ route('site.event.edit',$event->id) }}" class="btn btn-info">Edit</a>
				<a href="{{ route('site.event.delete',$event->id) }}" class="btn btn-danger" id="delete">Delete</a>

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
