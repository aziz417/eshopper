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
        $AllProducts = DB::table('tbl_products')
            ->join('categories','tbl_products.category_id', '=', 'categories.id')
            ->join('tbl_brands','tbl_products.brand_id', '=', 'tbl_brands.Bid')
            ->get();
        return view('admin.products.index',compact('AllProducts'));
    }

    public function AddProduct(){
        $data = array();
        $data['category'] = DB::table('categories')->where('status',1)->get();
        $data['brands'] = DB::table('tbl_brands')->where('Bstatus',1)->get();
        return view('admin.products.create',compact('data'));
    }

    public function ProductStore(Request $request){

        $image = $request->file('image');

        if ($image){
            $real_image = $image;

            $imgNameWithExtention = "Fictionsoft".rand().'.'.$image->getClientOriginalExtension();
            Image::make($real_image)->resize(400,450)
                ->save( base_path('public/images/products/'.$imgNameWithExtention),'100');
            $data['Pimage'] = $imgNameWithExtention;
        }

        $data['Pimage'] = $imgNameWithExtention;
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
        DB::table('tbl_products')->where('product_id',$Pid)
            ->update(['Pstatus' => NULL ]);
        Session::put('massage','Your Status Unactive');
        return Redirect::back();
    }

    public function StatusActive($Pid){
        DB::table('tbl_products')->where('product_id',$Pid)
            ->update(['Pstatus' => 1 ]);
        Session::put('massage','Your Status Active');
        return Redirect::back();
    }

    public function ProductDelete($Pid){
        $productImage = DB::table('tbl_products')->where('product_id',$Pid)->first();
        if ($productImage->Pimage != ''){
            file_exists('images/products/'.$productImage->Pimage);
            unlink('images/products/'.$productImage->Pimage);
        }
        DB::table('tbl_products')->where('product_id',$Pid)->delete();
        Session::put('massage','Product delete successfully');
        return Redirect::back();
    }

    public function ProductEdit($Pid){
        $data = array();
        $data['category'] = DB::table('categories')->where('status',1)->get();
        $data['brands'] = DB::table('tbl_brands')->where('Bstatus',1)->get();
        $data['product'] = DB::table('tbl_products')->where('product_id',$Pid)->first();
        return view('admin.products.edit',compact('data'));
    }

    public function ProductUpdate(Request $request){

        $id = $request->product_id;
        $data['Pimage'] = '';
        $data['product_id'] = $request->product_id;
        $data['category_id'] = $request->category_id;
        $data['brand_id'] = $request->brand_id;
        $data['Pname'] = $request->name;
        $data['Pdescription'] = $request->description;
        $data['price'] = $request->price;
        $data['Psize'] = $request->size;
        $data['Pcolor'] = $request->color;
        $data['Pstatus'] = $request->status;

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
            $data['Pimage'] = $imgNameWithExtention;
        }

        DB::table('tbl_products')->where('product_id',$id)->update($data);
        return Redirect::route('all.products')->with('massege', 'Product store successfully');
    }
}
