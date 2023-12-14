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
							<h3 class="box-title">School Details</h3>
						</div><!-- /.box -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School Name</h4>
										<p>{{ $all[0]['school_name'] }}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School Email</h4>
										<p>{{ $all[0]['school_email'] }}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School Address</h4>
										<p>{{ $all[0]['school_address'] }}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School Established</h4>
										<p>{{ $all[0]['school_est'] }}</p>
									</div>
								</div>
							
								
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School About Us Text</h4>
										<h5>{{ $all[0]['about_title'] }}</h5>
										<p>{{ $all[0]['about_description'] }}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>School Logo</h4>
										<img id="showImage" src="{{ url('upload/'.$all[0]['image']) }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
									</div>
								</div>								
							</div> <!-- End of row -->
						</div> <!--End of box body -->
						<div class="box-header with-border">
							<h3 class="box-title">School Social Links</h3>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-3">
									<div class="alert alert-info alert-dismissable">
										<a class="text-white font-weight-600 hover-primary mb-1 font-size-16" href='{{ $all[0]['school_facebook'] }}'>Facebook</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="alert alert-info alert-dismissable">
										<a class="text-white font-weight-600 hover-primary mb-1 font-size-16" href='{{ $all[0]['school_twitter'] }}'>Twitter</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="alert alert-info alert-dismissable">
										<a class="text-white font-weight-600 hover-primary mb-1 font-size-16" href='{{ $all[0]['school_instagram'] }}'>Instagram</a>
									</div>
								</div>
								<div class="col-md-3">
									<div class="alert alert-info alert-dismissable">
										<a class="text-white font-weight-600 hover-primary mb-1 font-size-16" href='{{ $all[0]['school_youtube'] }}'>Youtube</a>
									</div>
								</div>
							</div><!-- End of row -->
							<hr>
							<a href="{{ route('school.details.edit') }}" style="float: left;" class="btn btn-rounded btn-success mb-5">Edit Details</a>
						</div>
					</div><!-- End of box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Slider Images</h3>
						</div><!-- /.box -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>Slider Images</h4>
										{{-- <p>{{ $all[0]['school_name'] }}</p> --}}
										@foreach ($slider_image as $image)
										<img id="showImage" src="{{ url('upload/slider_image/'.$image->name) }}" style="height: 100px; border: 1px solid #000000;">
											
										@endforeach
										

									</div>
								</div>
							</div>
							<a href="{{ route('school.details.sliderimage.add') }}" style="float: left;" class="btn btn-rounded btn-success mb-5">Add/Remove Slider Image</a>
						</div> <!-- End of Box Body -->
					</div><!-- End of box -->
					
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Principals Message</h3>
						</div><!-- /.box -->
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="callout callout-primary">
										<h4>Image</h4>
										{{-- <p>{{ $all[0]['school_name'] }}</p> --}}
										
										<img id="showImage" src="{{ url('upload/'.$pm[0]['photo']) }}" style="height: 100px; border: 1px solid #000000;">
										<p>{{ $pm[0]['message'] }}</p>

									</div>
								</div>
							</div>
							<a href="{{ route('school.details.principalmsg.add') }}" style="float: left;" class="btn btn-rounded btn-success mb-5">Edit</a>
						</div> <!-- End of Box Body -->
					</div><!-- End of box -->


				</div><!--end of col-12-->
			</div><!-- /.row -->
		</section><!-- End of section -->
	</div><!-- End of container-full -->
</div><!-- End of content-wrapper -->

@endsection
