<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Component\CommonController;
use App\Http\Requests\backend\categoryRequest;
use App\Http\Resources\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Session;

use DB;

class CategoriesController extends Controller
{
    // file handler. file validation, file store, store name all here
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

        //image upload and validation here
        if($request->img != null){
            $image = $this->fileHandler->fileUploadedBackend($request->file('img'),$this->storeName,'img');
        }

        if (isset($image) != false ){
            $request['image'] = $image;
        }



        $request['slug'] = strtolower(str_replace(' ', '-', $request->name));
        $request['status'] = ($request->status)?1:0;
        $category = new Category($request->all());
        if($category->save()){
            return redirect(route('category.index'))->with('success','Category Save Success');
        }else{
            return redirect(route('category.index'))->with('warning','Category Could not be Save');
        }
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

        if ( $image != null ){
            //new image upload
            $image = $this->fileHandler->fileUploadedBackend($request->file('img'),$this->storeName,'img');
            $request['image'] = $image;
            // old image unlink
            if($request->oldImg = null){
                $this->fileHandler->imageDeleteBackend($request->oldImg,$this->storeName);
            }
            
        }

        $request['slug'] = strtolower(str_replace(' ', '-', $request->name));
        $request['status'] = ($request->status)?1:0;
        $update = $category->update($request->all());
        if($update){
            return Redirect::route('category.index')->with('success','Category Updated Successfully.');
        }else{
            return Redirect::route('category.index')->with('warning','Category could not be update.');
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

    public function changeStatus(Category $category){

        $category['status'] = $category->status == 1 ? 0 : 1;

        if ($category->update()){
            return back()->with('success','Category status change successfully.');
        }else{
            return back()->with('error','Category status could not be change.');
        }
    }
}
