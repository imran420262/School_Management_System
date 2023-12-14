<?php

namespace App\Http\Controllers\Backend\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolEvent;
use App\Models\SchoolNotice;
use App\Models\User;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\AdmissionForm;
use App\Models\Gallery;
use App\Models\AssignStudent;
use App\Models\AssignSubject;
use App\Models\AssignTeacherSubject;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SiteManagementController extends Controller
{
    //---------------------------All functions for event--------------------------//
    public function ViewEvent() {

        $event['eventDetails'] = SchoolEvent::with(['updated_by'])->with(['created_by'])->get();
        return view('backend.event.view_event',$event);
    }

    public function AddEvent() {

        return view('backend.event.add_event');
    }

    public function StoreEvent(Request $request) {

        $school_event = new SchoolEvent();
        $school_event->event_name = $request->event_name;
        $school_event->event_date = $request->event_date;
        $school_event->event_time = $request->event_time;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/school_event'),$filename);
    		$school_event['event_photo'] = $filename;
    	}
        $school_event->event_description = $request->event_description;
        $school_event->created_by_user_id = auth()->user()->id;
      

        $school_event->save();

        $notification = array(
    		'message' => 'School details seccessfully updated',
    		'alert-type' => 'success'
    	);

        $event['eventDetails'] = SchoolEvent::all();
    
        // return view('backend.event.view_event');
        return redirect()->route('site.event.view');
    } //End of StoreEvent


    public function EditEvent($id) {

        $data['eventData'] = SchoolEvent::where('id',$id)->get();


        return view('backend.event.edit_event',$data);
    } //End of EditEvent

    public function UpdateEvent(Request $request, $id) {
        
        
        $school_event = SchoolEvent::find($id);
        $school_event->event_name = $request->event_name;
        $school_event->event_date = $request->event_date;
        $school_event->event_time = $request->event_time;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/school_event'),$filename);
    		$school_event['event_photo'] = $filename;
    	}
        $school_event->event_description = $request->event_description;
        $school_event->updated_by_user_id = auth()->user()->id;
      

        $school_event->save();

        $notification = array(
    		'message' => 'School details seccessfully updated',
    		'alert-type' => 'success'
    	);



        return redirect()->route('site.event.view');
    } //End of update Event

    public function DeleteEvent($id) {
        $event = SchoolEvent::find($id);
        $event->delete();

        return redirect()->route('site.event.view');
    } //End of delete event
//----------------------------------------------end of notice functions//


    //---------------------------All functions for notice--------------------------//
    public function ViewNotice() {

        $notice['noticeDetails'] = SchoolNotice::with(['updated_by'])->with(['created_by'])->get();
        return view('backend.notice.view_notice',$notice);
    }

    public function AddNotice() {

        return view('backend.notice.add_notice');
    }

    public function StoreNotice(Request $request) {

        $school_notice = new SchoolNotice();
        $school_notice->notice_name = $request->notice_name;
        $school_notice->notice_date = Carbon::now()->format('y-m-d');
        $school_notice->notice_description = $request->notice_description;

        $file = $request->file('notice_pdf');
        $filename = rand(00000,99999).'.'.$file->extension();
        $file->move(public_path('upload/notice_pdf'),$filename);
        $school_notice->notice_pdf = $filename;

        $school_notice->created_by_user_id = auth()->user()->id;
      

        $school_notice->save();

        $notification = array(
    		'message' => 'School details seccessfully updated',
    		'alert-type' => 'success'
    	);

        $notice['eventDetails'] = Schoolnotice::all();
    
        // return view('backend.event.view_event');
        return redirect()->route('site.notice.view');
    } //End of StoreEvent


    public function EditNotice($id) {

        $data['noticeData'] = SchoolNotice::where('id',$id)->get();


        return view('backend.notice.edit_notice',$data);
    } //End of EditEvent

    public function UpdateNotice(Request $request, $id) {
        
        
        $school_notice = SchoolNotice::find($id);
        $school_notice->notice_name = $request->notice_name;
        // $school_notice->notice_date = $request->notice_date;
       
        $school_notice->notice_description = $request->notice_description;

        if($request->file('notice_pdf')) {
            unlink(public_path('upload/notice_pdf').'/'.$school_notice->notice_pdf);
            $file = $request->file('notice_pdf');
            $filename = rand(00000,99999).'.'.$file->extension();
            $file->move(public_path('upload/notice_pdf'),$filename);
            $school_notice->notice_pdf = $filename;
        }

        $school_notice->updated_by_user_id = auth()->user()->id;
      

        $school_notice->save();

        $notification = array(
    		'message' => 'School details seccessfully updated',
    		'alert-type' => 'success'
    	);



        return redirect()->route('site.notice.view');
    } //End of update Event

    public function DeleteNotice($id) {
        $notice = SchoolNotice::find($id);
        unlink(public_path('upload/notice_pdf').'/'.$notice->notice_pdf);
        $notice->delete();

        return redirect()->route('site.notice.view');
    } //End of delete event
