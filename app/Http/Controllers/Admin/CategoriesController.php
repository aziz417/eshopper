<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Component\CommonController;
use App\Http\Requests\backend\categoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Session;
session_start();
use DB;

class CategoriesController extends Controller
{
    public $storeName = 'category';
    public $fileHandler;
    function __construct()
    {
        $this->fileHandler = new CommonController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $categories = Category::with('parent')->orderBy('id','desc')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $parent_categories = $category->with('parent')->
            orderBy('id', 'desc')->where('parent_id',NULL)->get();
        return view('admin.category.create',compact('parent_categories'));
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
        //image upload and validation here

       $image = $this->fileHandler->fileUploadedBackend($request->file('img'),$this->storeName,'img');

        if ($image){
            $request['image'] = $image;
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
    public function edit(Category $category)
    {
        $parent_categories = Category::with('parent')->orderBy('id','desc')->where('parent_id', null)->get();
        return view('admin.category.edit', with(compact('category','parent_categories')));
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
        if ($image){
            //new image upload
            $image = $this->fileHandler->fileUploadedBackend($request->file('img'),$this->storeName,'img');
            $request['image'] = $image;
            //image unlink
            $this->fileHandler->imageDeleteBackend($request->oldImg,$this->storeName);
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
        if($category->children->count() == 0 ) {
            if ($category->delete()) {
                if ($category->image) {
                    $this->fileHandler->imageDeleteBackend($category->image, $this->storeName);
                }
                return back()->with('success', 'Category delete successfully');
            }else{
                return back()->with('error', 'Category could not be delete');
            }
        }else{
            return back()->with('warning', 'You are not allow to delete this category');
        }
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
