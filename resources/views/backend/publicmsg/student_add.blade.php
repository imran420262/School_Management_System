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
					<h4 class="box-title">Add Student </h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							<form method="post" action="{{ route('store.admission.student.registration') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">	
										<div class="row"> <!-- 1st Row -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Student Name <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="name" value="{{ $ai['name'] }}"  class="form-control" required="" > 
														<input type="text" name="admission_id" value="{{ $admission_id }}" hidden  class="form-control" required="" > 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Father's Name <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="fname" value="{{ $ai['fname'] }}" class="form-control" required="" > 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Mother's Name <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="mname" value="{{ $ai['mname'] }}" class="form-control" required=""> 
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
										</div> <!-- End 1stRow -->
										<div class="row"> <!-- 2nd Row -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Mobile Number <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="mobile" value="{{ $ai['mobile'] }}" class="form-control" required="" > 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Address <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="address" value="{{ $ai['address'] }}" class="form-control" required="" > 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Gender <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="gender" id="gender" required="" class="form-control">
															<option value="" disabled="">Select Gender</option>
															<option value="Male" @if ($ai['gender'] == 'Male') selected @endif>Male</option>
															<option value="Female" @if ($ai['gender'] == 'Female') selected @endif>Female</option>
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
										</div> <!-- End 2nd Row -->
										<div class="row"> <!-- 3rd Row -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Religion <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="religion" id="religion" required="" class="form-control">
															<option value="" disabled="">Select Religion</option>
															<option value="Islam" @if ($ai['religion'] == 'Islam') selected @endif>Islam</option>
															<option value="Hindu" @if ($ai['religion'] == 'Hindu') selected @endif>Hindu</option>
															<option value="Christan" @if ($ai['religion'] == 'Christan') selected @endif>Christan</option>
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
											<div class="col-md-4">
												<div class="form-group">
													<h5>Date of Birth <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="date" name="dob" class="form-control" required="" value="{{ $ai['dob'] }}"> 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Idenetity Document Number <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="id_document_no" value="{{ $ai['id_document_no'] }}"  class="form-control" required="" > 
														
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Registration Date <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" name="join_date" value="{{ $ai['created_at'] }}" class="form-control" required="" > 
													</div>
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>eMail</h5>
													<div class="controls">
														<input type="text" name="email" value="{{ $ai['email'] }}" class="form-control" > 
													</div>		 
												</div>
											</div> <!-- End Col md 4 -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Discount <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="text" name="discount" class="form-control" required="" > 
													</div>		 
												</div>	  
											</div> <!-- End Col md 4 --> 
										</div> <!-- End 3rd Row -->
										<div class="row"> <!-- 4TH Row -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Year <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="year_id" required="" class="form-control">
															<option value="" disabled="">Select Year</option>
															@foreach($years as $year)
															<option value="{{ $year->id }}" @if ($ai['year_id'] == $year->id) selected @endif>{{ $year->name }} </option>
															@endforeach
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
											<div class="col-md-4">
												<div class="form-group">
													<h5>Class <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="class_id"  required="" class="form-control">
															<option value="" selected="" disabled="">Select Class</option>
															@foreach($classes as $class)
															<option value="{{ $class->id }}" @if ($ai['class_id'] == $class->id) selected @endif>{{ $class->name }} </option>
															@endforeach
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
											<div class="col-md-4">
												<div class="form-group">
													<h5>Group <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="group_id"   required="" class="form-control">
															<option value="" selected="" disabled="">Select Group</option>
															@foreach($groups as $group)
															<option value="{{ $group->id }} " @if ($ai['group_id'] == $group->id) selected @endif>{{ $group->name }} </option>
															@endforeach
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
										</div> <!-- End 4TH Row -->
										<div class="row"> <!-- 5TH Row -->
											<div class="col-md-4">
												<div class="form-group">
													<h5>Shift <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="shift_id"  required="" class="form-control">
															<option value="" selected="" disabled="">Select Shift</option>
															@foreach($shifts as $shift)
															<option value="{{ $shift->id }}" @if ($ai['shift_id'] == $shift->id) selected @endif>{{ $shift->name }}</option>
															@endforeach
														</select>
													</div>		 
												</div>
											</div> <!-- End Col md 4 --> 
											<div class="col-md-4">
												<div class="form-group">
													<h5>Profile Image <span class="text-danger">*</span></h5>
													{{-- <h5>{{ asset('upload/admission_student_images').'/'.$ai->image }} <span class="text-danger">*</span></h5> --}}
													<div class="controls">
														{{-- <input type="file" name="image" value="{{ asset('upload/admission_student_images').'/'.$ai->image }}" class="form-control" id="image" > --}}
														<input type="file" name="image" class="form-control" id="image" >
													</div>
												</div>
											</div> <!-- End Col md 4 --> 
											<div class="col-md-4">
												<div class="form-group">
													<div class="controls">
														<img id="showImage" src="{{ asset('upload/admission_student_images').'/'.$ai->image }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 
													</div>
												</div>
											</div> <!-- End Col md 4 --> 
										</div> <!-- End 5TH Row -->
										<div class="text-xs-right">
											<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
										</div>
									</div> <!-- End of col-12 -->
								</div> <!-- End of row -->
							</form>
						</div><!-- end of col -->
					</div><!--end of row -->
				</div> <!-- end of box-body -->
		  	</div> <!-- end of box -->
		</section>
	</div> <!-- End of container-full -->
</div> <!-- End of content-wrapper -->

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
