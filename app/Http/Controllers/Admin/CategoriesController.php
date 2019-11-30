<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\categoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Session;
session_start();
use DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllCategory = DB::table('categories')->get();
        return view('admin.category.index',compact('AllCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryRequest $request)
    {
       // $validated = $request->validated();
        $image = $request->file('img');

        if ($image){
            $real_image = $image;
            $imgNameWithExtention = "Fictionsoft".rand().time().
                '.'.$image->getClientOriginalExtension();
                Image::make($real_image)->resize(400,450)
                ->save( base_path('public/backend/uploads_images/category/'
                .$imgNameWithExtention),'100');
            $request['image'] = $imgNameWithExtention;
        }

        $category = new Category($request->all());
        $category->save();
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(categoryRequest $request, Category $category)
    {
        $image = $request->file('img');
        $oldImage = $request->oldImg;

        if ($image){
            if($oldImage != ''){
                file_exists('backend/uploads_images/category/'.$oldImage);
                unlink('backend/uploads_images/category/'.$oldImage);
            }

            $real_image = $image;
            $imgNameWithExtention = "Fictionsoft".rand().time().'.'.$image->getClientOriginalExtension();
            Image::make($real_image)->resize(400,450)
                ->save( base_path('public/backend/uploads_images/category/'
                .$imgNameWithExtention),'100');
            $request['image'] = $imgNameWithExtention;
        }

        $update = $category->update($request->all());

        if($update){
            return Redirect::route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        if($category->delete()){
            if($category->image !== ''){
                file_exists('backend/uploads_images/category/'.$category->image);
                unlink('backend/uploads_images/category/'.$category->image);
            }
        }
        return Redirect::back()->with('message','Category delete Success!');
    }

    public function StatusUnActive($id){
        DB::table('categories')->where('id',$id)
            ->update(['status' => NULL ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }

    public function StatusActive($id){
        DB::table('categories')->where('id',$id)
            ->update(['status' => 1 ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }
}
