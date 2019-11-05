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

class ProductController extends Controller
{
    public function AllProducts(){
        $this->AdminAuthCheck();
        $AllProducts = DB::table('tbl_products')
            ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.Cid')
            ->join('tbl_brands','tbl_products.brand_id', '=', 'tbl_brands.Bid')
            ->get();
        return view('admin.products.index',compact('AllProducts'));
    }

    public function AddProduct(){
        $this->AdminAuthCheck();
        $data = array();
        $data['category'] = DB::table('tbl_category')->where('Cstatus',1)->get();
        $data['brands'] = DB::table('tbl_brands')->where('Bstatus',1)->get();
        return view('admin.products.create',compact('data'));
    }

    public function ProductStore(Request $request){
        $this->AdminAuthCheck();


        $image = $request->file('image');

        if ($image){

            $real_image = $image;
            $getExtension = $image->getClientOriginalExtension();
            $randomNameGenarate = rand();
            $setImageName = $randomNameGenarate .'.' .  $getExtension;

            // admin/products_images/54564.png
            $newImage = Image::make($real_image)->resize(500,400)
                ->save( base_path('public/admin/products_images/'.$setImageName),'100');
            $img=$newImage->fill('#b53717');
            dd($img);

            $data['Pimage'] = $setImageName;

        }
        $data['Pimage'] = '';
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['Pname'] = $request->name;
        $data['Pdescription'] = $request->description;
        $data['price'] = $request->price;
        $data['Psize'] = $request->size;
        $data['Pcolor'] = $request->color;
        $data['Pstatus'] = $request->status;
        DB::table('tbl_products')->insert($data);
        return back()->with('massege', 'Product store successfully');
    }

    public function StatusUnActive($Pid){
        $this->AdminAuthCheck();
        DB::table('tbl_products')->where('product_id',$Pid)
            ->update(['Pstatus' => NULL ]);
        Session::put('massage','Your Status Unactive');
        return Redirect::back();
    }

    public function StatusActive($Pid){
        $this->AdminAuthCheck();
        DB::table('tbl_products')->where('product_id',$Pid)
            ->update(['Pstatus' => 1 ]);
        Session::put('massage','Your Status Active');
        return Redirect::back();
    }

    public function ProductDelete($Pid){
        $this->AdminAuthCheck();
        DB::table('tbl_products')->where('product_id',$Pid)->delete();
        Session::put('massage','Product delete successfully');
        return Redirect::back();
    }

    public function ProductEdit($Pid){
        $this->AdminAuthCheck();
        $data = array();
        $data['category'] = DB::table('tbl_category')->where('Cstatus',1)->get();
        $data['brands'] = DB::table('tbl_brands')->where('Bstatus',1)->get();
        $data['product'] = DB::table('tbl_products')->where('product_id',$Pid)->first();
        return view('admin.products.edit',compact('data'));
    }

    public function ProductUpdate(Request $request){
        $this->AdminAuthCheck();
        $id = $request->product_id;
        $data = array();
        $data['product_id'] = $request->product_id;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['Pname'] = $request->name;
        $data['Pdescription'] = $request->description;
        $data['price'] = $request->price;
        $data['Psize'] = $request->size;
        $data['Pcolor'] = $request->color;
        $data['Pstatus'] = $request->status;
        DB::table('tbl_products')->where('product_id',$id)->update($data);
        return Redirect::route('all.products')->with('massege', 'Product store successfully');
    }

    public function ProductView($Pid){
        $this->AdminAuthCheck();
       $product =  DB::table('tbl_products')->where('product_id',$Pid)
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')
            ->get();
       return view('admin.products.view',compact('product'));
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
