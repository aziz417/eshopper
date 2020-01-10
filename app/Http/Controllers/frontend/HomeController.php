<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->join('tbl_brands','products.brand_id','=','tbl_brands.Bid')
            ->select('categories.name', 'tbl_brands.Bname', 'products.*')
            ->limit(20)->get();
            
        return view('frontend.pages.home_content',compact('data'));
    }

    public function productByCategory($id){
        $productByCategory = DB::table('products')->where('products.status',1)
            ->join('categories','products.category_id','=','categories.id')
            ->join('tbl_brands','products.brand_id','=','tbl_brands.Bid')
            ->select('categories.name', 'tbl_brands.Bname', 'products.*')
            ->orderBy('products.id','DESC')->get();
        return view('frontend.pages.productByCategory',compact('productByCategory'));
    }

    public function productByBrand($Bid){
        $productByBrand = DB::table('products')->where('products.status',1)
            ->join('categories','products.category_id','=','categories.id')
            ->where('categories.status',1)
            ->join('tbl_brands','products.brand_id','=','tbl_brands.Bid')
            ->where('tbl_brands.Bstatus',1)
            ->limit(20)->where('tbl_brands.Bid',$Bid)
            ->orderBy('products.id','DESC')->get();
        return view('frontend.pages.productByBrand',compact('productByBrand'));
    }

    public function productDetails($Pid){
        $productDetails = DB::table('products')->where('products.id',$Pid)
            ->join('categories','products.category_id','=','categories.id')
            ->join('tbl_brands','products.brand_id','=','tbl_brands.Bid')
            ->select('categories.name', 'tbl_brands.Bname', 'products.*')
            ->first();
        return view('frontend.pages.productDetails',compact('productDetails'));
    }
}
