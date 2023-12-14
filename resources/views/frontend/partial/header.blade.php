<header>
	<!-- header top panel -->
	<div class="page-header-top">
		<div class="grid-row clear-fix">
			<address>
				<a href="tel:0172142022" class="phone-number">
					<i class="fa fa-phone"></i>{{ $school_details[0]['school_phone'] }}</a>
				
					<a href="imranhossain420262@gmail.com" class="email hidden-xs">
					<i class="fa fa-envelope-o"></i>
					<span class="">{{ $school_details[0]['school_email'] }}</span>
				</a>
			</address>
			<div class="header-top-panel">
				<a title="login" target="_blank" href="{{route('login')}}" class="fa fa-sign-in login-icon"></a>
				<div title="social links" id="top_social_links_wrapper">
					<div class="share-toggle-button">
						<i class="share-icon fa fa-share-alt"></i>
					</div>
					<div class="cws_social_links">
						<a target="_blank" href="{{ $school_details[0]['school_facebook'] }}" class="cws_social_link" title="Facebook">
							<i class="share-icon fa fa-facebook"></i>
						</a>
						<a target="_blank" href="{{ $school_details[0]['school_instagram'] }}" class="cws_social_link" title="Instagram">
							<i class="share-icon fa fa-instagram" style="transform: matrix(0, 0, 0, 0, 0, 0);"></i>
						</a>
						<a target="_blank" href="{{ $school_details[0]['school_twitter'] }}" class="cws_social_link" title="Twitter">
							<i class="share-icon fa fa-twitter"></i>
						</a>
						<a target="_blank" href="{{ $school_details[0]['school_youtube'] }}" class="cws_social_link" title="Youtube">
							<i class="share-icon fa fa-youtube"></i>
						</a>
					</div>

				</div>
			


			</div>
		</div>
	</div>
	<!-- / header top panel -->
	<!-- sticky menu -->
	<div class="sticky-wrapper">
		<div class="sticky-menu">
			<div class="grid-row clear-fix">
				<!-- logo -->
				<a href="{{ route('site') }}" class="logo">
					<img src="{{ asset('upload/'.$school_details[0]['image']) }}" alt>
					<h1>{{ $school_details[0]['school_name'] }}</h1>
				</a>
				<!-- / logo -->
				<nav class="main-nav">
					<ul class="clear-fix">
						<li>
							<a href="{{ route('site') }}" >Home</a>
						</li>
						<li>
							<a href="{{ route('class') }}"> Class </a>
						</li>
						<li>
							{{-- <a href="{{URL::route('site.teacher_profile')}}" >@lang('site.menu_teachers')</a> --}}
							<a href="{{ route('teacher') }}" >Teachers</a>
						</li>
						<li>
							{{-- <a href="{{URL::route('site.teacher_profile')}}" >@lang('site.menu_teachers')</a> --}}
							<a href="{{ route('gallery.view') }}" >Gallery</a>
						</li>
						<li>
							<a href="{{ route('event') }}">Events</a>

						</li>
						<li>
							<a href="{{ route('notice') }}">Notices</a>

						</li>
						{{-- <li>
							<a href="#" >Gallery</a>
						</li> --}}
						<li>
							<a href="{{ route('contact') }}">Contact Us</a>
						</li>
						{{-- <li>
							<a href="{{ route('contact') }}">Student/Guardian Portal</a>
						</li> --}}
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- sticky menu -->
	<!-- BEGIN Bread Crumb-->
	@yield('pageBreadCrumb')
	<!-- End Bread Crumb-->
</header>
    