<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class CheckoutController extends Controller
{
    public function Checkout(){
        $customer = Session::get('customerId');
        if($customer != NULL){
            return view('frontend.pages.checkout');
        }else{
            return view('frontend.pages.customerSingingLogin');
        }
    }
}
