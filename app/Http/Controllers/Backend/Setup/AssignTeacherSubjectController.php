<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Models\StudentClass; 
use App\Models\AssignSubject;
use App\Models\AssignTeacherSubject;
use App\Models\StudentShift;
use App\Models\User;
use App\Models\Designation;

class AssignTeacherSubjectController extends Controller
{
    public function ViewAssignTeacherSubject(){
        // $data['allData'] = AssignSubject::all();
        //   $data['allData'] = AssignTeacherSubject::select('subject_id')->groupBy('subject_id')->get();
          $data['allData'] = AssignTeacherSubject::with('teachers')->with('school_shift')->with('assigned_subject')->get();
        //   $data['assignteacher'] = AssignTeacherSubject::all()
          return view('backend.setup.assign_teacher_subject.view_assign_teacher_subject',$data);
    } //End of ViewAssignTeacherSubject Method

    public function AddAssignTeacherSubject(){
    	$data['subjects'] = SchoolSubject::all();
    	$data['shifts'] = StudentShift::all();
    	$data['teachers'] = User::where('usertype','employee')->get();
    	$data['designations'] = Designation::all();
    	return view('backend.setup.assign_teacher_subject.add_assign_teacher_subject',$data);
    } //End of AddAssignTeacherSubject Method

    public function StoreAssignTeacherSubject(Request $request){

        $subjectCount = count($request->subject_id);
        if ($subjectCount !=NULL) {
            for ($i=0; $i <$subjectCount ; $i++) { 
                $assign_teachersubject = new AssignTeacherSubject();
                $assign_teachersubject->shift_id = $request->shift_id[$i];
                $assign_teachersubject->subject_id = $request->subject_id[$i];
                $assign_teachersubject->teacher_id = $request->teacher_id;
                $assign_teachersubject->save();

            } // End For Loop
        }// End If Condition

        $notification = array(
            'message' => 'Subject Assign Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('assign.teachersubject.view')->with($notification);

    }  // End of StoreAssignTeacherSubject Method

    public function DeleteAssignTeacherSubject($subject_id, $shift_id) {
        
        $data['allData'] = AssignTeacherSubject::where('subject_id',$subject_id)->where('shift_id',$shift_id)->delete();


        return redirect()->route('assign.teachersubject.view');
        // return $data;
    }

    public function GetTeacher(Request $request) {
        $designation_id = $request->designation_id;
    	// $allData = AssignTeacherSubject::with(['user'])->where('designation_id',$designation_id)->get();
    	// $allData = User::with(['u'])->where('designation_id',$designation_id)->get();
        $allData = User::where('designation_id',$designation_id)->get();
    	return response()->json($allData);
    } //end of GetTeacher Method
}
