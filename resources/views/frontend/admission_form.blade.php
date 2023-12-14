@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_contact_us') @endsection

@section('extraStyle')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
		  crossorigin="" />
@endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Admission Form</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Admission Form</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<!-- contact form section -->
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-8">
					<section>
						<h2>Admission Form</h2>
						<div class="widget-contact-form">
							<!-- contact-form -->
							<div class="info-boxes error-message alert-boxes error-alert" id="feedback-form-errors">
								<strong>Attention!</strong>
								<div class="message"></div>
							</div>
							{{-- <div class="email_server_responce"></div> --}}
							{{-- <form action="{{route('admission.store')}}" method="post" enctype="multipart/form-data" class="supportForm alt clear-fix"> --}}
							<form action="{{route('admission.store')}}" method="post" enctype="multipart/form-data" class="Form alt clear-fix">
								@csrf
								<input type="text" name="name" value="" size="40" placeholder="Your name" aria-invalid="false" aria-required="true">
								<input type="text" name="email" value="" size="40" placeholder="Your Email" aria-required="true">
								<input type="text" name="fname" value="" size="40" placeholder="Your fathers name" aria-invalid="false" aria-required="true">
								<input type="text" name="mname" value="" size="40" placeholder="Your mothers name" aria-invalid="false" aria-required="true">
								<input type="text" name="phone" value="" size="40" placeholder="Your phone" aria-required="true">
								<input type="text" name="address" value="" size="40" placeholder="Your address" aria-invalid="false" aria-required="true">
								
								<select name="gender" id="gender" aria-invalid="false" aria-required="true">
								<option value="" selected="" disabled="">Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								</select><br>

								<select name="religion" id="religion" aria-invalid="false" aria-required="true">
								<option value="" selected="" disabled="">Religion</option>
								<option value="Islam">Islam</option>
								<option value="Hindu">Hindu</option>
								<option value="Christan">Christan</option>
								</select><br>

								<input type="text" name="id_document_no" value="" size="40" placeholder="Nid/Birth Registration No" aria-invalid="false" aria-required="true">


								<h5>Date of birth</h5>
								<input type="date" name="dob" aria-invalid="false" aria-required="true"><br>

								<h5>Profile Photo</h5>
								<input type="file" accept="image/png, image/gif, image/jpeg, image/jpg" name="profile_photo" aria-invalid="false" aria-required="true"><br>
								
								<h5>Upload Previous all Educational Certificate pdf format</h5>
								<p>You can use adobe scan to create single pdf with multiple certificate</p>
								<input type="file" accept="application/pdf" name="student_document" aria-invalid="false" aria-required="true"><br>
								
								
								
								
								<select name="class_id" id="class_id" aria-invalid="false" aria-required="true">
									<option value="" selected="" disabled="">Class</option>
									@foreach($classes as $class)
										<option value="{{ $class->id }}">{{ $class->name }}</option>
									@endforeach
								</select><br>
								
								<select name="group_id" id="group_id" aria-invalid="false" aria-required="true">
									<option value="" selected="" disabled="">Group</option>
									@foreach($groups as $group)
										<option value="{{ $group->id }}">{{ $group->name }}</option>
									@endforeach
								</select><br>

								<select name="shift_id" id="shift_id" aria-invalid="false" aria-required="true">
									<option value="" selected="" disabled="">Shift</option>
										@foreach($shifts as $shift)
											<option value="{{ $shift->id }}">{{ $shift->name }}</option>
										@endforeach
								</select><br>
						
								<button type="submit" class="cws-button border-radius alt">Submit</button>
								{{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
							</form>
							<!--/contact-form -->
						</div>
					</section>
				</div>
				
		</div>
		<!-- / contact form section -->
	</div>
	<!-- / content -->
@endsection
