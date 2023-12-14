@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper"><div class="container-full">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Admission Request</h3>		  
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="5%">SL</th> 
										<th>Photo</th> 
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Class</th>
										<th>Group</th>
										<th>Shift</th> 
										<th>document</th>
										<th width="25%">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($admission_info as $key => $admission )
									<tr>
										<td>{{ $key+1 }}</td>
										<td>
											<img id="showImage" src="{{ asset('upload/admission_student_images').'/'.$admission['image'] }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

										</td>
										<td> {{ $admission['name'] }}</td>				 
										<td> {{ $admission['email'] }}</td>				 
										<td> {{ $admission['mobile'] }}</td>
										@php
											$class = App\Models\StudentClass::where('id',$admission['class_id'])->first();
											$group = App\Models\Studentgroup::where('id',$admission['group_id'])->first();
											$shift = App\Models\StudentShift::where('id',$admission['shift_id'])->first();
										@endphp				 
										<td> {{ $class['name'] }}</td>				 
										<td> {{ $group['name'] }}</td>				 
										<td> {{ $shift['name'] }}</td>	
										<td><a target="__blank" href="{{ asset('upload/student_document').'/'.$admission['student_document'] }}">Click to download</a></td>

										<td>
											<a href="{{ route('admission.approve',$admission['id']) }}" class="btn btn-info @if($admission['status'] == 'approved') disabled @endif @if ($admission['status'] == 'rejected') disabled @endif">Approve</a>
											<a href="{{ route('admission.reject',$admission['id']) }}" class="btn btn-info @if($admission['status'] == 'rejected') disabled @endif @if ($admission['status'] == 'approved') disabled @endif">Reject</a>
											@if ($admission['status'] == 'approved') Approved by {{ $admission['action_by'] }} @endif
											@if ($admission['status'] == 'rejected') Rejected By {{ $admission['action_by'] }} @endif
											
										</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									
								</tfoot>
							</table>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div> <!-- /.col -->
		</div> <!-- /.row -->
	</section> <!-- /.content -->
</div>





@endsection
