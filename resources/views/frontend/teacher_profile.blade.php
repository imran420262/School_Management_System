@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.details') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>@lang('Event Details')</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="{{URL::route('teacher')}}">Teacher</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Details</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<div class="container clear-fix">
			<div class="grid-col-row">
				<main>
					<div class="blog-post">
						<article>
							<div class="post-info event">
								<div class="date-post">
									
									<div class="text">{{ $teacher[0]['name'] }}</div>
								</div>
								<div class="post-info-main">
									<div class="email">
										{{ $teacher[0]['email'] }}
									</div>
								</div>

							</div>
							{{-- @if($event->cover_photo) --}}
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="{{asset('upload/employee_images/'.$teacher[0]['image'])}}" class="fancy fa fa-search"></a>
									</div>
									<img style="max-height: 500px; width: 500px; display: block; margin-left: auto; margin-right: auto; width: 50%;" src="{{asset('upload/employee_images/'.$teacher[0]['image'])}}"  class="columns-col-12" alt>

								</div>
							{{-- @endif --}}
							{{-- @if($event->cover_video)
								<div class="video-player">
									{!! $event->cover_video !!}
								</div>
							@endif --}}

							<br><br><div style="margin: auto; width: 50%; border: 3px solid green; padding: 10px;">
							<h2>About {{ $teacher[0]['name'] }} </h2>
							<div class="card">
								<div class="card-body">
							<h3>Educational Qualification</h3>
							<p>{{ $teacher[0]['edu_qualification'] }} from {{ $teacher[0]['edu_institute'] }}
							</div>
							</div>

							<h3>Social Links:</h3>
							<p> Facebook: @if ($teacher[0]['facebook_link'] !='')<a target="_blank" href="{{ $teacher[0]['facebook_link'] }}" class="fa fa-facebook">Click to visit facebook profile</a>@endif </p>
							<p> Twitter: @if ($teacher[0]['twitter_link'] !='')<a target="_blank" href="{{ $teacher[0]['twitter_link'] }}" class="fa fa-twitter"> Click to visit twitter profile</a>@endif</p>
							<p> Instagram: @if ($teacher[0]['instagram_link'] !='')<a target="_blank" href="{{ $teacher[0]['instagram_link'] }}" class="fa fa-instagram">Click to visit instagram profile</a>@endif</p>
					
							{{-- <div class="post-info event"> --}}
								
								<div class="gird-row clear-fix">
									<div class="social-link">
											
										
										
									</div>
								</div>

							{{-- </div> --}}
							{{-- <h2>{{$teacher[0]['designation']}}</h2> --}}
							{{-- {!! $teacher[0]['gender'] !!} --}}
							<!--  gallery slider -->
							
							<!-- /  gallery slider -->
							<br>
							
						</article>
					</div>
				</main>
			</div>
		</div>
	</div>
	<!-- / content -->
@endsection
