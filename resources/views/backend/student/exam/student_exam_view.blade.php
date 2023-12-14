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
							<h3 class="box-title">Upcoming Exam</h3>
							<a href="{{ route('exam.date.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Schedule Exam</a>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>  
											<th>Exam Type</th> 
											<th width="25%">Class</th>
											<th width="25%">Exam Date</th>
											<th width="25%">Action</th>
															 
										</tr>
									</thead>
									<tbody>
										@foreach($upcomingExam as $key => $assign )
										<tr>
											<td>{{ $key+1 }}</td>
											<td> {{ $assign->exam_type->name }}</td>				 
											<td> {{ $assign->student_classes->name }}</td>				 
											<td> {{ $assign->exam_date }}</td>				 
											<td> <a href="{{ route('exam.date.delete',$assign->id ) }}" class="btn btn-danger">Delete</a></td>
											{{-- <td> <a href="{{ route('exam.date.edit',$assign->id ) }}" class="btn btn-info">edit</a></td> --}}
				 						</tr>
										@endforeach							 
									</tbody>				
					 			</table>
							</div>
						</div> <!-- /.box-body -->
			  		</div> <!-- /.box -->
				</div> <!-- /.col -->


				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Exam History</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>  
											<th>Exam Type</th> 
											<th width="25%">Class</th>
											<th width="25%">Exam Date</th>
															 
										</tr>
									</thead>
									<tbody>
										@foreach($pastExam as $key => $assign )
										<tr>
											<td>{{ $key+1 }}</td>
											<td> {{ $assign->exam_type->name }}</td>				 
											<td> {{ $assign->student_classes->name }}</td>				 
											<td> {{ $assign->exam_date }}</td>				 
											{{-- <td> <a href="{{ route('assign.teachersubject.delete',['subject_id'=>$assign->assigned_subject->id, 'shift_id'=>$assign->school_shift->id] ) }}" class="btn btn-info">Delete</a></td> --}}
				 						</tr>
										@endforeach							 
									</tbody>				
					 			</table>
							</div>
						</div> <!-- /.box-body -->
			  		</div> <!-- /.box -->
				</div> <!-- /.col -->
		  	</div> <!-- /.row -->
		</section>
	</div> <!-- /.content -->
  </div>





@endsection