//----------------------------------------------end of notice functions//
    //function to pass data to website//
    public function EventDetails($id){
        $event['singleEvent'] = SchoolEvent::where('id',$id)->get();
        return view('frontend.event_details',$event);
    } //end of event details function  
    

    public function TeacherDetails($id) {
        $teacher['teacher'] = User::where('id',$id)->get();
        return view('frontend.teacher_profile',$teacher);

    } //End of teacher details function
    public function NoticeDetails($id){
        $notice['singleNotice'] = SchoolNotice::with('created_by')->where('id',$id)->get();
        return view('frontend.notice_details',$notice);
    } //end of event details function  

    public function AdmissionForm() {
        $data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();
        return view('frontend.admission_form', $data);
    }

    public function AdmissionStore(Request $request) {

        $af = new AdmissionForm();
        $af->name = $request->name;
        $af->email = $request->email;
        $af->mobile = $request->phone;
        $af->address = $request->address;
        $af->gender = $request->gender;
        $af->fname = $request->fname;
        $af->mname = $request->mname;
        $af->religion = $request->religion;
        $af->id_document_no = $request->id_document_no;
        $af->dob = $request->dob;

        $file = $request->file('profile_photo');
        $filename = rand(00000,99999).'.'.$file->extension();
        $file->move(public_path('upload/admission_student_images'),$filename);
        $af['image'] = $filename;
        
        $file2 = $request->file('student_document');
        $filename2 = rand(00000,99999).'.'.$file2->extension();
        $file2->move(public_path('upload/student_document'),$filename2);
        $af['student_document'] = $filename2;
        
        $af->class_id = $request->class_id;
        $af->group_id = $request->group_id;
        $af->shift_id = $request->shift_id;
        $af->save();
        return redirect()->back();
    }

    public function AdmissionView() {

        $data['admission_info'] = AdmissionForm::get();

        return view('backend.publicmsg.admission_view',$data);
    }

    public function AdmissionApprove($id){



        $data['admission_id'] = $id;
        $data['ai'] = AdmissionForm::find($id);
        $data['years'] = StudentYear::get();
        $data['classes'] = StudentClass::get();
        $data['groups'] = StudentGroup::get();
        $data['shifts'] = StudentShift::get();

        return view('backend.publicmsg.student_add',$data);
    }

    public function AdmissionReject($id) {

        
        $af = AdmissionForm::find($id);
        $af->action_by = Auth()->user()->name;
        $af->status = 'rejected';
        $af->save();
        return redirect()->back();
    }

    public function ViewGallery() {

        $data['images'] = Gallery::get();

        return view('frontend.gallery',$data);

    }

    public function ClassDetails($class_details,$shift) {

        $data['count_student'] = AssignStudent::Where('class_id',$class_details)->where('shift_id',$shift)->count();

        // $shift_id = $class_shift->shift;
        // $class_id = $class_shift->class_details;

    

        $data['total_student'] = AssignStudent::where('class_id',$class_details)->where('shift_id',$shift)->count();
        $data['total_teacher'] = AssignTeacherSubject::where('shift_id',$shift)->count();
        $data['total_teacher'] = AssignTeacherSubject::where('shift_id',$shift)->count();
        $data['subjects'] =  AssignSubject::where('class_id',$class_details)->get();

        // $teacher = 

        // foreach($sub as $subject){
        //     $teacher = AssignTeacherSubject::where('subject_id', $sub->id);
        // }

        // $data['teachers'] = AssignTeacherSubject
        $data['total_subject'] = AssignSubject::where('class_id',$class_details)->count();
        // $data['shift'] = AssignStudent::Where('id',$shift)->get();
        $data['shift'] = StudentShift::Where('id',$shift)->get();
        $data['class_details'] = StudentClass::where('id',$class_details)->get();
        
        
        return view('frontend.class_details',$data);
    }
}
