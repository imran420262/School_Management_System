<?php

namespace App\Http\Controllers;
use App\Models\PublicMessage;

use Illuminate\Http\Request;
use Auth;

class PublicMessageController extends Controller
{
    public function ContactUs(Request $request) {
		
		return view('frontend.contact_us');
	}

	public function ContactMessage(Request $request) {
		
		$public_message = new PublicMessage();
		$public_message->name = $request->name;
		$public_message->email = $request->email;
		$public_message->phone = $request->phone;
		$public_message->subject = $request->subject;
		$public_message->message = $request->message;
		$public_message->save();


		
		return 's';
	}

	public function PublicMessageView() {

		$data['allmessage'] = PublicMessage::all();

		return view('backend.publicmsg.publicmsg_view',$data);
	}

	public function PublicMessageRead(Request $request, $id) {

		$data = PublicMessage::find($id);
		$data->read = "yes";
		$data->read_by = Auth::user()->name;
		$data->save();

		$data['allmessage'] = PublicMessage::all();

		return view('backend.publicmsg.publicmsg_view',$data);

	}
}
