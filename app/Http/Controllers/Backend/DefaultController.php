<?php

namespace App\Http\Controllers\Backend;

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

use App\Models\AssignSubject;
use App\Models\StudentMarks;
use App\Models\ExamType;
use App\Models\PublicMessage;
use App\Models\AssignTeacherSubject;

class DefaultController extends Controller
{
    public function GetSubject(Request $request){

		$user = auth()->user()->id;
		$userint = (int)$user;
    	$class_id = $request->class_id;
    	$group_id = $request->group_id;
    	$shift_id = $request->shift_id;
    	// $allData = AssignSubject::with(['school_subject'])->where('group_id',$group_id)->where('class_id',$class_id)->get();
        $allData = AssignTeacherSubject::with('school_group')->with('school_class')->with('school_shift')->with('assigned_subject')->where('teacher_id',$userint)->get();

		$shit = "shit";
    	return response()->json($allData);

    }


    public function GetStudents(Request $request){
    	$year_id = $request->year_id;
    	$class_id = $request->class_id;
    	$shift_id = $request->shift_id;
    	$group_id = $request->group_id;
    	$allData = AssignStudent::with(['student'])->where('shift_id',$shift_id)->where('group_id',$group_id)->where('year_id',$year_id)->where('class_id',$class_id)->get();
    	return response()->json($allData);

    }

	// public function FrontendClass(Request $request) {
		
	// 	$sid['shit'] = $request->shift;

	// 	return view('frontend.class',$sid);
	// }






}
 