<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Contracts\Session\Session;
use Illuminate\support\Facades\Redirect;
session_start();


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.adminProfile.profile');
    }

   /* public function dashboard(Request $request){
        $admin_email = $request->email;
        $admin_pass  = md5($request->password);

        $result = DB::table('tbl_admin')
            ->where('admin_email',$admin_email)
            ->where('admin_pass',$admin_pass)
            ->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('massage','Email or Password Invaled');
            return Redirect::to('/backend');
        }
    }*/

}
