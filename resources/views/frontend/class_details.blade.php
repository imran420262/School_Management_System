@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.details') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Class Details</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="{{URL::route('class')}}">Class</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Class Details</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<div class="container clear-fix class-details">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
					<!-- main content -->
					<main>
						<section>
							{{-- <h2>Class: {{$class_details[0]['name']}}</h2> --}}
							{{-- <h2>{{$shift[0]['name']}}</h2> --}}
							<div class="picture">
								<div class="hover-effect"></div>
								<div class="link-cont">
									<a href="{{asset('/upload/school_cover.jpg')}}" class="fancy fa fa-search"></a>
								</div>
								<img src="{{asset('/upload/school_cover.jpg')}}"  alt>
							</div>
						</section>
					</main>
					<!-- / main content -->
				</div>
				<!-- sidebar -->
				<div class="grid-col grid-col-3 sidebar">
					<!-- widget -->
					<aside class="widget-course-details">
						<h2>Information</h2>
						<p>
						
						</p>
					</aside>
					<!-- / widget -->
					<br>
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-1">
						<div class="banner-icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="banner-text">
							<h4>{{ $shift[0]['name'] }}</h4>
						</div>
					</div>
					<!-- / banner -->
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-1">
						<div class="banner-icon">
							<i class="fa fa-clock-o"></i>
						</div>
						<div class="banner-text">
							<h4>Class Time</h4>
							<h4> {{ $shift[0]['class_time'] }}</h4>
						</div>
					</div>
					<!-- / banner -->
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-2">
						<div class="banner-icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="banner-text">
							<h4>Class: {{ $class_details[0]['name'] }}</h4>
							{{-- <p>{{ $total_student }}</p> --}}
						</div>
					</div>
					<!-- / banner -->
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-1">
						<div class="banner-icon">
							<i class="sms-icon-person"></i>
						</div>
						<div class="banner-text">
							<h4>Total Student</h4>
							<p>{{ $total_student }}</p>
						</div>
					</div>
					<!-- / banner -->
					<!-- banner -->
						{{-- <div class="banner-offer icon-right bg-color-2">
							<div class="banner-icon">
								<i class="fa fa-institution"></i>
							</div>
							<div class="banner-text">
								<h4>Room No</h4>
								<p>60</p>
							</div>
						</div> --}}
					<!-- / banner -->
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-3">
						<div class="banner-icon">
							<i class="fa fa-users"></i>
							{{-- <i class="fa fa-book-open-cover"></i> --}}
						</div>
						<div class="banner-text">
							<h4>Total Teacher</h4>
							<p>{{ $total_teacher }}</p>
						</div>
					</div>
					<!-- / banner -->
					<!-- banner -->
					<div class="banner-offer icon-right bg-color-4">
						<div class="banner-icon">
							<i class="fa fa-book"></i>
						</div>
						<div class="banner-text">
							<h4>Total Subject</h4>
							<p>{{ $total_subject }}</p>
							
						</div>
					</div>
					<!-- / banner -->

				</div>
				<!-- / sidebar -->
			</div>
			<div class="grid-col-row">
				<div class="grid-col grid-col-12">
					<!-- main content -->
					<main>
						<section>
							<!-- tabs -->
							<div class="tabs">
								<div class="block-tabs-btn clear-fix">
									<div class="tabs-btn active" data-tabs-id="tabs1">Teachers And Subjects</div>
									{{-- <div class="tabs-btn" data-tabs-id="tabs2">Teachers</div> --}}
								</div>
								<!-- tabs keeper -->
								<div class="tabs-keeper">
									<!-- tabs container -->
									
									<div class="container-tabs active" data-tabs-id="cont-tabs1">
										{{-- {{ $subject[0]['name'] }} --}}
										@foreach ($subjects as $subject)
										<div class="banner-offer icon-right bg-color-4">
											{{-- <div class="banner-icon">
											<i class="fa fa-book"></i>
											</div> --}}
											<div class="banner-text">
												@php
													$teacher = App\Models\assignTeacherSubject::where('shift_id',$shift[0]['id'])->where('subject_id',$subject->school_subject->id)->with('teachers')->distinct()->get();
													// $teacher = App\Models\assignTeacherSubject::get();
												@endphp
												
												@foreach ($teacher as $t )
												@if ($t)
														
													
												<h6>{{ $subject->school_subject->name }} | 
													<a href="{{ route('teacher.details',$t->teachers->id) }}">{{ $t->teachers->name }}</a>	
												</h6>
												@endif
												@endforeach
											</div>
										</div>
										<!-- / banner -->
						
										@endforeach
									</div>
									<!--/tabs container -->
									
								</div>
								<!--/tabs keeper -->
							</div>
							<!-- /tabs -->

						</section>
					</main>
					<!-- / main content -->
				</div>
			</div>
		</div>
	</div>
	<!-- / content -->
@endsection
