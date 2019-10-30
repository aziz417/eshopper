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

class ProductController extends Controller
{
    public function AllProducts(){
        $AllProducts = DB::table('tbl_products')
            ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.Cid')
            ->join('tbl_brands','tbl_products.brand_id', '=', 'tbl_brands.Bid')
            ->get();
        return view('admin.products.index',compact('AllProducts'));
    }

    public function AddProduct(){
        $data = array();
        $data['category'] = DB::table('tbl_category')->where('Cstatus',1)->get();
        $data['brands'] = DB::table('tbl_brands')->where('Bstatus',1)->get();
        return view('admin.products.create',compact('data'));
    }

    public function ProductStore(Request $request){
        $data = array();
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

}
