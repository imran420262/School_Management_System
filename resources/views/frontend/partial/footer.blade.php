<footer>
		<div class="grid-row">
			<div class="grid-col-row clear-fix">
				<section class="grid-col grid-col-4 footer-about">
					<h2 class="corner-radius">Contact Us</h2>
					<address>
						
						<p></p>
						<a href="tel:{{$school_details[0]['school_phone']}}" class="phone-number">{{$school_details[0]['school_phone']}}</a>
						<br />
						<a href="mailto:{{$school_details[0]['school_email']}}" class="email">
							<span class="">{{$school_details[0]['school_email']}}</span>
						</a>
						<br />
						{{-- <a href="{{URL::route('site.contact_us_view')}}" class="address">{{$siteInfo['address']}}</a> --}}
						<a href="#" class="address">{{$school_details[0]['school_address']}}</a>
						
						
					</address>

				</section>
				{{-- <section class="grid-col grid-col-4 footer-latest">
					<h2 class="corner-radius">Upcoming Event</h2>
					@if($schoolEvent)
					<article>
						<img src="{{asset('frontend/img/event.png')}}" alt>
						<h3>
							<a href="{{URL::route('event')}}">{{$schoolEvent[0]->event_name}}</a>
						</h3>
						<br>
						<div class="course-date">
							<div>
								<sub>{{ date('h:i A',strtotime($schoolEvent[0]['event_time'])) }}</sub>
							</div>
							<div>{{ date('d-M-y',strtotime($schoolEvent[0]['event_date'])) }}</div>
						</div>

					</article>
					@endif
				</section> --}}
				
				<section class="grid-col grid-col-4 footer-links">
					<h2 class="corner-radius">Help Links
						<i class="site"></i>
					</h2>
					<ul class="clear-fix">
						{{-- <li>
							<a href="#">FAQ)</a>
						</li>
						<li>
							<a href="#">Admission</a>
						</li>
						<li>
							<a href="#">@lang('site.menu_result')</a>
						</li> --}}
					</ul>
					<ul class="clear-fix">
						<li>
							{{-- <a href="{{URL::route('site.timeline_view')}}">@lang('site.menu_timeline')</a> --}}

						</li>
						<li>
							{{-- <a href="#">Gallery</a> --}}
						</li>

						<li>
							<a href="{{ route('contact') }}">Contact Us</a>
						</li>
						<li>
							<a href="{{ route('notice') }}">Notices</a>
						</li>
					</ul>
				</section>
				
				<section class="grid-col grid-col-4 footer-links">
					<h2 class="corner-radius">Help Links
						<i class="site"></i>
					</h2>

					<ul class="clear-fix">
					</ul>
				
					<ul class="clear-fix">

						<li>
							<a target="_blank" href="{{ $school_details[0]['school_facebook'] }}">Facebook</a>
						</li>
						<li>
							<a target="_blank" href="{{ $school_details[0]['school_twitter'] }}">Twitter</a>
						</li>
						<li>
							<a target="_blank" href="{{ $school_details[0]['school_instagram'] }}">Instagram</a>
						</li>
					</ul>
				</section>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="grid-row clear-fix">
				<div class="copyright">{{$school_details[0]['school_name']}}
					<span></span> Copyright
				</div>

				{{-- <div class="footer-social">
					<a target="_blank" href="@if($siteInfo['facebook']){{$siteInfo['facebook']}}@else #@endif" class="fa fa-facebook"></a>
					<a target="_blank" href="@if($siteInfo['instagram']){{$siteInfo['instagram']}}@else #@endif" class="fa fa-instagram"></a>
					<a target="_blank" href="@if($siteInfo['twitter']){{$siteInfo['twitter']}}@else #@endif" class="fa fa-twitter"></a>
					<a target="_blank" href="@if($siteInfo['youtube']){{$siteInfo['youtube']}}@else #@endif" class="fa fa-youtube"></a>
				</div> --}}

				<div class="maintainedby">Site maintain by
					<a href="#" class="site">NUB Final Project Group</a>
				</div>
			</div>
		</div>
	</footer>