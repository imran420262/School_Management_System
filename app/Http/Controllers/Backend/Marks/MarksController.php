<?php

namespace App\Http\Controllers\Backend\Marks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use DB;
use PDF;

use App\Models\StudentMarks;
use App\Models\ExamType;

class MarksController extends Controller
{

    public function MarksAdd(){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();
    	$data['exam_types'] = ExamType::all();

    	return view('backend.marks.marks_add',$data);

    }


    public function MarksStore(Request $request){

    	$studentcount = $request->student_id;
    	if ($studentcount) {
    		
    		for ($i=0; $i < count($request->student_id) ; $i++) { 
				// $checkMarks = StudentMarks::where('shift_id',$request->shift_id)->where('group_id',$request->group_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('assign_subject_id',$request->assign_subject_id)->where('exam_type_id',$request->exam_type_id)->get();
				$checkMarks = StudentMarks::where('id_no',$request->id_no[$i])->where('exam_type_id',$request->exam_type_id)->get();
				
				foreach ($checkMarks as $cm) {
					if($cm->id_no == $request->id_no[$i] && $cm->exam_type_id == $request->exam_type_id && $request->marks[$i] != ''){
					// StudentMarks::where('shift_id',$request->shift_id)->where('group_id',$request->group_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('assign_subject_id',$request->assign_subject_id)->where('exam_type_id',$request->exam_type_id)->where('student_id',$request->student_id[$i])->where('id_no',$request->id_no[$i])->where('marks',$request->marks[$i])->delete();
					StudentMarks::where('shift_id',$request->shift_id)->where('group_id',$request->group_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('assign_subject_id',$request->assign_subject_id)->where('exam_type_id',$request->exam_type_id)->where('id_no',$request->id_no[$i])->delete();

						// StudentMarks::where('id_no',$request->id_no[$i])->where('exam_type_id',$request->exam_type_id)->delete();
					}
				}
				
				


				if($request->marks[$i] != '') {
					$data = New StudentMarks();
					$data->shift_id = $request->shift_id;
					$data->group_id = $request->group_id;
					$data->year_id = $request->year_id;
					$data->class_id = $request->class_id;
					$data->assign_subject_id = $request->assign_subject_id;
					$data->exam_type_id = $request->exam_type_id;
					$data->student_id = $request->student_id[$i];
					$data->id_no = $request->id_no[$i];
					$data->marks = $request->marks[$i];
					$data->save();
				}

    		} // end for loop
    	}// end if conditon

			$notification = array(
    		'message' => 'Student Marks Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);
		// return $request->id_no[1];

    }// end method



    public function MarksEdit(){
    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
		$data['groups'] = StudentGroup::all();
    	$data['shifts'] = StudentShift::all();
    	$data['exam_types'] = ExamType::all();

    	return view('backend.marks.marks_edit',$data);
    }


    public function MarksEditGetStudents(Request $request){
		

    	$year_id = $request->year_id;
    	$class_id = $request->class_id;
		$group_id = $request->group_id;
		$shift_id = $request->shift_id;
    	$assign_subject_id = $request->assign_subject_id;
    	$exam_type_id = $request->exam_type_id;

    	$getStudent = StudentMarks::with(['student'])->where('shift_id',$shift_id)->where('group_id',$group_id)->where('year_id',$year_id)->where('class_id',$class_id)->where('assign_subject_id',$assign_subject_id)->where('exam_type_id',$exam_type_id)->get();

    	return response()->json($getStudent);

    }


    public function MarksUpdate(Request $request){

	StudentMarks::where('shift_id',$request->shift_id)->where('group_id',$request->group_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('assign_subject_id',$request->assign_subject_id)->where('exam_type_id',$request->exam_type_id)->delete();

        $studentcount = $request->student_id;
    	if ($studentcount) {
    		for ($i=0; $i <count($request->student_id) ; $i++) { 
    		$data = New StudentMarks();
    		$data->shift_id = $request->shift_id;
    		$data->group_id = $request->group_id;
    		$data->year_id = $request->year_id;
    		$data->class_id = $request->class_id;
    		$data->assign_subject_id = $request->assign_subject_id;
    		$data->exam_type_id = $request->exam_type_id;
    		$data->student_id = $request->student_id[$i];
    		$data->id_no = $request->id_no[$i];
    		$data->marks = $request->marks[$i];
    		$data->save();

    		} // end for loop
    	}// end if conditon

			$notification = array(
    		'message' => 'Student Marks Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);


    } // end marks







}
 