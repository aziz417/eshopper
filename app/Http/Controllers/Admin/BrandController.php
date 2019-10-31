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
        $this->AdminAuthCheck();
        $data = array();
        $data['Bname'] = $request->name;
        $data['Bdescription'] = $request->description;
        $data['Bstatus'] = $request->status;

        $result = DB::table('tbl_brands')->insert($data);
            Session::put('massage','Brand Store Successfully');
            return Redirect()->back();
    }

    public function AllBrands(){
        $this->AdminAuthCheck();
        $AllBrands = DB::table('tbl_brands')->get();
        return view('admin.brands.index',compact('AllBrands'));
    }

    public function BrandEdit($Bid){
        $this->AdminAuthCheck();
        $brand = DB::table('tbl_brands')->where('Bid',$Bid)->first();
        return view('admin.brands.edit',compact('brand'));
    }

    public function BrandUpdate(Request $request){
        $this->AdminAuthCheck();
        $data = array();
        $data['Bid']          = $request->id;
        $data['Bname']        = $request->name;
        $data['Bdescription'] = $request->description;
        $data['Bstatus']      = $request->status;

        $result = DB::table('tbl_brands')->where('Bid',$data['Bid'])->update($data);
        if($result){
            Session::put('massage','Brands Updated Successfully');
            return Redirect::route('all.brands');
        }
    }

    public function BrandDelete($Bid){
        $this->AdminAuthCheck();
        DB::table('tbl_brands')->where('Bid',$Bid)->delete();
        Session::put('massage','Brand Deleted Successfully');
        return Redirect::back();
    }

    public function StatusUnActive($Bid){
        $this->AdminAuthCheck();
        DB::table('tbl_brands')->where('Bid',$Bid)
            ->update(['Bstatus' => NULL ]);
        Session::put('massage','Your Status Unactive');
        return Redirect::back();
    }

    public function StatusActive($Bid){
        $this->AdminAuthCheck();
        DB::table('tbl_brands')->where('Bid',$Bid)
            ->update(['Bstatus' => 1 ]);
        Session::put('massage','Your Status Active');
        return Redirect::back();
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('/backend')->send();
        }
    }
}
