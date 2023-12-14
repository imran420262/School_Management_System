@extends('frontend.layouts.master')

@section('pageTitle') @lang('site.menu_home') @endsection
@section('extraStyle')
	<link type="text/css" rel="stylesheet" href="{{ asset('/frontend/rs-plugin/css/settings.css') }}" />
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
@endsection
@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<nav class="bread-crumb">
				<marquee width="" direction="left" height="">
					Latest Notice: <a href="{{ route('notice.details',$schoolNotice[0]['id']) }}"> {{  $schoolNotice[0]['notice_name'] }}. Notice Date {{ date('d-M-y',strtotime($schoolNotice[0]['notice_date'])) }} </a>
					|| <a href="{{ route('notice.details',$schoolNotice[1]['id']) }}"> {{  $schoolNotice[1]['notice_name'] }}. Notice Date {{ date('d-M-y',strtotime($schoolNotice[1]['notice_date'])) }} </a>
					|| <a href="{{ route('notice.details',$schoolNotice[2]['id']) }}"> {{  $schoolNotice[1]['notice_name'] }}. Notice Date {{ date('d-M-y',strtotime($schoolNotice[2]['notice_date'])) }} </a>
					</marquee>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection
@section('pageContent')
	<!-- revolution slider -->
	
	<div class="tp-banner-container">
		<div class="tp-banner-slider">
			<ul>
				@foreach ($slider_images as $image)
					<li data-masterspeed="700">
						<img src="{{ asset('upload/slider_image/'.$image->name) }}" data-lazyload="lazyload" data-bgposition="left 20%"
							alt>
						<div class="tp-caption sl-content align-left" data-x="['left','center','center','center']" data-hoffset="20" data-y="center"
							data-voffset="0" data-width="['720px','600px','500px','300px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
							data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
							<div class="sl-title">Reputed School In Bangladesh</div>
							<p>Admission is going on</p>
							<a href="{{ route('admission.form') }}" class="cws-button border-radius">Apply Now
								<i class="fa fa-angle-double-right"></i>
							</a>
						</div>
					</li>
				@endforeach			
			</ul>
		</div>
	</div>
	<!-- / revolution slider -->
	<hr class="divider-color">
	<!-- content -->
	<div id="home" class="page-content padding-none">
		<section class="fullwidth-background padding-section">
			<div class="grid-row clear-fix">
				{{-- <h2 class="center-text">About Us</h2> --}}
				
					<div class="grid-col-row">
						<div class="grid-col grid-col-6">
							<h3>{{ $school_details[0]['about_title'] }}</h3>
							<p>{{ $school_details[0]['about_description'] }}</p>
						</div>
						<div class="grid-col grid-col-6">
							<h3>Mission & Vision </h3>
							<p>{{ $school_details[0]['about_description'] }}</p>
						</div>
					</div>
			</div>
			
			</div>
							
		</section>
		<hr class="divider-color" />
		<section class="fullwidth-background padding-section">
			
			<div class="grid-row clear-fix">
				<h2 class="center-text">Message From Principal</h2>
				
					<div class="grid-col-row">
						<div class="grid-col grid-col-12">
							{{-- <h3>{{ $school_details[0]['about_title'] }}</h3> --}}
							<img src="{{asset('upload/'.$principle_msg[0]['photo'])}}" alt style=" display: block; margin-left: auto; margin-right: auto; height: 200px;">
							
							<p>{{ $principle_msg[0]['message'] }}</p>
						</div>
					</div>
			
			</div>
							
		</section>
		<hr class="divider-color" />

		<!-- section -->
		<section class="padding-section">
			<div class="grid-row clear-fix">
				<div class="grid-col-row">
					<div class="grid-col grid-col-6">
						<div class="video-player">
							<iframe src="https://www.youtube.com/embed/{{ $school_details[0]['video_url'] }}" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="grid-col grid-col-6 clear-fix">
						<h2>{{ $school_details[0]['video_title'] }}</h2>
						<p>
							{{ $school_details[0]['video_description'] }}
						</p>
						{{-- @if($aboutContent->video_site_link) --}}
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="{{ $school_details[0]['school_youtube'] }}" class="cws-button bt-color-3 border-radius alt icon-right float-right">More Video
								<i class="fa fa-angle-right"></i>
							</a>
						{{-- @endif --}}
					</div>
				</div>
			</div>
		</section>
		<!-- / section -->

		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
				<img src="/frontend/img/parallax.png" alt="">

			</div>
			<div class="them-mask bg-color-1"></div>
			<div class="grid-row">
				<div class="grid-col-row clear-fix statistic">
					
					<div class="grid-col grid-col-4 alt">
						<div class="counter-block">
							<i class="flaticon-multiple"></i>
							<div class="counter" data-count="{{ $students }}">0</div>
							<div class="counter-name">Students</div>
						</div>
					</div>
					<div class="grid-col grid-col-4 alt">
						<div class="counter-block">
							<i class="sms-icon-group"></i>
							<div class="counter" data-count="{{ $teachers }}">0</div>
							<div class="counter-name">Teachers</div>
							</div>
						</div>
					<div class="grid-col grid-col-4 alt">
						<div class="counter-block">
							<i class="sms-icon-group"></i>
							<div class="counter" data-count="{{ $assistantteachers }}">0</div>
							<div class="counter-name">Assistant Teachers</div>
							</div>
						</div>
					</div>

						
				</div>
			</div>
		</div>

		<!-- / paralax section -->

		{{-- <hr class="divider-color" />
		<!-- / section -->
		<section class="fullwidth-background testimonial padding-section">
			<div class="grid-row">
				<h2 class="center-text">@lang('site.testimonials')</h2>
				<div class="owl-carousel testimonials-carousel">
					@foreach($testimonials as $test)
					<div class="gallery-item">
						<div class="quote-avatar-author clear-fix">
							<img src="@if($test->photo ){{ asset('storage/testimonials')}}/{{ $test->photo }} @else {{ asset('images/avatar.jpg')}} @endif" alt="">
							<div class="author-info">{{$test->writer}}</div>
						</div>
						<p>{{$test->comments}}</p>
					</div>
						@endforeach

				</div>
			</div>
		</section> --}}

		<!-- / paralax section -->
		{{-- <hr class="divider-color" />
		<!-- paralax section -->

		<!-- paralax section -->
		<!-- parallax section -->
		<div class="parallaxed">
			<div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
				<img src="{{asset('frontend/img/parallax.png')}}" alt="">
			</div>
			<div class="them-mask bg-color-4"></div>
			<div class="grid-row center-text">
				<div class="font-style-1 margin-none">@lang('site.get_in')</div>
				<div class="divider-mini"></div>
				<p class="parallax-text">@lang('site.drop_email')</p>
				<form id="subscribeFrom" class="subscribe" action="{{URL::route('site.subscribe')}}" method="POST" enctype="multipart/form-data" >
					@csrf
					<input type="email" name="email" size="40" required placeholder="@lang('site.write_email')" aria-required="true">
					<input type="submit" value="@lang('site.subscribe')">
				</form>
			</div>
		</div>
		<!-- parallax section --> --}}
	</div>
	<!-- / content -->

@endsection


@section('extraScript')
	<script src="{{ asset('/frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
@endsection


