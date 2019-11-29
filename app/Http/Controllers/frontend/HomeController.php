<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('tbl_products')->where('Pstatus',1)
            ->join('categories','tbl_products.category_id','=','categories.id')->where('status',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(20)->get();
        return view('frontend.pages.home_content',compact('data'));
    }

    public function productByCategory($id){
        $productByCategory = DB::table('tbl_products')->where('Pstatus',1)
            ->join('categories','tbl_products.category_id','=','categories.id')->where('status',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(20)->where('categories.id',$id)
            ->orderBy('tbl_products.product_id','DESC')->get();
        return view('frontend.pages.productByCategory',compact('productByCategory'));
    }

    public function productByBrand($Bid){
        $productByBrand = DB::table('tbl_products')->where('Pstatus',1)
            ->join('categories','tbl_products.category_id','=','categories.id')->where('status',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(20)->where('tbl_brands.Bid',$Bid)
            ->orderBy('tbl_products.product_id','DESC')->get();
        return view('frontend.pages.productByBrand',compact('productByBrand'));
    }

    public function productDetails($Pid){
        $productDetails = DB::table('tbl_products')->where('product_id',$Pid)
            ->join('categories','tbl_products.category_id','=','categories.id')
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')
            ->first();
        return view('frontend.pages.productDetails',compact('productDetails'));
    }
}
