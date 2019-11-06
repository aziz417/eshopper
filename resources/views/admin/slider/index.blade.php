@extends('admin.layouts.master')
@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><span class="break"></span>All Sliders</h2>
            <span style="float: right"><a href="{{url('')}}" class="btn-success">Add Slider</a></span>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <div style="float: right">
                 <span class="alert-success align-right">
                <?php
                     $massage = Session::get('massage');
                     if($massage){
                         echo $massage;
                         Session::forget('massage');
                     }
                     ?>
             </span>
                </div>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div><!--/span-->
@endsection
