@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<section class="content">
			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Add New Event</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							<form method="post" action="{{ route('site.event.store') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">	 
										<div class="form-group">
											<h5>Event Title<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="event_name" required class="form-control" > 		
											</div>
											
											<h5>Event Date<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="date" name="event_date" required class="form-control" > 		
											</div>
											
											<h5>Event Time<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="time" name="event_time" required class="form-control" > 		
											</div>
											
											<div class="col-md-4">

												<div class="form-group">
											   <h5>Event Photo <span class="text-danger">*</span></h5>
											   <div class="controls">
											<input type="file" name="image" class="form-control" id="image" >  </div>
											</div>
											 
													</div> <!-- End Col md 4 --> 
									   
									   
									   <div class="col-md-4">
									   
												<div class="form-group">
											   <div class="controls">
										   <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 
									   
											</div>
											</div>
											 
													</div> <!-- End Col md 4 --> 
											
											<h5>Event Description <span class="text-danger">*</span></h5>
											<div class="controls">
												
											<textarea class="textarea" name="event_description" placeholder="Your Event Description"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
											</div>

										</div>						 
										<div class="text-xs-right">
											<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
										</div>
									</div> <!-- /.col -->
								</div><!-- /.row -->

							</form>

						</div><!--col-->
					</div><!--row-->
				</div><!--text-body-->
			</div><!--box-->
		</section>
	</div>
</div>

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
