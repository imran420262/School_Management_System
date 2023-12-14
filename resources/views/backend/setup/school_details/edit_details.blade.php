@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<form method="post" action="{{ route('school.details.store') }}" enctype="multipart/form-data">
			@csrf
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="box">
							<div class="box-header with-border">
								<h4 class="box-title">Edit School Details </h4>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="row"> <!--row 1 -->									
									<div class="col-md-4">
										<div class="form-group">
											<h5>School Name <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_name" value="{{ $all[0]['school_name'] }}" class="form-control" required="" >
											</div>
										</div>
									</div> <!-- End Col md 4 -->
									
									<div class="col-md-4">
										<div class="form-group">
											<h5>School Phone <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_phone" value="{{ $all[0]['school_phone'] }}" class="form-control" required="" >
											</div>
										</div>
									</div> <!-- End Col md 4 -->
									
									<div class="col-md-4">
										<div class="form-group">
											<h5>School Email <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="email" name="school_email" value="{{ $all[0]['school_email'] }}" class="form-control" required="">
											</div>
										</div>
									</div> <!-- End Col md 4 --> 
								
									<div class="col-md-4">
										<div class="form-group">
											<h5>Address <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_address" value="{{ $all[0]['school_address'] }}" class="form-control" required="" >
											</div>
										</div>
									</div> <!-- End Col md 4 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>Map Coordinate</h5>
											<div class="controls">
												<input type="text" name="map_coordinate" value="{{ $all[0]['map_coordinate'] }}" class="form-control" >
											</div>
										</div>
									</div> <!-- End Col md 4 -->
									
									<div class="col-md-4">
										<div class="form-group">
											<h5>Established <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="date" name="school_est" value="{{ $all[0]['school_est'] }}" class="form-control" required="" >
											</div>
										</div>
									</div> <!-- End Col md 4 -->
								</div> <!-- End of row 1 -->
												
								
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<h5>School logo <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="file" name="image" class="form-control" id="image" > 
											</div>	
										</div> <!-- End Col md 4 --> 
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="controls">
												<img id="showImage" src="{{ url('upload/'.$all[0]['image']) }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
											</div>
										</div>
									</div> <!-- End Col md 4 -->
								</div> <!-- End 5TH Row -->
								
							

								<div class="row"> <!--Row 3 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>School About Title <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="about_title" value="{{ $all[0]['about_title'] }}" class="form-control" required="" > 
											</div>
										</div>
									</div> <!-- End Col md 4 -->
							
									<div class="col-md-6">
										<h5>About Description <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea class="textarea" name="about_description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
												{{ $all[0]['about_description'] }}
											</textarea>
										</div>
									</div> <!-- End Col md 4 -->
								</div><!-- /End of Row 3-->	

							</div><!-- End of box body -->
						</div><!-- End of box -->
						
						<div  class="box">
							<div class="box-header with-border">
								<h4>Mission & Vision</h4>
							</div>
							<div class="box-body">
								<div class="row">							
									
									<div class="col-md-4">
										<div class="form-group">
											<h5>Mission & Vision Text</h5>
											<div class="controls">
												<textarea class="textarea" name="mission" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
													{{ $all[0]['mission'] }}
												</textarea>
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									
									
								</div> <!-- End 4TH Row -->
								
							</div>
						</div>

						
						<div  class="box">
							<div class="box-header with-border">
								<h4>Feature Video</h4>
							</div>
							<div class="box-body">
								<div class="row">							
									<div class="col-md-4">
										<div class="form-group">
											<h5>Feature Video Title</h5>
											<div class="controls">
												<input type="text" name="video_title" value="{{ $all[0]['video_title'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>Feature Video Embed Code From Youtube</h5>
											<div class="controls">
												<input type="text" name="video_url" value="{{ $all[0]['video_url'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>Feature Video Description</h5>
											<div class="controls">
												<textarea class="textarea" name="video_description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
													{{ $all[0]['video_description'] }}
												</textarea>
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									
									
								</div> <!-- End 4TH Row -->
								
							</div>
						</div>

						
						<div  class="box">
							<div class="box-header with-border">
								<h4>Social Links</h4>
							</div>
							<div class="box-body">
								<div class="row">							
									<div class="col-md-4">
										<div class="form-group">
											<h5>Youtube Link <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_youtube" value="{{ $all[0]['school_youtube'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>Twitter Link <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_twitter" value="{{ $all[0]['school_twitter'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									<div class="col-md-4">
										<div class="form-group">
											<h5>Instagram Link <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_instagram" value="{{ $all[0]['school_instagram'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
									
									<div class="col-md-4">
										<div class="form-group">
											<h5>Facebook Link <span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="school_facebook" value="{{ $all[0]['school_facebook'] }}" class="form-control" required="" > 
											</div>		 
										</div>
									</div> <!-- End Col md 4 -->
								</div> <!-- End 4TH Row -->
								<div class="text-xs-right">
									<input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
								</div>
							</div>
						</div>


					</div>
				</div>
			</section>
		</form>
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
		$('#image_cover').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage_cover').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>



@endsection
