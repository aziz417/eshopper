<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();


class AdminController extends Controller
{
    public function admin(){
        return view('admin.login');
    }

    public function login(Request $request){
        $admin_email = $request->email;
        $admin_pass  = md5($request->password);

        $result = DB::table('tbl_admin')
            ->where('admin_email',$admin_email)
            ->where('admin_pass',$admin_pass)
            ->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return view('admin.dashboard.index');
        }else{
            Session::put('massage','Email or Password Invaled');
            return back();
        }
    }
}
