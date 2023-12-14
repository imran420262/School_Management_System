
  <header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30" style="{{ (Auth::user()->theme == 'light')?'background-color: rgb(216, 211, 211); color:black;':'' }}">

		
		
      <!-- Sidebar toggle button-->
	  <div>
		  <ul class="nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu" role="button" style="{{ (Auth::user()->theme == 'light')?'color: black':'' }}">
					<i class="nav-link-icon mdi mdi-menu"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen" style="{{ (Auth::user()->theme == 'light')?'color: black':'' }}">
					<i class="nav-link-icon mdi mdi-crop-free"></i>
			    </a>
			</li>			
			{{-- <li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-check-box"></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
					<i class="ti-calendar"></i>
			    </a>
			</li> --}}
		  </ul>
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      {{-- <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			 --}}
		  <!-- Notifications -->
		  {{-- <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="ti-bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li> --}}

			  {{-- <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	 --}}
		  
		  @php
			  $user = DB::table('users')->where('id',Auth::user()->id)->first()
		  @endphp


	      <!-- User Account-->
          <li class="dropdown user user-menu">	
			<a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
				@if (Auth::user()->usertype == "Student")
				<img src="{{ (!empty($user->image))? url('upload/student_images/'.$user->image): url('upload/no_image.jpg') }}" alt="">
				@else
				<img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}" alt="">
				@endif
				
			</a>
			<ul class="dropdown-menu animated flipInX">
			  <li class="user-body">

				@if (Auth::user()->usertype != 'Student')
				<a class="dropdown-item" href="{{ route('profile.view') }}"><i class="ti-user text-muted mr-2"></i> Profile</a>	
				@endif
				 <a class="dropdown-item" href="{{ route('site') }}"><i class="ti-home text-muted mr-2"></i> Visit site</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ti-lock text-muted mr-2"></i> Logout</a>
				 <a class="dropdown-item" href="{{ route('theme.switch') }}"><i class="ti-wand text-muted mr-2"></i> {{ (Auth::user()->theme == 'light')?'Switch to Dark theme':'Switch to light theme' }}</a>
			  </li>
			</ul>
          </li>	
		  
			
        </ul>
      </div>
    </nav>
  </header>