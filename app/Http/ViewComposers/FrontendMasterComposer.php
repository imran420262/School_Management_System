<?php

namespace App\Http\ViewComposers;
use App\Event;
use App\Http\Helpers\AppHelper;
use App\SiteMeta;
use Illuminate\Contracts\View\View;
use App\Models\SchoolDetails;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentShift;
use App\Models\AssignStudent;
use App\Models\Designation;
use App\Models\PublicMessage;
use App\Models\EmployeeLeave;
use App\Models\AssignTeacherSubject;
use App\Models\SchoolEvent;
use App\Models\SchoolNotice;
use App\Models\SliderImage;
use App\Models\PrincipalMessage;
use App\Models\AdmissionForm;

use Illuminate\Support\Facades\Auth;
use DB;

class FrontendMasterComposer
{
    public function compose(View $view)
    {
        
        $t = SchoolDetails::all();        
        $view->with('school_details',$t);
        
        $si = SliderImage::all();
        $view->with('slider_images',$si);

        $allstudents = User::where('usertype','Student')->count();
        $view->with('students',$allstudents);

        $allteachers = User::where('designation_id',3)->count();
        $view->with('teachers',$allteachers);
        
        $assistantteachers = User::where('designation_id',2)->count();
        $view->with('assistantteachers',$assistantteachers);

        $schoolclass = StudentClass::all();
        $view->with('schoolclass',$schoolclass);

        $schoolshift = StudentShift::all();
        $view->with('schoolshift',$schoolshift);


        
        $studentnumber = AssignStudent::all();
        $view->with('snumber',$studentnumber);

        $Designation = Designation::all();
        $view->with('designation',$Designation);

        $users = User::where('designation_id','!=','NULL')->get();
        $view->with('allteacher',$users);

        $readed_publicmsg = PublicMessage::where('read','yes')->count();
        $view->with('readed_publicmsg',$readed_publicmsg);

        $unreaded_publicmsg = PublicMessage::where('read','no')->count();
        $view->with('unreaded_publicmsg',$unreaded_publicmsg);
        
        $pending_admission = AdmissionForm::where('status','pending')->count();
        $view->with('pending_admission',$pending_admission);

        $not_pending_admission = AdmissionForm::count();
        $npa =$not_pending_admission - $pending_admission;
        $view->with('not_pending_admission',$npa);

        $data = EmployeeLeave::orderBy('id','desc')->get();
        $view->with('empLeave',$data);



        if(Auth::check()) {
        $user = auth()->user()->id;
        $userint = (int)$user;
        $teachersubject = AssignTeacherSubject::with('school_group')->with('school_class')->with('school_shift')->with('assigned_subject')->where('teacher_id',$userint)->get();
        $view->with('teachersubject',$teachersubject);
        }

        $event = SchoolEvent::with(['updated_by'])->with(['created_by'])->get();
        $view->with('schoolEvent',$event);
        
        
        $notice = SchoolNotice::with(['updated_by'])->with(['created_by'])->orderBy('notice_date','DESC')->get();
        $view->with('schoolNotice',$notice);

        
        $events = schoolEvent::orderBy('event_date')->get()->groupBy(function($event) {
            return $event->event_date >= now() ? 'upcoming' : 'past';
        });
        $view->with('upcomingEvent',$events);


        $notice = SchoolNotice::with(['updated_by'])->with(['created_by'])->get();
        $view->with('noticeDetails',$notice);

        $pm = PrincipalMessage::all();
        $view->with('principle_msg',$pm);

        if(Auth::check()) {
            $xstudent = AssignStudent::with('student_class')->with('student_year')->with('group')->with('shift')->where('student_id',Auth::user()->id)->get();
            // $xstudent = AssignStudent::where('student_id',Auth::user()->id)->get();
            $view->with('xstudent',$xstudent);
        }
        


    }
}