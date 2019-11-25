<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
use PhpParser\Node\Stmt\Return_;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class ExtraController extends Controller
{
    public function Index(){
        $sliderItem = DB::table('tbl_slider')->get();
        return view('admin.slider.index',compact('sliderItem'));
    }

    public function SliderAdd(){

        return view('admin.slider.create');
    }

    public function SliderStore(Request $request){
        $data = array();
        $image = $request->file('image');
        if ($image){
            $real_image = $image;
            $imgNameWithExtention = "Fictionsoft".rand().'.'.$image->getClientOriginalExtension();
            Image::make($real_image)->resize(400,450)
                ->save( base_path('public/images/products/'.$imgNameWithExtention),'100');
            $data['image'] = $imgNameWithExtention;
        }
        $data['name'] = $request->name;
        $data['status'] = $request->status;

        DB::table('tbl_slider')->insert($data);
        return back()->with('message','Slider add successfully');
    }

    public function StatusUnActive($Sid){
        DB::table('tbl_slider')->where('id',$Sid)
            ->update(['status' => NULL ]);
        Session::put('massage','Your Status Unactive');
        return Redirect::back();
    }

    public function StatusActive($Sid){
        DB::table('tbl_slider')->where('id',$Sid)
            ->update(['status' => 1 ]);
        Session::put('massage','Your Status Active');
        return Redirect::back();
    }

    public function SliderDelete($Sid){
        $ImageItem = DB::table('tbl_slider')->where('id',$Sid)->first();
        if ($ImageItem->image != ''){
            file_exists('images/products/'.$ImageItem->image);
            unlink('images/products/'.$ImageItem->image);
        }
        DB::table('tbl_slider')->where('id',$Sid)->delete();
        Session::put('massage','Slider delete successfully');
        return Redirect::back();
    }

    public function SliderEdit($Sid){
        $sliderItem = DB::table('tbl_slider')->where('id',$Sid)->first();
        return view('admin.slider.edit',compact('sliderItem'));
    }

    public function SliderUpdate(Request $request){

        $Sid = $request->sliderId;
        $data['name'] = $request->name;
        $data['status'] = $request->status;

        $newImage = $request->file('image');
        $oldImage = $request->oldImage;
        if($newImage){
            if ($oldImage != ''){

                file_exists('images/products/'.$oldImage);
                unlink('images/products/'.$oldImage);

            }

            $real_image = $newImage;
            $imgNameWithExtention = "Fictionsoft".rand().'.'.$newImage->getClientOriginalExtension();
            Image::make($real_image)->resize(400,450)
                ->save( base_path('public/images/products/'.$imgNameWithExtention),'100');
            $data['image'] = $imgNameWithExtention;

        }

        DB::table('tbl_slider')->where('id',$Sid)->update($data);
        return Redirect::route('slider')->with('massege', 'Product store successfully');
    }


    public function showDashboard(){
        return view('admin.adminProfile.profile');
    }
}
