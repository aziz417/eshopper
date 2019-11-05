<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
{
    public function index(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return redirect(route('/orderManage'));
        }else {
            $this->AdminAuthCheck();
            return redirect(route('/orderManage'));
        }
    }

    public function logout(){
        Session::Flush();
        return Redirect('/backend');
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('/backend')->send();
        }
    }
}
