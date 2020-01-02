<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;

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


        $cartItems = Cart::content();

        foreach ($cartItems as $cart){

            $order_details = array();
            $order_details['orderId'] = $orderId;
            $order_details['productId'] = $cart->id;
            $order_details['productName'] = $cart->name;
            $order_details['productPrice'] = $cart->price;
            $order_details['productSeles_qty'] = $cart->qty;

            $order_details_id = DB::table('tbl_order_details')->insertGetid($order_details);
        }

        Cart::destroy();
        return view('frontend.pages.orderComplete');
    }
}
