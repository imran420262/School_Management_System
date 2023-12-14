@extends('frontend.layouts.master')
@section('pageTitle') @lang('site.menu_faq') @endsection

@section('pageBreadCrumb')
	<!-- page title -->
	<div class="page-title">
		<div class="grid-row">
			<h1>Notices</h1>
			<nav class="bread-crumb">
				<a href="{{URL::route('site')}}">Home</a>
				<i class="fa fa-long-arrow-right"></i>
				<a href="#">Notice</a>
			</nav>
		</div>
	</div>
	<!-- / page title -->
@endsection

@section('pageContent')
	<!-- content -->
	<div class="page-content">
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
				<main>
					<div class="grid-col grid-col-12">
						<section class="padding-top-none">
							<h2>Notices</h2>
							<!-- accordions -->
							<div class="accordions">
							@foreach($schoolNotice as $key=>$notice)
						
								<!-- content-title -->
								{{-- <div class="content-title active">{{ $notice['notice_name'] }}</div> --}}
							
									
									<h6><strong class="fs-18"> {{ $key+1 }}.</strong> {{  $notice['notice_name'] }} | Date {{ date('d-M-y',strtotime($notice['notice_date'])) }} | <a style="color: #ffb703" href="{{ route('notice.details',$notice->id) }}">View Notice</a> | <a style="color: #ffb703" href="{{ asset('upload/notice_pdf'.'/'.$notice->notice_pdf) }}" target="_blank">Click here to download notice pdf </a></h6>
								
								<!--/content-title -->
								<!-- accordions content -->
								<div class="content">
									content
								</div>
								<!--/accordions content -->
								@endforeach
							</div>
							<!-- accordions -->
						</section>
					</div>
				</main>

			</div>
		</div>
	</div>
	<!-- / content -->
@endsection
