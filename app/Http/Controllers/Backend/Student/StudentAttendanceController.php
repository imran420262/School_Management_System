<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Models\StudentClass; 
use App\Models\AssignSubject;
use App\Models\AssignTeacherSubject;
use App\Models\StudentShift;
use App\Models\StudentGroup;
use App\Models\StudentYear;
use App\Models\AssignStudent;
use App\Models\StudentAttendance;
use App\Models\User;
use App\Models\Designation;
use Illuminate\Support\Facades\Auth;
use PDF;


class StudentAttendanceController extends Controller
{
    public function AttendanceView() {

        $user = auth()->user()->id;
        $userint = (int)$user;
        // $data['subjects'] = AssignTeacherSubject::where('teacher_id',$userint)->get();
        // $data['subjects'] = AssignTeacherSubject::with('assigned_subject')->where('teacher_id',$userint)->get();
        // $data['shifts'] = AssignTeacherSubject::with('school_shift')->where('teacher_id',$userint)->get();
        // $data['groups'] = AssignTeacherSubject::with('teachers')->with('school_shift')where('teacher_id',$userint)->get();
        $data['allData'] = StudentAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
        $data['tdata'] = AssignTeacherSubject::with('school_group')->with('school_class')->with('school_shift')->with('assigned_subject')->where('teacher_id',$userint)->get();
        // $data['subjects'] = SchoolSubject::all();
    	// $data['shifts'] = StudentShift::all();
    	// $data['groups'] = StudentGroup::all();
    	// $data['classes'] = StudentClass::all();

        return view('backend.student.student_attendance.student_attendance_view',$data);
    
    }

    public function AttendanceAdd(Request $request) {


     
        $data['date'] = $request->date;
        $data['subject_id'] = $request->subject_id;
        $data['shift_id'] = $request->shift_id;

        $assignSubjectClasses = AssignSubject::where('subject_id',$request->subject_id)->get();
        $class_id = $assignSubjectClasses[0]['class_id'];
        $group_id = $assignSubjectClasses[0]['group_id'];

    

        $data['students'] = AssignStudent::where('shift_id',$request->shift_id)->where('group_id',$group_id)->where('class_id',$class_id)->with('student')->get();
        
        if ($request->input('action') == 'Add Attendance'){

            return view('backend.student.student_attendance.student_attendance_add',$data);
        }
        if ($request->input('action') == 'View Attendance'){
            $data['details'] = StudentAttendance::with('student')->where('date',$request->date)->get();

            return view('backend.student.student_attendance.student_attendance_edit',$data);
        }
        
        return $request->input('action') == 'Add Attendance';
    }

    public function AttendanceStore(Request $request) {

        StudentAttendance::where('subject_id',$request->subject_id)->where('shift_id',$request->shift_id)->where('date', date('Y-m-d', strtotime($request->date)))->delete();
    	$countstudent = count($request->student_id);
    	for ($i=0; $i <$countstudent; $i++) { 
    		$attend_status = 'attend_status'.$i;
    		$attend = new StudentAttendance();
            $attend->subject_id = $request->subject_id;
            $attend->shift_id = $request->shift_id;
    		$attend->date = date('Y-m-d',strtotime($request->date));
    		$attend->student_id = $request->student_id[$i];
    		$attend->student_school_id = $request->student_school_id[$i];
    		$attend->attend_status = $request->$attend_status;
    		$attend->save();
    	} // end For Loop

 		$notification = array(
    		'message' => 'Student Attendace Data Update Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('student.attendance.view')->with($notification);
    }

    public function GetShift(Request $request) {
        $subject_id = $request->subject_id;
    	$allData = AssignTeacherSubject::with(['school_shift'])->where('subject_id',$subject_id)->get();
    	return response()->json($allData);
    }

    // public function AttendanceEdit() {
    //     $data['editData'] = EmployeeAttendance::where('date',$date)->get();
    // 	$data['students'] = User::where('usertype','employee')->get();
    // 	return view('backend.employee.employee_attendance.employee_attendance_edit',$data);
    // }

    public function AttendanceDetails($date) {
        $data['details'] = StudentAttendance::where('date',$date)->get();
    	
        return view('backend.student.student_attendance.student_attendance_details',$data);
    }


    public function AttenReportGet(){
    	$user = auth()->user()->id;
        $userint = (int)$user;
        // $data['subjects'] = AssignTeacherSubject::where('teacher_id',$userint)->get();
        // $data['subjects'] = AssignTeacherSubject::with('assigned_subject')->where('teacher_id',$userint)->get();
        // $data['shifts'] = AssignTeacherSubject::with('school_shift')->where('teacher_id',$userint)->get();
        // $data['groups'] = AssignTeacherSubject::with('teachers')->with('school_shift')where('teacher_id',$userint)->get();
        $data['allData'] = StudentAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
        $data['tdata'] = AssignTeacherSubject::with('school_group')->with('school_class')->with('school_shift')->with('assigned_subject')->where('teacher_id',$userint)->get();
        // $data['subjects'] = SchoolSubject::all();
        return view('backend.report.attend_report_student.student_attend_report_view',$data);
    }


    public function AttenReportView(Request $request){


    	$student_id = $request->student_id_no;
        if ($student_id != '') {
    		$where[] = ['student_school_id',$student_id];
    	}
    	$date = date('Y-m', strtotime($request->date));
    	if ($date != '') {
    		$where[] = ['date','like',$date.'%'];
    	}

    $singleAttendance = studentAttendance::with(['student'])->where($where)->get();

    if ($singleAttendance == true) {
    	$data['allData'] = StudentAttendance::with(['student'])->where($where)->where('shift_id',$request->shift_id)->where('subject_id',$request->subject_id)->get();
    	// dd($data['allData']->toArray());

    	$data['absents'] = StudentAttendance::with(['student'])->where($where)->where('shift_id',$request->shift_id)->where('subject_id',$request->subject_id)->where('attend_status','Absent')->get()->count();

    	$data['leaves'] = StudentAttendance::with(['student'])->where($where)->where('shift_id',$request->shift_id)->where('subject_id',$request->subject_id)->where('attend_status','Leave')->get()->count();

    	$data['month'] = date('m-Y', strtotime($request->date));
        
        // $data['student_id'] = User::where('id_no',$request->student_id)->get();

    $pdf = PDF::loadView('backend.report.attend_report_student.student_attend_report_pdf', $data);
	$pdf->SetProtection(['copy', 'print'], '', 'pass');
	return $pdf->stream('document.pdf');

    }else{
    	
    	$notification = array(
    		'message' => 'Sorry These Criteria Donse not match',
    		'alert-type' => 'error'
    	);

    	return redirect()->back()->with($notification);
    }


    } // end Method 


}
