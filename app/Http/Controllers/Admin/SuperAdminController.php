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
    public function logout(){
        Session::Flush();
        return Redirect('/admin/login');
    }
}
