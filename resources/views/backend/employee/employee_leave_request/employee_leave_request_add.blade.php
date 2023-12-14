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
					<h4 class="box-title">Employee Leave</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							<form method="post" action="{{ route('store.employee.leave') }}">
								@csrf
								<div class="row">
									<div class="col-12">	
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<h5>Employee Name <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="employee_id" required="" class="form-control">
															<option value="{{Auth::user()->id}}">{{ Auth::user()->name }}</option>
														</select>
													</div>
												</div>
											</div> <!-- // end col md-6 -->
											<div class="col-md-3">
												<div class="form-group">
													<h5>Start Date <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="date" id="start_date" name="start_date" class="form-control" > 
													</div>
												</div>
											</div> <!-- // end col md-6 -->
											<div class="col-md-3">
												<div class="form-group">
													<h5>Number of days <span class="text-danger">*</span></h5>
													<div class="controls">
														<input type="number" id="number_of_days" name="number_of_days" class="form-control" > 
													</div>
												</div>
											</div> <!-- // end col md-6 -->

											<div class="col-md-6">
												<div class="form-group">
													<h5>Leave Purpose <span class="text-danger">*</span></h5>
													<div class="controls">
														<select name="leave_purpose_id" id="leave_purpose_id" required="" class="form-control">
															<option value="" selected="" disabled="">Select Employee Name</option>
															@foreach($leave_purpose as $leave)
															<option value="{{ $leave->id }}">{{ $leave->name }}</option>
															@endforeach
															<option value="0">New Purpose</option>
														</select>
														<input type="text" name="name" id="add_another" class="form-control" placeholder="Write Purpose" style="display: none;">		
													</div>
												</div>
											</div> <!-- // end col md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													<h5>End Date </h5>
													<div class="controls">
														<input type="date" id="end_date_disabled" disabled class="form-control" > 
													</div>
												</div>
											</div> <!-- // end col md-6 -->
											<div class="col-md-6">
												<div class="form-group">
													
													<div class="controls">
														<input type="date" id="end_date"  name="end_date" hidden class="form-control" > 
													</div>
												</div>
											</div> <!-- // end col md-6 -->
										</div> <!-- // end row -->
										<div class="text-xs-right">
											<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
										</div>
									</div> <!-- End of col-12 -->
								</div> <!-- End of row -->
							</form> <!-- End of form -->
						</div> <!-- End of col -->
					</div> <!-- End of row -->
				</div> <!-- End of box-body -->
			</div> <!-- End of box -->
		</section> <!-- End of section -->

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#leave_purpose_id',function(){
			var leave_purpose_id = $(this).val();
			if (leave_purpose_id == '0') {
				$('#add_another').show();
			}else{
				$('#add_another').hide();
			}
		});
	});
</script>

<script type="text/javascript">
$(function(){
	$(document).on('change','#number_of_days',function(){
		var days = document.getElementById('number_of_days').value;
		var startDate = new Date(document.getElementById('start_date').value);

		startDate.setDate(startDate.getDate() + parseInt(days-1));
		
		const offset = startDate.getTimezoneOffset();
		
		startDate = new Date(startDate.getTime()-(offset*60*1000));
		newDate = startDate.toISOString().split('T')[0];
		
		
		
		var endDate = document.getElementById('end_date');
		var endDateDisabled = document.getElementById('end_date_disabled');
		endDate.value = newDate;
		endDateDisabled.value = newDate;
	})
});
</script>



@endsection
