<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Component\CommonController;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\productCreateRequest;
use App\Model\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // file handler. file validation, file store, store folder name all here
    public $storeName = 'product';
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
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productCreateRequest $request)
    {

        if($request->img != null){
            $image = $this->fileHandler->fileUploadedBackend($request->file('img'),$this->storeName,'img');
            if($image != false ){
                $request['image'] = $image;
            }
        }

        $request['status'] = ($request->status)?1:0;
        $request['featured'] = ($request->featured)?1:0;
        $request['slug'] = strtolower(str_replace(' ', '-', $request->name));


        $product = new Product($request->all());
        if($product->save()){
            return response('khalek');
        }else{
            return response('khalek2');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
