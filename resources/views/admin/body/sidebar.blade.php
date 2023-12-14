@php
  $prefix = Request::route()->getprefix();
  $route = Route::current()->getName();
@endphp


<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">	
    <div class="user-profile">
      <div class="ulogo">
        <a href="{{ route('dashboard') }}">
			<!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="backend/images/logo-dark.png" alt="">
              @if(Auth::user()->usertype == 'Admin')
						  <h3><b>School</b> Admin Panel</h3>
              
              @endif
              @if(Auth::user()->usertype == 'employee')
						  <h3><b>School</b> Teacher Panel</h3>
              
              @endif
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href="{{ route('dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
        
        @if(Auth::user()->role == 'Admin')
        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'user.view')?'active':'' }}"><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
            <li class="{{ ($route == 'users.add')?'active':'' }}"><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li> 
        @endif
		  
        <li class="treeview {{ ($prefix == '/profiles')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            @if (Auth::user()->usertype != 'Student')
            <li class="{{ ($route == 'profile.view')?'active':'' }}"><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
              
            @endif
            <li class="{{ ($route == 'password.view')?'active':'' }}"><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>
		
        @if(Auth::user()->usertype == 'Admin')
          <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
            <a href="#">
              <i data-feather="settings"></i> <span>Setup Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ ($route == 'student.class.view')?'active':'' }}"><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a></li>
              <li class="{{ ($route == 'assign.teachersubject.view')?'active':'' }}"><a href="{{ route('assign.teachersubject.view') }}"><i class="ti-more"></i>Assign Subject To Teacher</a></li>
              <li class="{{ ($route == 'student.year.view')?'active':'' }}"><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a></li>
              <li class="{{ ($route == 'student.group.view')?'active':'' }}"><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
              <li class="{{ ($route == 'student.shift.view')?'active':'' }}"><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
              <li class="{{ ($route == 'fee.category.view')?'active':'' }}"><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
              <li class="{{ ($route == 'fee.amount.view')?'active':'' }}"><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
              <li class="{{ ($route == 'exam.type.view')?'active':'' }}"><a href="{{ route('exam.type.view') }}"><i class="ti-more"></i>Exam Type</a></li>
              <li class="{{ ($route == 'school.subject.view')?'active':'' }}"><a href="{{ route('school.subject.view') }}"><i class="ti-more"></i>School Subject</a></li>
              <li class="{{ ($route == 'assign.subject.view')?'active':'' }}"><a href="{{ route('assign.subject.view') }}"><i class="ti-more"></i>Assign Subject</a></li>
              <li class="{{ ($route == 'designation.view')?'active':'' }}"><a href="{{ route('designation.view') }}"><i class="ti-more"></i>Designation</a></li>

            </ul>
          </li>
          @endif


        @if(Auth::user()->usertype != 'Student')
        <li class="treeview {{ ($prefix == '/students')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Student Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        @endif

          <ul class="treeview-menu">
            @if(Auth::user()->usertype == 'employee')
              <li class="{{ ($route == 'student.attendance.view')?'active':'' }}"><a href="{{ route('student.attendance.view') }}"><i class="ti-more"></i>Student Attendance</a></li>
            <li class="{{ ($route == 'student.result.view')?'active':'' }}"><a href="{{ route('student.result.view') }}"><i class="ti-more"></i>Student Result</a></li>         
            <li class="{{ ($route == 'student.report.attendance.get')?'active':'' }}"><a href="{{ route('student.report.attendance.get') }}"><i class="ti-more"></i>Attendance Report</a></li>         

              @endif
            
            @if(Auth::user()->usertype == 'Admin')
              <li class="{{ ($route == 'student.registration.view')?'active':'' }}"><a href="{{ route('student.registration.view') }}"><i class="ti-more"></i>Student Registration</a></li>
              <li class="{{ ($route == 'roll.generate.view')?'active':'' }}"><a href="{{ route('roll.generate.view') }}"><i class="ti-more"></i>Roll Generate</a></li>
              {{-- <li class="{{ ($route == 'registration.fee.view')?'active':'' }}"><a href="{{ route('registration.fee.view') }}"><i class="ti-more"></i>Registration Fee</a></li>
              <li class="{{ ($route == 'monthly.fee.view')?'active':'' }}"><a href="{{ route('monthly.fee.view') }}"><i class="ti-more"></i>Monthly Fee</a></li>
              <li class="{{ ($route == 'exam.fee.view')?'active':'' }}"><a href="{{ route('exam.fee.view') }}"><i class="ti-more"></i>Exam Fee</a></li> --}}
              <li class="{{ ($route == 'exam.date.view')?'active':'' }}"><a href="{{ route('exam.date.view') }}"><i class="ti-more"></i>Exam Date</a></li>
            @endif
          </ul>
        </li>

        @if(Auth::user()->usertype == 'Admin')
        <li class="treeview {{ ($prefix == '/employees')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Employee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'employee.registration.view')?'active':'' }}"><a href="{{ route('employee.registration.view') }}"><i class="ti-more"></i>Employee Registration</a></li>    
            <li class="{{ ($route == 'employee.salary.view')?'active':'' }}"><a href="{{ route('employee.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>     
            <li class="{{ ($route == 'employee.leave.view')?'active':'' }}"><a href="{{ route('employee.leave.view') }}"><i class="ti-more"></i>Employee Leave</a></li>    
            <li class="{{ ($route == 'employee.attendance.view')?'active':'' }}"><a href="{{ route('employee.attendance.view') }}"><i class="ti-more"></i>Employee Attendance</a></li>    
            <li class="{{ ($route == 'employee.monthly.salary')?'active':'' }}"><a href="{{ route('employee.monthly.salary') }}"><i class="ti-more"></i>Employee Monthly Salary</a></li>    
          </ul>
        </li>
        @endif


        @if(Auth::user()->usertype == 'employee')
          <li class="treeview {{ ($prefix == '/employees')?'active':'' }}">
            <a href="#">
              <i data-feather="menu"></i> <span>Leave Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ ($route == 'employee.leave.request.view')?'active':'' }}"><a href="{{ route('employee.leave.request.view') }}"><i class="ti-more"></i>Request For Leave</a></li>    
              {{-- <li class=""><a href="{{ route('employee.leave.request.view') }}"><i class="ti-more"></i>Leave status</a></li>     --}}
              
            </ul>
          </li>
         @endif

        
         @if (Auth::user()->usertype == 'employee')           
        <li class="treeview {{ ($prefix == '/marks')?'active':'' }}">
          <a href="#">
            <i data-feather="folder"></i> <span>Marks Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'marks.entry.add')?'active':'' }}"><a href="{{ route('marks.entry.add') }}"><i class="ti-more"></i>Marks Entry</a></li>    
            <li class="{{ ($route == 'marks.entry.edit')?'active':'' }}"><a href="{{ route('marks.entry.edit') }}"><i class="ti-more"></i>Marks Edit</a></li>    
            <li class="{{ ($route == 'marks.entry.grade')?'active':'' }}"><a href="{{ route('marks.entry.grade') }}"><i class="ti-more"></i>Marks Grade</a></li>    
          </ul>
        </li>
        @endif


        @if(Auth::user()->usertype == 'Admin')
        <li class="treeview {{ ($prefix == '/accounts')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Fee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'student.fee.view')?'active':'' }}"><a href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Student Fee History</a></li>     
            <li class="{{ ($route == 'student.fee.add')?'active':'' }}"><a href="{{ route('student.fee.add') }}"><i class="ti-more"></i>Add Student Fee</a></li>     
            <li class="{{ ($route == 'student.fee.view2')?'active':'' }}"><a href="{{ route('student.fee.view2') }}"><i class="ti-more"></i>View Student Fee</a></li>     
            <li class="{{ ($route == 'account.salary.view')?'active':'' }}"><a href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee Salary</a></li>     
            <li class="{{ ($route == 'other.cost.view')?'active':'' }}"><a href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>     
          </ul>
        </li>
        @endif
       
        @if (Auth::user()->usertype != 'Student')
        <li class="treeview {{ ($prefix == '/site')?'active':'' }}">
          <a href="#">
            <i data-feather="link"></i> <span>Site Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if(Auth::user()->usertype == 'Admin')
            <li class="{{ ($route == 'school.details.view')?'active':'' }}"><a href="{{ route('school.details.view') }}"><i class="ti-more"></i>School Details</a></li>
            <li class="{{ ($route == 'gallery.image.view')?'active':'' }}"><a href="{{ route('gallery.image.view') }}"><i class="ti-more"></i>Gallery</a></li>
            @endif
            <li class="{{ ($route == 'site.event.view')?'active':'' }}"><a href="{{ route('site.event.view') }}"><i class="ti-more"></i>Events</a></li>
            <li class="{{ ($route == 'site.notice.view')?'active':'' }}"><a href="{{ route('site.notice.view') }}"><i class="ti-more"></i>Notice</a></li>

            
          </ul>
        </li>
        @endif
		
        		  
        @if(Auth::user()->usertype == 'Admin')
        
        <li class="header nav-small-cap">Report Interface</li>
		  
        <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
          <a href="#">
            <i data-feather="layers"></i> <span>Reports Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'monthly.profit.view')?'active':'' }}"><a href="{{ route('monthly.profit.view') }}"><i class="ti-more"></i>Monthly-Yearly Revenue</a></li>         
            <li class="{{ ($route == 'marksheet.generate.view')?'active':'' }}"><a href="{{ route('marksheet.generate.view') }}"><i class="ti-more"></i>MarkSheet Generate</a></li>         
            <li class="{{ ($route == 'attendance.report.view')?'active':'' }}"><a href="{{ route('attendance.report.view') }}"><i class="ti-more"></i>Employee Attendance Report</a></li>         
            {{-- <li class="{{ ($route == 'student.idcard.view')?'active':'' }}"><a href="{{ route('student.idcard.view') }}"><i class="ti-more"></i>Student ID Card</a></li>          --}}
          </ul>
        </li>
        @endif

        
		  
        @if (Auth::user()->usertype == 'Student')
        <li class="treeview {{ ($prefix == '/reports')?'active':'' }}">
          <a href="#">
            <i data-feather="layers"></i> <span>Academic</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'student.financial.info')?'active':'' }}"><a href="{{ route('student.financial.info') }}"><i class="ti-more"></i>Financial Information</a></li>         
            <li class="{{ ($route == 'student.result.info.view')?'active':'' }}"><a href="{{ route('student.result.info.view') }}"><i class="ti-more"></i>Result</a></li>         
          </ul>
        </li>
        @endif

        

        
		
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		
	</div>
  </aside>