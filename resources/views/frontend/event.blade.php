@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_events') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Events</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Events</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<div class="grid-row">
			<main>
				<div class=" grid-col-row clear-fix">

					{{-- {{ $schoolEvent }} --}}
					@foreach ($schoolEvent as $event)
					
					<div class="grid-col grid-col-4">
						<!-- blog post -->
						<div class="blog-post">
							<article>
								<div class="post-info event">
									<div class="date-post">
										<div class="time"> {{ date('h:i A',strtotime($event['event_time'])) }}</div>
									</div>
									<div class="post-info-main">
										<div class="event-info">
											{{ date('d-M-y',strtotime($event['event_date'])) }}
										</div>
									</div>

								</div>
								{{-- @if($event->cover_photo) --}}
								<div class="blog-media picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										{{-- <a href="{{URL::route('site.event_details',$event->slug)}}" class="cws-left fancy fa fa-link"></a> --}}
										<a href="#" class="cws-left fancy fa fa-link"></a>
									</div>

									<img src="{{asset('upload/school_event/'.$event->event_photo)}}"  class="columns-col-12" alt style="height: 200px">

								</div>
								{{-- @endif --}}
								{{-- @if($event->cover_video) --}}
								{{-- <div class="video-player">
									{!! $event->cover_video !!}
								</div> --}}
								{{-- @endif --}}
								<h3>{{ $event->event_name }}</h3>
								<p>
									{{-- {{ $event->event_description }} --}}
									{!! substr($event->event_description,0,80) !!}

									{{-- <a class="more" href="{{URL::route('site.event_details',$event->slug)}}">....<i class="fa fa-link"></i>@lang('site.more')</a> --}}
									
									<a class="more" href="{{ route('event.details',$event->id) }}">....<i class="fa fa-link"></i>More</a>
								</p>
								{{-- @if($event->tags) --}}
								{{-- <div class="tags-post"> --}}
									{{-- @foreach(explode(',', $event->tags) as $tag) --}}
									{{-- <a href="#" rel="tag">tag</a> --}}
									{{-- @endforeach --}}
								{{-- </div> --}}
									{{-- @endif --}}
							</article>
						</div>
						<!-- / blog post -->
					</div>
					@endforeach
			


				</div>

				<!-- pagination -->
				{{-- <div class="page-pagination clear-fix">

					<a title="prev"  @if($events->previousPageUrl()) href="{{$events->previousPageUrl()}}" @else href="#"  class="disabled" @endif>
						<i class="fa fa-angle-double-left"></i>
					</a>
					<a href="#" class="active">
						{{AppHelper::translateNumber($events->currentPage())}}
					</a>
					<a title="next" @if($events->nextPageUrl()) href="{{$events->nextPageUrl()}}" @else href="#"  class="disabled" @endif>
						<i class="fa fa-angle-double-right"></i>
					</a>


				</div> --}}
				<!-- / pagination -->
			</main>
		</div>

	</div>
	<!-- / content -->

@endsection
