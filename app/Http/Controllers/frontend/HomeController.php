<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $data = DB::table('tbl_products')->where('Pstatus',1)
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')->where('Cstatus',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(6)->get();
        return view('frontend.pages.home_content',compact('data'));
    }

    public function productByCategory($Cid){
        $productByCategory = DB::table('tbl_products')->where('Pstatus',1)
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')->where('Cstatus',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(20)->where('tbl_category.Cid',$Cid)
            ->orderBy('tbl_products.product_id','DESC')->get();
        return view('frontend.pages.productByCategory',compact('productByCategory'));
    }

    public function productByBrand($Bid){
        $productByBrand = DB::table('tbl_products')->where('Pstatus',1)
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')->where('Cstatus',1)
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')->where('Bstatus',1)
            ->limit(20)->where('tbl_brands.Bid',$Bid)
            ->orderBy('tbl_products.product_id','DESC')->get();
        return view('frontend.pages.productByBrand',compact('productByBrand'));
    }

    public function productDetails($Pid){
        $productDetails = DB::table('tbl_products')->where('product_id',$Pid)
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')
            ->first();
        return view('frontend.pages.productDetails',compact('productDetails'));
    }
}
