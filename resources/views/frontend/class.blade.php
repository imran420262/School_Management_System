@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_class') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>CLASS</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">HOME</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">CLASS</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<div class="container">
			<!-- main content -->
			<main>
				<section>
					<div class="clear-fix">
						<div class="grid-col-row">

							@foreach ($schoolshift as $shift)
								
							
								@foreach ($schoolclass as $class)
									<div class="grid-col grid-col-4 margin-top-20">
										<!-- course item -->
										<div class="course-item">
											<div class="course-hover">
												<img src="{{asset('storage/class_profile/')}}"  alt>
												<div class="hover-bg bg-color-1"></div>
												<a href="#">@lang('site.details')</a>
											</div>
											<div class="course-name clear-fix">
												<span class="price">{{ $shift['name'] }}</span>
												<h3>
													<a href="{{ route('class.details',['class_details' => $class['id'], 'shift'=>$shift['id']]) }}">{{ 'Class: '.$class['name'] }}</a>
												</h3>
											</div>
											<div class="course-date bg-color-1 clear-fix">
												<div class="day">
													{{-- <i class="fa fa-users"></i> --}}

												</div>
												<div class="time">
													{{-- <i class="fa fa-clock-o"></i>Clock --}}
												</div>
												<div class="divider"></div>
												<div class="description trim-text" >This is class {{ $class['name'] }}, {{ $shift['name'] }}</div>
												
											</div>
											
										</div>
										<!-- / course item -->

										
									</div>
								@endforeach
							@endforeach	

						</div>

					</div>
				</section>

			</main>
			<!-- / main content -->
		</div>
	</div>
	<!-- / content -->

@endsection
