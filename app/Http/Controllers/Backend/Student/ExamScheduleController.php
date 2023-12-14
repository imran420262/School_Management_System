<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Models\StudentClass; 
use App\Models\ExamType; 
use App\Models\AssignSubject;
use App\Models\AssignTeacherSubject;
use App\Models\StudentShift;
use App\Models\User;
use App\Models\Designation;
use App\Models\ExamSchedule;
use Carbon\Carbon;


class ExamScheduleController extends Controller
{
    public function ViewExamDate() {
        $today = Carbon::now()->format('y-m-d');

        // $data['allData']= ExamSchedule::with('class_id')->with('exam_type_id')->get();
        $data['upcomingExam']= ExamSchedule::where('exam_date','>=',$today)->get();
        $data['pastExam']= ExamSchedule::where('exam_date','<',$today)->get();
        
        return view('backend.student.exam.student_exam_view',$data);
    }

    public function AddExamDate() {
        $today = Carbon::now()->format('Y-m-d');
        // $today2 = strtotime($today);
        // $today->toDateString();

        $data['today'] = $today;
        $data['classes'] = StudentClass::all();
    	$data['exams'] = ExamType::all();
    	return view('backend.student.exam.exam_schedule_add',$data);
    }

    public function StoreExamDate(Request $request) {
        $classCount = count($request->class_id);
        if ($classCount !=NULL) {
            for ($i=0; $i <$classCount ; $i++) { 
                $exam_schedule = new ExamSchedule();
                $exam_schedule->exam_type_id = $request->exam_type_id[$i];
                $exam_schedule->class_id = $request->class_id[$i];
                $exam_schedule->exam_date = $request->exam_date[$i];
                $exam_schedule->save();
             

            } // End For Loop
        }// End If Condition

        $notification = array(
            'message' => 'Exam Schedule Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.date.view')->with($notification);

        // return 'success';
    }

    public function DeleteExamDate($id) {
        ExamSchedule::where('id',$id)->delete();
        $notification = array(
            'message' => 'Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.date.view')->with($notification);
    }
}
