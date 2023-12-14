@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box bb-3 border-warning">
						<div class="box-header">
							<h4 class="box-title">Student Result</h4>
						</div>
						<div class="box-body">
							<form method="GET" action="{{ route('student.result.info') }}">
								@csrf
								<div class="row">
									
									
									<div class="col-md-6">
										<div class="form-group">
											<h5>Exam Type <span class="text-danger"> </span></h5>
											<div class="controls">
												<select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
													<option value="" selected="" disabled="">Exam Type</option>
													@foreach($exam_type as $exam)
													<option value="{{ $exam->id }}">{{ $exam->name }}</option>
													@endforeach
												</select>
                                                
											</div>
                                            <br><br><input type="submit" class="btn btn-rounded btn-primary" value="Search">		 
										</div>
									</div> <!-- End Col md 6 --> 
                    
                                </div><!--  end row --> 
							</form> 
						</div> <!--End of box body-->
					</div> <!--End of box bb-3 border-warning -->
				</div> <!--End of col-12-->
			</div> <!--End of row -->	
		</section>
	</div><!--End of container-full-->
</div><!--End of content wrapper-->
@endsection
