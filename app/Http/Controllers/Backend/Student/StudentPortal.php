<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use App\Models\AccountStudentFee;
use App\Models\AssignStudent;
use App\Models\StudentMarks;
use App\Models\MarksGrade;
use App\Models\FeeCategoryAmount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ExamType;
use PDF;
// use GuzzleHttp\Psr7\Request;

class StudentPortal extends Controller
{
    //______________________________________________________________Student Financial Info____________________________________________________
    public function FinancialInfo() {
        $data['allData'] = AccountStudentFee::where('student_id',Auth::user()->id)->orderBy('date','desc')->get();

        $monthly_fee_paid = Auth::user()->total_monthly_fee_paid;
        $exam_fee_paid = Auth::user()->total_exam_fee_paid;
        $reg_fee_paid = Auth::user()->total_registration_fee_paid;

        $data['monthly_fee_paid'] = $monthly_fee_paid;
        $data['exam_fee_paid'] = $exam_fee_paid;
        $data['reg_fee_paid'] = $reg_fee_paid;


        //Monthly Fee Code
        // $discount_student = DiscountStudent::where('assign_student_id',Auth::user()->id)->get();
        $student_info = AssignStudent::with('discount')->with('student_class')->where('student_id',Auth::user()->id)->first();
        $discount = $student_info->discount->discount;
        $class = $student_info->student_class->id;

            // 1 = Registration fee
			// 2 = Monthly fee
			// 3 = Exam Fee 

        $reg_date = strtotime(Auth::user()->join_date);
        $current_date = strtotime(date('Y-m-d',time()));
        $months = 1;
        while(($reg_date = strtotime('+1 MONTH', $reg_date)) <= $current_date) {
            $months++;
        }
    



        $all_reg_fee = FeeCategoryAmount::where('class_id',$class)->where('fee_category_id',1)->first();
        $reg_fee = $all_reg_fee->amount;
        $reg_fee_due = $reg_fee - $reg_fee_paid;

        $all_monthly_fee = FeeCategoryAmount::where('class_id',$class)->where('fee_category_id',2)->first();
        $monthly_fee = $all_monthly_fee->amount;
        $discounted_monthly_fee = $discount/100*$monthly_fee;
        $total_monthly_fee = $discounted_monthly_fee*$months;
        $monthly_fee_due = $total_monthly_fee - $monthly_fee_paid;

        $all_exam_fee = FeeCategoryAmount::where('class_id',$class)->where('fee_category_id',3)->first();
        $exam_fee = $all_exam_fee->amount;
        $exam_fee_due = $exam_fee - $exam_fee_paid;

        

        $total_due = $exam_fee_due + $monthly_fee_due + $reg_fee_due;



        

        $data['reg_fee'] = $reg_fee;
        $data['reg_fee_due'] = $reg_fee_due;
        
        $data['monthly_fee'] = $monthly_fee;
        $data['monthly_fee_due'] = $monthly_fee_due;
        $data['total_monthly_fee'] = $total_monthly_fee;
        
        $data['exam_fee'] = $exam_fee;
        $data['exam_fee_due'] = $exam_fee_due;
        
        $data['discounted_monthly_fee'] = $discounted_monthly_fee;

        $data['total_due'] = $total_due;
        $data['discount'] = $discount;
      




        $data['total_paid'] = $monthly_fee_paid + $exam_fee_paid + $reg_fee_paid;
        return view('backend.student_portal.student_financial_info',$data);
    }
    //_________________________________________________________End of student financial info_________________________________________________//

    //_________________________________________________________Student result info function_______________________________________________________//

    public function ResultInfoView() {
        $data['exam_type'] = ExamType::all();
        return view('backend.student_portal.student_result_info_view',$data);
    }

    public function ResultInfo(Request $request) {

        $xstudent = AssignStudent::with('student_class')->with('student_year')->with('group')->with('shift')->where('student_id',Auth::user()->id)->get();
            // $xstudent = AssignStudent::where('student_id',Auth::user()->id)->get();
        $year_id = $xstudent[0]->student_year->id;
        $class_id = $xstudent[0]->student_class->id;
        $exam_type_id = $request->exam_type_id;
        $id_no = Auth::user()->id_no;
        $data['exam_type_id'] = $exam_type_id;

        $count_fail = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->where('marks','<','33')->get()->count();
    	// dd($count_fail);
        
        $singleStudent = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->first();
        if ($singleStudent == true) {
    
            $allMarks = StudentMarks::with(['assign_subject','year'])->where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->get();
    	    // dd($allMarks->toArray())

            $allGrades = MarksGrade::all();

            return view('backend.student_portal.student_result_info',compact('allMarks','allGrades','count_fail'),$data);
            
        } else {
            $notification = array(
                'message' => 'Result not published yet',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }


        
    }
    //_________________________________________________________Student result info function_______________________________________________________//

    //_________________________________________________________Student result download function_______________________________________________________//

    public function ResultDownload(Request $request) {

        $xstudent = AssignStudent::with('student_class')->with('student_year')->with('group')->with('shift')->where('student_id',Auth::user()->id)->get();
            // $xstudent = AssignStudent::where('student_id',Auth::user()->id)->get();
        $year_id = $xstudent[0]->student_year->id;
        $class_id = $xstudent[0]->student_class->id;
        $exam_type_id = $request->exam_type_id;
        $id_no = Auth::user()->id_no;
        $data['exam_type_id'] = $exam_type_id;

        $count_fail = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->where('marks','<','33')->get()->count();
    	// dd($count_fail);
        
        $singleStudent = StudentMarks::where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->first();
        if ($singleStudent == true) {
    
            $allMarks = StudentMarks::with(['assign_subject','year'])->where('year_id',$year_id)->where('class_id',$class_id)->where('exam_type_id',$exam_type_id)->where('id_no',$id_no)->get();
    	    // dd($allMarks->toArray())

            $allGrades = MarksGrade::all();

            // return view('backend.student_portal.student_result_info_pdf',compact('allMarks','allGrades','count_fail'),$data);
            	$pdf = PDF::loadView('backend.student_portal.student_result_info_pdf',compact('allMarks','allGrades','count_fail'));
	            $pdf->SetProtection(['copy','print'],'','pass');
	            return $pdf->stream('document.pdf');
        } else {
            $notification = array(
                'message' => 'Result not published yet',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notification);
        }
        // return view('',$data);
    }

    //_________________________________________________________End of Student result download function_______________________________________________________//
    
    
}
