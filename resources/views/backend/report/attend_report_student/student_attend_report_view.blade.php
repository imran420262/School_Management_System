@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<div class="content-wrapper">
		<div class="container-full">
			<!-- Content Header (Page header) -->	
			<section class="content">

				<!-- Basic Forms -->
				<div class="box">
					<div class="box-header with-border">
					<h4 class="box-title">Enter The Info</h4>			  
					{{-- @foreach ($tdata as $data)
					{{ $data }}
					@endforeach --}}
			
			  
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">

							<form method="post" target="__blank" action="{{ route('student.attendance.report.viewpdf') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="add_item">
							
										<div class="row">

											<div class="col-md-4">
												<div class="form-group">
													<h5>Select Subject <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="subject_id" id="subject_id" required="" class="form-control">
															<option value="" selected="" disabled="">Select Subject</option>
															@foreach($tdata as $data)
															<option value="{{ $data->assigned_subject->id }}">{{ $data->assigned_subject->name }}</option>
															@endforeach	 
														</select>
													</div>
												</div> <!-- // end form group -->
											</div> <!-- End col-md-4 -->

											<div class="col-md-4">
												<div class="form-group">
													<h5>Select Shift <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="shift_id" id="shift_id" required="" class="form-control">
															<option value="" selected="" disabled="">Select Shift</option>
														</select>
													</div>
												</div> <!-- // end form group -->
											</div> <!-- End col-md-4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Date <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="month" name="date" class="form-control">
													</div>
												</div> <!-- // end form group -->
											</div> <!-- End col-md-4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Student ID <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="student_id_no" class="form-control">
													</div>
												</div> <!-- // end form group -->
											</div> <!-- End col-md-4 -->
   

  
     	
										</div> <!-- end Row -->

									</div>	<!-- // End add_item -->
							 
									<div class="text-xs-right">
										<input type="submit"  name="action" class="btn btn-rounded btn-info mb-5" value="Get Report">
									</div>
								</div>
							</form>

						</div>
										<!-- /.col -->
					</div>
										<!-- /.row -->
					</div>
				<!-- /.box-body -->
				</div>
										<!-- /.box -->

			</section>

			<section class="content">
				<div class="row">
					
				   
	  
				  
	  
						 
				  </div>
				  <!-- /.col -->
				</div>
				<!-- /.row -->
			  </section>
			  <!-- /.content -->
		</div>
	</div>
	</div>  			
		</div>  		
		</div>  	
		</div>

  <!--   // for get teacher name  -->

<script type="text/javascript">
	$(function(){
	  $(document).on('change','#subject_id',function(){
		
		  var subject_id = $('#subject_id').val();
		$.ajax({
		  url:"{{ route('student.attendance.getshift') }}",
		  type:"GET",
		  // data:{class_id:class_id},
		  data:{'subject_id':subject_id},
		  success:function(data){
			var html = '<option value="">Select Shift</option>';
			$.each( data, function(key, v) {
			  html += '<option value="'+v.shift_id+'">'+v.school_shift.name+'</option>';
			});
			$('#shift_id').html(html);
		  }
		});
		})
	  
	});
  </script>

@endsection
