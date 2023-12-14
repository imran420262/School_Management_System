<?php

namespace App\Http\Controllers\Backend\Employee;

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

use App\Models\Designation;
use App\Models\EmployeeSallaryLog;

use App\Models\EmployeeLeave;
use App\Models\LeavePurpose;
// use Illuminate\Support\Facades\Auth;
use Auth;
class EmployeeLeaveController extends Controller
{
    public function LeaveRequestView(){
    	$data['allData'] = EmployeeLeave::orderBy('id','desc')->get();
    	// return view('backend.employee.employee_leave.employee_leave_view',$data);
    	return view('backend.employee.employee_leave_request.employee_leave_request_view',$data);

    }


    public function LeaveRequestAdd(){

    	$data['employees'] = User::where('usertype','employee')->get();
    	$data['leave_purpose'] = LeavePurpose::all();
    	// return view('backend.employee.employee_leave.employee_leave_add',$data);
    	return view('backend.employee.employee_leave_request.employee_leave_request_add',$data);
    }

	public function LeaveView() {
		$data['allData'] = EmployeeLeave::orderBy('id','desc')->get();
    	return view('backend.employee.employee_leave.employee_leave_view',$data);
	}

	public function LeaveAdd() {

	}


    public function LeaveStore(Request $request){

    	if ($request->leave_purpose_id == "0") {
    		$leavepurpose = new LeavePurpose();
    		$leavepurpose->name = $request->name;
    		$leavepurpose->save();
    		$leave_purpose_id = $leavepurpose->id;
    	}else{
    		$leave_purpose_id = $request->leave_purpose_id;
    	}

    	$data = new EmployeeLeave();
    	$data->employee_id = $request->employee_id;
    	$data->leave_purpose_id = $leave_purpose_id;
    	$data->start_date = date('Y-m-d',strtotime($request->start_date));
    	$data->end_date = date('Y-m-d',strtotime($request->end_date));
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Leave Data Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.leave.request.view')->with($notification);

    }// end Method 



    public function LeaveEdit($id){
    	$data['editData'] = EmployeeLeave::find($id);
    	$data['employees'] = User::where('usertype','employee')->get();
    	$data['leave_purpose'] = LeavePurpose::all();
    	return view('backend.employee.employee_leave.employee_leave_edit',$data);

    }



    public function LeaveUpdate(Request $request,$id){

    	if ($request->leave_purpose_id == "0") {
    		$leavepurpose = new LeavePurpose();
    		$leavepurpose->name = $request->name;
    		$leavepurpose->save();
    		$leave_purpose_id = $leavepurpose->id;
    	}else{
    		$leave_purpose_id = $request->leave_purpose_id;
    	}

    	$data = EmployeeLeave::find($id);
    	$data->employee_id = $request->employee_id;
    	$data->leave_purpose_id = $leave_purpose_id;
    	$data->start_date = date('Y-m-d',strtotime($request->start_date));
    	$data->end_date = date('Y-m-d',strtotime($request->end_date));
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Leave Data Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.leave.view')->with($notification);

    } // end Method 

    public function LeaveApprove(Request $request,$id){

    	$data = EmployeeLeave::find($id);
		$data->status = "Approved";
		$data->status_action_by = Auth::user()->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Leave Approved',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);

    } // end Method 
    
	public function LeaveReject(Request $request,$id){

    	$data = EmployeeLeave::find($id);
		$data->status = "Rejected";
		$data->status_action_by = Auth::user()->name;
    	$data->save();

    	$notification = array(
    		'message' => 'Employee Leave Data Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.leave.view')->with($notification);

    } // end Method 



    public function LeaveDelete($id){
    	$leave = EmployeeLeave::find($id);
    	$leave->delete();

    	$notification = array(
    		'message' => 'Employee Leave Data Deleted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.leave.view')->with($notification);
    }



} 
