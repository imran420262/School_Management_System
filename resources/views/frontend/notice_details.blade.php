@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.details') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>@lang('Notice Details')</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="{{URL::route('notice')}}">Notices</a>
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
									
									<div class="text">Notice By: {{  $singleNotice[0]->created_by->name }}</div>
								</div>
								
								<div class="post-info-main">
									<div class="event-info">
										{{ date('d-M-y',strtotime($singleNotice[0]['notice_date'])) }}
									</div>
								</div>
								<div class="date-post" style="background-color: #d90429;">
									
									<div class="text"><a href="{{ asset('upload/notice_pdf'.'/'.$singleNotice[0]['notice_pdf']) }}" target="_blank">Download notice pdf</a></div>
								</div>

							</div>
					

							<h2>{{$singleNotice[0]['notice_name']}}</h2>
							{!! $singleNotice[0]['notice_description'] !!}
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
