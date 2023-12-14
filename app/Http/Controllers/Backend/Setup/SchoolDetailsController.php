<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolDetails;
use App\Models\SliderImage;
use App\Models\PrincipalMessage;
use App\Models\Gallery;
use DB;
use Mpdf\Tag\Details;

class SchoolDetailsController extends Controller
{

    public function StoreDetails(Request $request) {
        DB::table('school_details')->delete();
        $school_details = new SchoolDetails();
        $school_details->school_name = $request->school_name;
        $school_details->school_phone = $request->school_phone;
        $school_details->school_email = $request->school_email;
        $school_details->school_address = $request->school_address;
        $school_details->map_coordinate = $request->map_coordinate;
        $school_details->school_est = $request->school_est;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = 'school_logo.'.$file->extension();
    		$file->move(public_path('upload'),$filename);
    		$school_details['image'] = $filename;
    	}
        if ($request->file('image_cover')) {
    		$file = $request->file('image_cover');
    		$filename = 'school_cover.'.$file->extension();
    		$file->move(public_path('upload'),$filename);
    		$school_details['image_cover'] = $filename;
    	}
        $school_details->about_title = $request->about_title;
        $school_details->about_description = $request->about_description;
        $school_details->school_youtube = $request->school_youtube;
        $school_details->school_twitter = $request->school_twitter;
        $school_details->school_instagram = $request->school_instagram;
        $school_details->school_facebook = $request->school_facebook;
        $school_details->video_title = $request->video_title;
        $school_details->video_description = $request->video_description;
        $school_details->video_url = $request->video_url;
        $school_details->mission = $request->mission;

        $school_details->save();

        $notification = array(
    		'message' => 'School details seccessfully updated',
    		'alert-type' => 'success'
    	);
        $data['all'] = SchoolDetails::all();


        return view('backend.setup.school_details.edit_details',$data)->with($notification);
    }
    
    
    public function ViewDetails() {
        $data['all'] = SchoolDetails::all();
        $data['slider_image'] = SliderImage::all();
        $data['pm'] = PrincipalMessage::all();

        return view('backend.setup.school_details.view_details',$data);
    }

    public function EditDetails() {
        
        $data['all'] = SchoolDetails::all();
        return view('backend.setup.school_details.edit_details',$data);
    }


    public function SliderImageAdd() {
        
        $data['slider_image1'] = SliderImage::where('serial',1)->get('name')->first();
        $data['slider_image2'] = SliderImage::where('serial',2)->get('name')->first();
        $data['slider_image3'] = SliderImage::where('serial',3)->get('name')->first();
        $data['slider_image4'] = SliderImage::where('serial',4)->get('name')->first();
        $data['slider_image5'] = SliderImage::where('serial',5)->get('name')->first();
        $data['slider_image6'] = SliderImage::where('serial',6)->get('name')->first();

        return view('backend.setup.school_details.add_sliderimage',$data);

    }


    public function SliderImageStore(Request $request) {
        
        if ($request->file('image1')) {

            SliderImage::where('serial',1)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image1');
    		$filename = 'slider_image1.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 1;
            $sliderimage->save();
    	}
        if ($request->file('image2')) {

            SliderImage::where('serial',2)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image2');
    		$filename = 'slider_image2.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 2;
            $sliderimage->save();
    	}
        if ($request->file('image3')) {

            SliderImage::where('serial',3)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image3');
    		$filename = 'slider_image3.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 3;
            $sliderimage->save();
    	}
        if ($request->file('image4')) {

            SliderImage::where('serial',4)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image4');
    		$filename = 'slider_image4.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 4;
            $sliderimage->save();
    	}
        if ($request->file('image5')) {

            SliderImage::where('serial',5)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image5');
    		$filename = 'slider_image5.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 5;
            $sliderimage->save();
    	}
        if ($request->file('image6')) {

            SliderImage::where('serial',6)->delete();
            $sliderimage = new SliderImage();
    		$file = $request->file('image6');
    		$filename = 'slider_image6.'.$file->extension();
    		$file->move(public_path('upload/slider_image'),$filename);
    		$sliderimage['name'] = $filename;
            $sliderimage['serial'] = 6;
            $sliderimage->save();
    	}

        return redirect()->route('school.details.sliderimage.add');
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////Gallery///////////////////////////////////////////////////////////



    public function GalleryView() {
        $data['gallery'] = Gallery::get();

        return view('backend.setup.school_details.gallery_view',$data);
    }

    public function GalleryImageAdd() {
        return view('backend.setup.school_details.gallery_add');
    }

    public function GalleryImageStore(Request $request) {
        $galleryimage = new Gallery();
            $file = $request->file('image1');
            $filename = rand(00000,99999).'.'.$file->extension();
            $file->move(public_path('upload/gallery'),$filename);
            $galleryimage['name'] = $filename;
        $galleryimage['description'] = $request->description;
        $galleryimage->save();
        return redirect()->route('gallery.image.view');
    }
    public function GalleryImageUpdate(Request $request) {
        $galleryimage = Gallery::find($request->g_id);

        if ($request->file('image1')) {
            $file = $request->file('image1');
            $filename = rand(00000,99999).'.'.$file->extension();
            $file->move(public_path('upload/gallery'),$filename);
            $galleryimage['name'] = $filename;
        }
            
        $galleryimage['description'] = $request->description;
        $galleryimage->save();
        

        return redirect()->route('gallery.image.view');
        
    }

    public function GalleryImageDelete($id) {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
    public function GalleryImageEdit($id) {
        $data['gallery'] = Gallery::find($id);
        $data['id'] = $id;
        return view('backend.setup.school_details.gallery_edit',$data);
    }


    ///////////////////////////////////End of gallery function////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function PrincipalMsgAdd() {

        $data['pm'] = PrincipalMessage::all();

        return view('backend.setup.school_details.principal_msg',$data);
    }

    public function PrincipalMsgStore(Request $request) {

        DB::table('principal_messages')->delete();
        $pm = new PrincipalMessage();
        if ($request->file('principal_image')) {
    		$file = $request->file('principal_image');
    		$filename = 'principal.'.$file->extension();
    		$file->move(public_path('upload'),$filename);
    		$pm['photo'] = $filename;
    	}
        $pm['message'] = $request->principal_message;
        $pm->save();
        return redirect()->route('school.details.principalmsg.add');

    }

    
}
