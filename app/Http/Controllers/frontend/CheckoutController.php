<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class CheckoutController extends Controller
{
    public function checkLoginShipping(){
        $customerId = Session::get('customerId');
        $shippingId = Session::get('shippingId');
        if($customerId != NULL && $shippingId != NULL){
            return view('frontend.pages.payment');
        }elseif($customerId != NULL){
            return view('frontend.pages.checkout');
        }else{
            return view('frontend.pages.customerSingingLogin');
        }
    }
}
