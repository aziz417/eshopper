<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllCategory = DB::table('tbl_category')->get();
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
        $data = array();
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
        $category = DB::table('tbl_category')->where('Cid',$id)->first();
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

        DB::table('tbl_category')->where('Cid',$id)->update($data);

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
        DB::table('tbl_category')->where('Cid',$id)->delete();
        Session::put('massage','Category Deleted Successfully');
        return Redirect::back();
    }

    public function StatusUnActive($Cid){
        DB::table('tbl_category')->where('Cid',$Cid)
            ->update(['Cstatus' => NULL ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }

    public function StatusActive($Cid){
        DB::table('tbl_category')->where('Cid',$Cid)
            ->update(['Cstatus' => 1 ]);
        Session::put('massage','Your status change');
        return Redirect::back();
    }
}
