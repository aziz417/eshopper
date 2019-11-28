<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);


        $category = new Category;
        $category->Cname        = $request->name;
        $category->Cdescription = $request->description;
        $category->Cstatus      = $request->status;

        $category->save();
        return redirect(route('category.index'));


        /*$data = array();
        $data['Cname'] = $request->name;
        $data['Cdescription'] = $request->description;
        $data['Cstatus'] = $request->status;

        $result = DB::table('tbl_category')->insert($data);
        if($result){
            Session::put('massage','Category Store Successfully');
            return Redirect()->back();
        }else{
            Session::put('massage','Category Store Unsuccessfully');
            return Redirect()->back();
        }*/
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
        $category = DB::table('categories')->where('Cid',$id)->first();
        return view('admin.category.edit',compact('category'));
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
        $data = array();
        $data['Cid']          = $request->id;
        $data['Cname']        = $request->name;
        $data['Cdescription'] = $request->description;
        $data['Cstatus']      = $request->status;

        DB::table('categories')->where('Cid',$id)->update($data);

        return Redirect::route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('Cid',$id)->delete();
        Session::put('massage','Category Deleted Successfully');
        return Redirect::back();
    }

    public function StatusUnActive($Cid){
        DB::table('categories')->where('Cid',$Cid)
            ->update(['Cstatus' => NULL ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }

    public function StatusActive($Cid){
        DB::table('categories')->where('Cid',$Cid)
            ->update(['Cstatus' => 1 ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }
}
