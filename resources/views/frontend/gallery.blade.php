@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_gallery') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Gallery</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Gallery</a>
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
				<div class="isotope-container">
					<div class="isotope-header clear-fix">
						<h2 class="margin-none">Our Memories</h2>
						{{--<div class="select-wrapper">--}}
							{{--<select class="filter">--}}
								{{--<option value="*" selected>All</option>--}}
								{{--<option value=".classrooms">Classrooms</option>--}}
								{{--<option value=".students">Students</option>--}}
								{{--<option value=".library">Library</option>--}}
								{{--<option value=".teachers">Teachers</option>--}}
							{{--</select>--}}
						{{--</div>--}}

					</div>
					<div class="grid-col-row">
						<div class="isotope">
							@foreach($images as $image)
							<div class="item">
								<div class="picture">
									<div class="hover-effect"></div>
									<div class="link-cont">
										<a href="{{asset('upload/gallery/'.$image->name)}}" class="fancy fa fa-search"></a>
									</div>
									<img style="height: 300px; width: 400px" src="{{asset('upload/gallery/'.$image->name)}}" alt>
								</div>
							<p>{{ $image->description }}</p>

							</div>
							@endforeach

						</div>
					</div>
					<!-- pagination -->
					
					<!-- / pagination -->

				</div>
			</main>
		</div>
	</div>
	<!-- / content -->
@endsection
