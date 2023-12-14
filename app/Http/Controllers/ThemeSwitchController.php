<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MailController;
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
use Illuminate\Support\Facades\Mail;
use Auth;

class ThemeSwitchController extends Controller
{
    public function SwitchTheme(){


		$id = Auth::user()->id;
		$data = User::find($id);

		if($data->theme == "dark") {		

			$data->theme = "light";
		} else {
			$data->theme = "dark";
		}
    	$data->save();

    	
		// $data->theme = "Approved";
    	// $data->save();
		// echo $data->theme;

    	// $notification = array(
    	// 	'message' => 'Employee Leave Approved',
    	// 	'alert-type' => 'success'
    	// );

    	return redirect()->route('dashboard');

    } // end Method 
    
}
