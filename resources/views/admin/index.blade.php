@extends('admin.admin_master')
@section('admin')


@if (Auth::user()->usertype == 'Employee') <!--This section will only visible for Employee--> 
@foreach ($teachersubject as $subject)
{{ $subject->assigned_subject->name." ". $subject->school_shift->name }}<br><br>
@endforeach
@endif


<div class="content-wrapper">
    <div class="container-full">
    <!-- Main content -->
        <section class="content">
            @if (Auth::user()->usertype != 'Student')
            <h1 style="text-align: center;">{{ $school_details[0]['school_name'] }}</h1><br><br><br>  
            @endif

            @if (Auth::user()->usertype == 'Student')
            <h1 style="text-align: center;">Welcome to the {{ $school_details[0]['school_name'] }} student portal</h1>
            @endif
        
            <!--------------------------------------------------Admin Section------------------------------------------------------- -->
            @if (Auth::user()->usertype == 'Admin') <!--This section will only visible for admin--> 
            <div class="row">
                    <div class="col-xl-4   col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                
                                <div>                      
                                    <p class="text-mute mt-20 mb-0 font-size-16"><a href="{{ route('public.message.view') }}">Total Students</a></p>
                                    <h3 class="text-white mb-0 font-weight-500"><a href="{{ route('employee.registration.view') }}">{{ $students }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>              
                
                    <div class="col-xl-4   col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                
                                <div>  
                                    <p class="text-mute mt-20 mb-0 font-size-16"><a href="{{ route('public.message.view') }}">Total Teachers</a></p>
                                    <h3 class="text-white mb-0 font-weight-500"><a href="{{ route('profile.view') }}">{{ $teachers }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4   col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-school"></i>
                                </div>
                                
                                <div>  
                                    <p class="text-mute mt-20 mb-0 font-size-16"><a href="{{ route('public.message.view') }}">Class</a></p>
                                                        
                                    <h3 class="text-white mb-0 font-weight-500"><a href="{{ route('profile.view') }}">{{ count($schoolclass) }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>       
                    <div class="col-xl-4   col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-danger-light rounded w-60 h-60">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-message"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16"><a href="{{ route('public.message.view') }}">Message From Site Visitor</a></p>
                                    <h3 class="text-white mb-0 font-weight-500">{{ $readed_publicmsg }} <small class="text-success"><i class="fa fa-caret-up"></i>+ {{ $unreaded_publicmsg }}</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4   col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">							
                                <div class="icon bg-danger-light rounded w-60 h-60">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-message"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16"><a href="{{ route('admission.view') }}">Admission Request</a></p>
                                    <h3 class="text-white mb-0 font-weight-500">{{ $not_pending_admission }} <small class="text-success"><i class="fa fa-caret-up"></i>+ {{ $pending_admission }}</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> {{-- </div> --}}
        </section>


        <section class="content">
            <div class="row">    
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Employee Leave </h3>		  
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">SL</th>  
                                            <th>Name</th>
                                            <th>ID No </th>
                                            <th>Purpose </th>
                                            <th>Start Date</th>
                                            <th>End Date</th> 
                                            <th width="25%">Action</th>
                                        
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @foreach($empLeave as $key => $leave )
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td> {{ $leave['user']['name'] }}</td>
                                                <td> {{ $leave['user']['id_no'] }}</td>
                                                <td> {{ $leave['purpose']['name'] }}</td>
                                                <td> {{ $leave->start_date }}</td>
                                                <td> {{ $leave->end_date }}</td>
                                                <td>
                                                    @if ($leave['status'] == "Approved")
                                                        <a href="#" class="btn btn-success">Approved</a> by {{ $leave['status_action_by'] }}
                                                    @endif	
                                                    @if ($leave['status'] == "Rejected")
                                                        <a href="#" class="btn btn-warning">Rejected</a> by {{ $leave['status_action_by'] }}
                                                    @endif	
                                                    @if ($leave['status'] == "Pending")
                                                        <a href="{{ route('employee.leave.approve',$leave->id) }}" class="btn btn-info">Approve</a>
                                                        <a href="{{ route('employee.leave.reject',$leave->id) }}" class="btn btn-danger">Reject</a> {{-- to add confirmation add id=delete --}}
                                                    @endif	
                                                </td>
                                            </tr>
                                        @endforeach
                                    
                                    </tbody>
                                    <tfoot>                        
                                    </tfoot>
                                </table>
                            </div>
                        </div> <!-- /.box-body -->
                    </div> <!-- /.box -->
                </div> <!-- /.col12 -->
            </div> <!-- /.row -->
        </section> <!-- /.content -->
        @endif
        <!----------------------------------------End of admin section----------------------------------------------->

        <!------------------------------------------Employee Section--------------------------------------------------->
        <!-----------------------------------------This section will only visible for employee----------------------->

        


        @if (Auth::user()->usertype == 'employee') <!--This section will only visible for Employee--> 
            <h2>Your Subjects</h2>
            <section class="content">
                <div class="row">
                    @foreach ($teachersubject as $subject)
                        {{-- {{ $subject->assigned_subject->name." ". $subject->school_shift->name }}<br><br> --}}
                    
                        <div class="col-xl-3 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">							
                                    <div class="icon bg-primary-light rounded w-60 h-60">
                                        <i class="text-primary mr-0 font-size-24 mdi mdi-library-books"></i>
                                    </div>
                                    
                                    <div>                      
                                        <p class="text-mute mt-20 mb-0 font-size-16"><a href="#">{{ $subject->assigned_subject->name }}</a></p>
                                        <h3 class="text-white mb-0 font-weight-500"><a href="#">{{ $subject->school_shift->name }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </section>
            
        @endif


        @if (Auth::user()->usertype != 'Student')
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Notices</h3>
                            <a href="{{ route('site.notice.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add New Notice</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">SL</th>  
                                            <th>Notice Name</th> 
                                            <th width="10%">Notice Date</th> 
                                            <th>Notice Description</th> 
                                            <th>Notice Created By</th> 
                                            <th>Notice Updated By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($noticeDetails as $key => $notice )
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $notice['notice_name'] }}</td>
                                            <td>
                                                {{ date('d-M-y',strtotime($notice['notice_date'])) }}
                                            </td>
                                            <td>{{ $notice['notice_description'] }}</td>
                                            <td>{{ $notice['created_by']['name'] }}</td>
                                            <td>{{ $notice['updated_by']['name'] }}</td>
                                            {{-- <td>{{ $eventDetails[0]['created_by'] }}</td>				  --}}                    
                                        </tr>
                                        @endforeach                               
                                    </tbody>
                                    <tfoot></tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->     
                </div>
                <!-- /.col -->
            </div>
              <!-- /.row -->
        </Section>
        @endif

        <!----------------------------------------------End of employee section--------------------------------------->
        <!----------------------------------------------Student Section--------------------------------------->
        @if (Auth::user()->usertype == 'Student')
        <section class="content">
            <div class="row">
              <div class="col-12">
                <div class="box box-widget widget-user">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-black">
                    <h3 class="widget-user-username">User Name: {{ Auth::user()->name }}</h3>
                    {{-- <a href="{{ route('profile.edit') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Edit Profile</a> --}}
                    <h6 class="widget-user-desc">User Type: {{ Auth::user()->usertype }}</h6>
                    <h6 class="widget-user-desc">User Email: {{ Auth::user()->email }}</h6>
                    <h6 class="widget-user-desc">ID: {{ Auth::user()->id_no }}</h6>
                  </div>
                  <div class="widget-user-image">
                    <img class="rounded-circle" src="{{ (!empty(Auth::user()->image))? url('upload/student_images/'.Auth::user()->image): url('upload/no_image.jpg') }}" alt="User Avatar">
                  </div>
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="description-block">
                          <h5 class="description-header">Mobile No</h5>
                          <span class="description-text">{{ Auth::user()->mobile }}</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 br-1 bl-1">
                        <div class="description-block">
                          <h5 class="description-header">Address</h5>
                          <span class="description-text">{{ Auth::user()->address }}</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                          <!-- /.col -->
                          <div class="col-sm-4">
                            <div class="description-block">
                              <h5 class="description-header">Gender</h5>
                              <span class="description-text">{{ Auth::user()->gender }}</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
      
                          
                        </div>
                        <!-- /.row -->
                        
                      </div>
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="description-block">
                          <h5 class="description-header">Class</h5>
                          <span class="description-text">{{ $xstudent[0]->student_class->name }}</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 br-1 bl-1">
                        <div class="description-block">
                          <h5 class="description-header">Year</h5>
                          <span class="description-text">{{ $xstudent[0]->student_year->name }}</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                          <!-- /.col -->
                      <div class="col-sm-3 br-1 bl-1">
                        <div class="description-block">
                          <h5 class="description-header">Group</h5>
                          <span class="description-text">{{ $xstudent[0]->group->name }}</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                          <!-- /.col -->
                          <div class="col-sm-3">
                            <div class="description-block">
                              <h5 class="description-header">Shift</h5>
                              <span class="description-text">{{ $xstudent[0]->shift->name }}</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
      
                          
                        </div>
                        <!-- /.row -->
                        
                      </div>
                    </div>
      
                    
      
      
                     
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
      
              {{-- <div class="row">
              <div class="col-md-6 col-12">
                <div class="box box-outline-success">
                  <div class="box-header">
                  <h4 class="box-title"><strong>Basic Info</strong></h4>
                  <div class="box-tools pull-right">					
                    <ul class="box-controls">
                      <li><a class="box-btn-close" href="#"></a></li>
                    </ul>
                  </div>
                  </div>
        
                  <div class="box-body">
                  <b>Fathers Name: </b>{{ $user->fname }}<br>
                  <b>Fathers Mothers: </b>{{ $user->mname }}<br>
                  <b>Date Of Birth: </b>{{ $user->dob }}<br>
                  </div>
                </div>
                </div>
              <div class="col-md-6 col-12">
                <div class="box box-outline-success">
                  <div class="box-header">
                  <h4 class="box-title"><strong>Educational Info</strong></h4>
                  <div class="box-tools pull-right">					
                    <ul class="box-controls">
                      <li><a class="box-btn-close" href="#"></a></li>
                    </ul>
                  </div>
                  </div>
        
                  <div class="box-body">
                  <b>Educational Qualification: </b>
                  @if ($user->edu_qualification)
                  {{  $user->edu_qualification  }}
                      
                  @else
                    No Data abailable
                  @endif
                  <br>
                  <b>Educational Institute: </b>
                  @if ($user->edu_institute)
                  {{  $user->edu_institute  }}
                      
                  @else
                    No Data abailable
                  @endif
                  <br>
                  </div>
                </div>
                </div>
      
                <div class="col-md-6 col-12">
                  <div class="box box-outline-success">
                    <div class="box-header">
                    <h4 class="box-title"><strong>Social Links</strong></h4>
                    <div class="box-tools pull-right">					
                      <ul class="box-controls">
                        <li><a class="box-btn-close" href="#"></a></li>
                      </ul>
                    </div>
                    </div>
          
                    <div class="box-body">
                    <b>Facebook: </b> <a href="{{ $user->facebook_link }}">Chick to visit your facebook link</a><br>
                    <b>Instagram: </b> <a href="{{ $user->instagram_link }}">Chick to visit your instagram link</a><br>
                    <b>Twitter: </b> <a href="{{ $user->twitter_link }}">Chick to visit your twitter link</a><br>
                    </div>
                  </div>
                  </div>
      
                <div class="col-md-6 col-12">
                  <div class="box box-outline-success">
                    <div class="box-header">
                    <h4 class="box-title"><strong>Other Info</strong></h4>
                    <div class="box-tools pull-right">					
                      <ul class="box-controls">
                        <li><a class="box-btn-close" href="#"></a></li>
                      </ul>
                    </div>
                    </div>
          
                    <div class="box-body">
                    <b>Join Date: </b> {{ $user->join_date }}<br>
                    <b>Religion: </b> {{ $user->religion }}<br>
      
                    </div>
                  </div>
                  </div>
      
      
      
      
              </div> --}}
      
            </section>
            <!-- /.content -->
          
          </div>
        @endif

        <!----------------------------------------------End of student section--------------------------------------->
    </div>
</div>

<script type="text/javascript">
</script>
@endsection