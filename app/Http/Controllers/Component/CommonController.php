<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

class CommonController extends Controller
{
    public function CurrentController(){
        $current_Controller = strtolower(str_replace('controller',
            '',class_basename(Route::current()->controller)));
        return $current_Controller;
    }

    public function fileUploadedBackend($image, $storeName){
        if ($image){
            $real_image = $image;
            $imgNameWithExtention = "Fictionsoft".rand(8).time().
                '.'.$image->getClientOriginalExtension();
            Image::make($real_image)->resize(400,450)
                ->save( base_path('public/backend/uploads_images/'.$storeName.'/'
                    .$imgNameWithExtention),'100');

            return $imgNameWithExtention;
        }
    }

    public function imageDelete($oldImage,$storeName){
        if($oldImage != ''){
            file_exists('backend/uploads_images/'.$storeName.'/'.$oldImage);
            unlink('backend/uploads_images/'.$storeName.'/'/$oldImage);
        }
    //return korbo kivabe ki return korbo
    }
}
