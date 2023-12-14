@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<section class="content">
			<!-- Basic Forms -->
			<div class="box">
				<div class="box-header with-border">
					<h4 class="box-title">Add New Notice</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col">
							<form method="post" action="{{ route('site.notice.store') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-12">	 
										<div class="form-group">
											<h5>Notice Title<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="text" name="notice_name" required class="form-control" > 		
											</div>

											<h5>Notice PDF</h5>
											<div class="controls">
											<input type="file" accept="application/pdf" name="notice_pdf" aria-invalid="false" aria-required="true"><br>
											</div>
											
											{{-- <h5>Notice Date<span class="text-danger">*</span></h5>
											<div class="controls">
												<input type="date" value="{{ date('m-d-y',strtotime(\Carbon\Carbon::now())) }}" name="notice_date" required class="form-control" > 		
											</div> --}}
											
										
											
											
									   
									   
									   
											
											<h5>Notice Description <span class="text-danger">*</span></h5>
											<div class="controls">
												
											<textarea class="textarea" name="notice_description" placeholder="Please Enter Notice Description"
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
