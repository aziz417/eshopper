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
    public function SippingStore(Request $request){
        $data = array();
        $data['shippingEmail'] = $request->shippingEmail;
        $data['shippingPhone'] = $request->shippingPhone;
        $data['shippingFname'] = $request->shippingFname;
        $data['shippingLname'] = $request->shippingEmail;
        $data['shippingEmail'] = $request->shippingLname;
        $data['shippingAddress'] = $request->shippingAddress;
        $data['shippingCity'] = $request->shippingCity;

        $shippingInfo = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shippingName',$request->shippingFname.' '.$request->shippingLname);
        Session::put('shippingId',$shippingInfo);
        session::get('shippingId');

        return view('frontend.pages.shipping');

    }
}
