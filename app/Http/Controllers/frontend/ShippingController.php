<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ShippingController extends Controller
{
    public function ShippingCheck(){
        $shippingId = Session::get('shippingId');
        if($shippingId != NULL){
            return view('frontend.pages.payment');
        }else{
            return Redirect::route('shipping.store');
        }
     }


    public function SippingStore(Request $request){
        $data = array();
        $data['shippingEmail'] = $request->shippingEmail;
        $data['shippingPhone'] = $request->shippingPhone;
        $data['shippingFname'] = $request->shippingFname;
        $data['shippingLname'] = $request->shippingLname;
        $data['shippingAddress'] = $request->shippingAddress;
        $data['shippingCity'] = $request->shippingCity;

        $shippingId = DB::table('tbl_shipping')->insertGetid($data);
        Session::put('shippingName',$request->shippingFname.' '.$request->shippingLname);
        Session::put('shippingId',$shippingId);


        return view('frontend.pages.payment');

    }
}
