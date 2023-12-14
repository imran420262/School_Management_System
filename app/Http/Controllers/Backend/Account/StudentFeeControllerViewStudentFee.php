<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;
use App\Models\FeeCategoryAmount;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\ExamType;
use DB;
use PDF;

use App\Models\AccountStudentFee;
use App\Models\ExamSchedule;
use App\Models\FeeCategory;
class StudentFeeControllerViewStudentFee extends Controller
{
    public function StudentFeeView(){ //This function is for student fee View

    	$data['years'] = StudentYear::all();
    	$data['classes'] = StudentClass::all();
    	$data['fee_categories'] = FeeCategory::all();
		// 1 = Registration fee
		// 2 = Monthly fee
		// 3 = Exam Fee 		
    	return view('backend.account.student_fee.student_fee_view',$data);
    }


 	public function StudentFeeViewGetStudent(Request $request){ //for studnent fee view

		$year_id = $request->year_id;
		$class_id = $request->class_id;
		$student_id = $request->id_no;
		$fee_category_id = $request->fee_category_id;
		$date = date('Y-m',strtotime($request->date)); 
		
		
		if ($student_id == "all") { 
			$data = AssignStudent::with(['discount'])->where('year_id',$year_id)->where('class_id',$class_id)->get();
		} else {
			$sid = User::where('id_no',$student_id)->get();
			$data = AssignStudent::with(['discount'])->where('student_id',$sid[0]['id'])->where('year_id',$year_id)->where('class_id',$class_id)->get();
			// $data = AssignStudent::with(['discount'])->where('year_id',$year_id)->where('class_id',$class_id)->get();

		}
		
		
		//  $html['thsource']  = '<th>'.(int)$sid[0]['id'].'</th>';
        $html['thsource']  = '<th>ID No</th>';
		$html['thsource'] .= '<th>Name</th>';
		//  $html['thsource'] .= '<th>Original Fee </th>';
		if($fee_category_id == 2) {
            $html['thsource'] .= '<th>Discount </th>';
        }
		if($fee_category_id == 1) {
			$html['thsource'] .= '<th>Registration Fee </th>';
		}
		// $html['thsource'] .= '<th>Year</th>';			
		// $html['thsource'] .= '<th>Class</th>';
		// $html['thsource'] .= '<th>Fee Type</th>';
		$html['thsource'] .= '<th>Total Paid amount</th>';
		$html['thsource'] .= '<th>Due</th>';
		
		
		//  $html['thsource'] .= '<th>Select</th>';

		foreach ($data as $key => $std) {
			// 1 = Registration fee
			// 2 = Monthly fee
			// 3 = Exam Fee 
			$fee = FeeCategoryAmount::where('fee_category_id',$fee_category_id)->where('class_id',$std->class_id)->first();
			// $monthfee = FeeCategoryAmount::where('fee_category_id',2)->where('class_id',$std->class_id)->first();
			// $examfee = FeeCategoryAmount::where('fee_category_id',3)->where('class_id',$std->class_id)->first();
            
            

			$orginalfee = $fee->amount;
			$discount = $std['discount']['discount'];
			$discountablefee = $discount/100*$orginalfee;
			$finalfee = (int)$orginalfee-(int)$discountablefee; 
			$regDate = strtotime($std['student']['join_date']);
			// $date2 = strtotime('2022-03-01');
			$date2 = strtotime(date('Y-m-d', time()));
			
            $months = 1;

			while (($regDate = strtotime('+1 MONTH', $regDate)) <= $date2) {
				$months++;
			}

			$monthlyDue = ((int)$months*$finalfee)-(int)$std['student']['total_monthly_fee_paid'];
			$registrationDue = (int)$orginalfee-(int)$std['student']['total_registration_fee_paid'];
			
			

			

			$color = 'success';
			$html[$key]['tdsource']  = '<td>' . $std['student']['id_no'] . '</td>';
			$html[$key]['tdsource'] .= '<td>' . $std['student']['name'] . '</td>';
            // $html[$key]['tdsource'] .= '<td>' . $std['student_year']['name'] . '</td>';
            // $html[$key]['tdsource'] .= '<td>' . $std['student_class']['name'] . '</td>';
            // $html[$key]['tdsource'] .= '<td>' . $std['fee_category']['name'] . '</td>';


			// discount
			if($fee_category_id == 2) {
				$html[$key]['tdsource']  .= '<td>'.$std['discount']['discount'].' %'.'<input type="hidden" name="date" value= " '.$date.' " >'.'</td>';
			}

            //Total Paid amount
            //Total Registration Fee paid
            if($fee_category_id == 1) {
                $html[$key]['tdsource'] .= '<td>' . $fee->amount . '</td>';
            }
            if($fee_category_id == 1) {
                $html[$key]['tdsource'] .= '<td>' . $std['student']['total_registration_fee_paid'] . '</td>';
            }

            //Total Monthly Fee paid
            if($fee_category_id == 2) {
                $html[$key]['tdsource'] .= '<td>' . $std['student']['total_monthly_fee_paid'] . '</td>';
            }

            //Total Exam Fee paid
            if($fee_category_id == 3) {
                $html[$key]['tdsource'] .= '<td>' . $std['student']['total_exam_fee_paid'] . '</td>';
            }
			//Due
            //Registration Fee Due
			if($fee_category_id == 1) {
				$html[$key]['tdsource']  .= '<td>'.$registrationDue.'</td>';
			}
            //Monthly Fee Due
			if($fee_category_id == 2) {
				$html[$key]['tdsource']  .= '<td>'.$monthlyDue.'</td>';
			}
            //Exam Fee Due
			if($fee_category_id == 3) {
                $examDate = ExamSchedule::where('class_id',$class_id)->get();
                $examCount = 0;

                foreach ($examDate as $eDate) {
                    $examCount+=1;
				// $html[$key]['tdsource']  .= '<td>'.$eDate.' Taka'.'<input type="hidden" name="date" value= " '.$date.' " >'.'</td>';

                }
                $examDue = ((int)$orginalfee*(int)$examCount)-((int)$std['student']['total_exam_fee_paid']);
				$html[$key]['tdsource']  .= '<td>'.$examDue.'</td>';
			}
			 

		}  
		return response()->json(@$html);

   } // end mehtod view student fee(StudentFeeViewGetstudent)
}
