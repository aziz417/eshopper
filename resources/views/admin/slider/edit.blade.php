@extends('admin.layouts.master')
@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Slider Edit</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{Route('slider.update')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('admin.slider.element')
                </form>

            </div>
        </div><!--/span-->
    </div>
@endsection
