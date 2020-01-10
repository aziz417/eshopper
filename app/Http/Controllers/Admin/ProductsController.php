<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Component\CommonController;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\productCreateRequest;
use App\Model\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
    public function index(Request $request)
    {
        /*return view('admin.products.index');*/
        if($request->ajax()){
            $data = Product::latest()->get();
            return DataTables::of($data)->addcolumn('action', function ($data){
                $button = '<button type="button" name="edit" id="'.$data->id.'"
                class="btn btn-primary btn-sm edit">Edit</button>';
                $button .= ' ';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="
                delete btn btn-danger btn-sm">Delete</button>';
                return $button;
            })->addcolumn('status', function($data){
                if($data->status){
                    $status = '<button type="button" id="'.$data->id.'" value="'.$data->status.'" class="status btn btn-xs btn-primary btn-rounded ">Active</button>';
                }else{
                    $status = '<button type="button" id="'.$data->id.'"  value="'.$data->status.'"  class="status btn btn-xs btn-danger btn-rounded ">Disable</button>';
                }
                return $status;
            })->rawColumns(['action','status'])->make(true);
        }
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

    //This function return all category and brand that show into create form input field
    public function getCategoryBrandData(Request $request){

       $categoryName = $request->categoryName;
       $brandName = $request->brandName;

       if($categoryName == "category_id"){
            $data = Category::all()->where('status',1);
            $output = '<option value="">Choose '.ucfirst(' Category').'</option>';
            foreach ($data as $row){
                $output .= '<option value="' .$row->id. '">' .$row->name. '</option>';
            }
       }

        if($brandName == "brand_id"){
            $data = DB::table('tbl_brands')->where('Bstatus',1)->get();
            $output = '<option value="">Choose '.ucfirst(' Brand').'</option>';
            foreach ($data as $row){
                $output .= '<option value="' .$row->Bid. '">' .$row->Bname. '</option>';
            }
        }
        return response()->json(['data' => $output]);
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
            return response('Success');
        }else{
            return response('Error');
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
        if (request()->ajax()){
            $data =  Product::findOrFail($id);
            return response()->json(['data'=>$data]);
        }
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

    //status change here
    public function changeStatus(Product $product){
        $product['status'] = $product->status == 1 ? 0 :1;
        if($product->update()){
            return response()->json(['success','Status Change Successfully']);
        }else{
            return response()->json(['error','Status could not be Change']);
        }
    }
}
