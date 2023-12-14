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
				  <h3 class="box-title">Teacher's list with assigned subject</h3>
	<a href="{{ route('assign.teachersubject.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Assign Subject To A Teacher</a>			  

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="5%">SL</th>  
				<th>Teacher Name</th> 
				<th width="25%">Shift</th>
				<th width="25%">Subject</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($allData as $key => $assign )
			<tr>
				<td>{{ $key+1 }}</td>
				<td> {{ $assign->teachers['name'] }}</td>				 
				<td> {{ $assign->school_shift['name'] }}</td>				 
				<td> {{ $assign->assigned_subject['name'] }}</td>				 
				{{-- <td> {{ $assign->assigned_subject->id }}</td>				  --}}
				{{-- <td> {{ $assign->school_shift->id }}</td>				  --}}
				{{-- <td>{{ $ass }}</td> --}}
				<td> <a href="{{ route('assign.teachersubject.delete',['subject_id'=>$assign->assigned_subject->id, 'shift_id'=>$assign->school_shift->id] ) }}" class="btn btn-info">Delete</a>
				{{-- <td> <a href="{{ route('assign.teachersubject.delete') }}" class="btn btn-info">Delete</a> --}}
				

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
