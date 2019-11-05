<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
session_start();

class OrderController extends Controller
{
    public function Payment(Request $request){
        $pdata = array();
        $pdata['paymentMethod'] = $request->paymentMethod;
        $pdata['paymentStatus'] = "Pending";
        $paymentId = DB::table('tbl_payment')->insertGetId($pdata);
        Session::put('paymentId',$paymentId);

        $odata = array();
        $odata['customerID']  = Session::get('customerId');
        $odata['shippingId']  = Session::get('shippingId');
        $odata['paymentId']   = Session::get('paymentId');
        $odata['orderTotal']  = Cart::total();
        $odata['orderStatus'] = "Pending";

        $orderId = DB::table('tbl_order')->insertGetid($odata);


        $cartInfo = Cart::content();
        foreach ($cartInfo as $cart){
            $oodetails = array();
            $oodetails['orderId'] = $orderId;
            $oodetails['productId'] = $cart->id;
            $oodetails['productName'] = $cart->name;
            $oodetails['productPrice'] = $cart->price;
            $oodetails['productSeles_qty'] = $cart->qty;

            $ooDetailsId = DB::table('tbl_order_details')->insertGetid($oodetails);
            Session::put('ooDetails',$ooDetailsId);


            if( $paymentId != NULL && $orderId != NULL ){
                if( $ooDetailsId != NULL ){
                    Cart::destroy();
                    return view('frontend.pages.orderComplete');
                }
            }
        }
    }
}
