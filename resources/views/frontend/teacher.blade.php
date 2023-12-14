@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_teachers') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Teachers</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="{{ URL::route('teacher') }}">Teacher</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<main>
			<div class="container">
				<section class="clear-fix">
					<h2>Meet Our Teachers</h2>

					@foreach ($allteacher as $teacher)
						
					
					<div class="grid-col-row">
							<div class="grid-col grid-col-6 margin-top-20">
								<div class="item-instructor bg-color-1">
									<a href="#" class="instructor-avatar">
										{{-- <img src="@if($profile->image){{asset('upload/employee_images')}} @else {{ asset('images/avatar.jpg')}} @endif" alt> --}}
										<img src="@if($teacher['image'] != ''){{asset('upload/employee_images/'.$teacher['image'])}} @else {{ asset('upload/avatar.jpg')}} @endif" alt>
										
									</a>
									<div class="info-box">
										<h3><a href="{{ route('teacher.details',$teacher['id']) }}">{{ $teacher['name'] }}</a></h3>
										<span class="instructor-profession">{{ $teacher['edu_qualification'] }}</span>
										<div class="divider"></div>
										<p>@if ($teacher['edu_qualification'] != '') {{ 'Got '.$teacher['edu_qualification'].' from '.$teacher['edu_institute'] }} @endif</p>
										<div class="social-link">
											
											@if ($teacher['facebook_link'] !='')<a target="_blank" href="{{ $teacher['facebook_link'] }}" class="fa fa-facebook"></a>@endif
											@if ($teacher['twitter_link'] !='')<a target="_blank" href="{{ $teacher['twitter_link'] }}" class="fa fa-twitter"></a>@endif
											@if ($teacher['instagram_link'] !='')<a target="_blank" href="{{ $teacher['instagram_link'] }}" class="fa fa-instagram"></a>@endif
											
										</div>
									</div>
								</div>
							</div>
					</div>
				
							@endforeach
				</section>
				<!-- pagination -->
				{{-- <div class="page-pagination clear-fix">

					<a title="prev"  @if($profiles->previousPageUrl()) href="{{$profiles->previousPageUrl()}}" @else href="#"  class="disabled" @endif>
						<i class="fa fa-angle-double-left"></i>
					</a>
					<a href="#" class="active">
						{{AppHelper::translateNumber($profiles->currentPage())}}
					</a>
					<a title="next" @if($profiles->nextPageUrl()) href="{{$profiles->nextPageUrl()}}" @else href="#"  class="disabled" @endif>
						<i class="fa fa-angle-double-right"></i>
					</a>


				</div> --}}
				<!-- / pagination -->
			</div>
		</main>
	</div>
	<!-- / content -->

@endsection
