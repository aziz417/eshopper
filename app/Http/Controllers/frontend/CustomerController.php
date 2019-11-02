<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class CustomerController extends Controller
{
    public function LoginIndex(){
        return view('frontend.pages.customerSingingLogin');
    }

    public function logout(){
        Session::put('customerId',Null);
        Session::flush();
        return redirect(route('/'));
    }

    public function CustomerSinging(Request $request){

        $data = array();
        $data['customerName'] = $request->customerName;
        $data['customerEmail'] = $request->customerEmail;
        $data['customerPass'] = $request->customerPass;
        $data['customerPhone'] = $request->customerPhone;
        $data['customerAddress'] = $request->customerAddress;

        $customer = DB::table('tbl_customers')->insertGetid($data);

        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->customerName);

        return view('frontend.pages.checkout');
    }

    public function Customerlogin(Request $request){

        $customerEmail = $request->customerEmail;
        $customerPass = $request->customerPass;
        $tblData = DB::table('tbl_customers')->where('customerEmail',$customerEmail)->where('customerPass',$customerPass)->first();

        if($customerEmail == $tblData->customerEmail and $customerPass == $tblData->customerPass){
            Session::put('customerId',$tblData->id);
            Session::put('customerName',$tblData->customerName);

            return view('frontend.pages.checkout');
        }else{
            return back()->with('massage','Email or Password Invalid');
        }
    }
}
