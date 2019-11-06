<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function Index(){
        return view('admin.slider.index');
    }

    public function SliderAdd(){

        return view('admin.slider.create');
    }
}
