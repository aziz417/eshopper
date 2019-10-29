<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use PhpParser\Node\Stmt\Return_;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class BrandController extends Controller
{
    public function AddBrand()
    {
        return view('admin.brands.create');
    }

    public function BrandStore(Request $request)
    {

        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $result = DB::table('tbl_brands')->insert($data);
            Session::put('massage','Brand Store Successfully');
            return Redirect()->back();
    }

    public function AllBrands(){
        $AllBrands = DB::table('tbl_brands')->get();
        return view('admin.brands.index',compact('AllBrands'));
    }

    public function BrandEdit($Bid){
        $brand = DB::table('tbl_brands')->where('id',$Bid)->first();
        return view('admin.brands.edit',compact('brand'));
    }

    public function BrandUpdate(Request $request){
        $data = array();
        $data['id']          = $request->id;
        $data['name']        = $request->name;
        $data['description'] = $request->description;
        $data['status']      = $request->status;

        $result = DB::table('tbl_brands')->where('id',$data['id'])->update($data);
        if($result){
            Session::put('massage','Brands Updated Successfully');
            return Redirect::route('all.brands');
        }
    }

    public function BrandDelete($Bid){
        DB::table('tbl_brands')->where('id',$Bid)->delete();
        Session::put('massage','Brand Deleted Successfully');
        return Redirect::back();
    }

    public function StatusUnActive($Bid){
        DB::table('tbl_brands')->where('id',$Bid)
            ->update(['status' => NULL ]);
        Session::put('massage','Your Status Unactive');
        return Redirect::back();
    }

    public function StatusActive($Bid){
        DB::table('tbl_brands')->where('id',$Bid)
            ->update(['status' => 1 ]);
        Session::put('massage','Your Status Active');
        return Redirect::back();
    }
}
