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
				<a href="{{URL::route('event')}}">Events</a>
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
									
									<div class="time">{{ date('h:i A',strtotime($singleEvent[0]['event_time'])) }}</div>
								</div>
								<div class="post-info-main">
									<div class="event-info">
										{{ date('d-M-y',strtotime($singleEvent[0]['event_date'])) }}
									</div>
								</div>

							</div>
							{{-- @if($event->cover_photo) --}}
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="{{asset('upload/school_event/'.$singleEvent[0]['event_photo'])}}" class="fancy fa fa-search"></a>
									</div>
									<img style="max-height: 450px;" src="{{asset('upload/school_event/'.$singleEvent[0]['event_photo'])}}"  class="columns-col-12" alt>

								</div>
							{{-- @endif --}}
							{{-- @if($event->cover_video)
								<div class="video-player">
									{!! $event->cover_video !!}
								</div>
							@endif --}}

							<h2>{{$singleEvent[0]['event_name']}}</h2>
							{!! $singleEvent[0]['event_description'] !!}
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
