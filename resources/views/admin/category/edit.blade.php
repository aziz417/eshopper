@extends('admin.layouts.master')
@section('content')
    <!-- start: Content -->
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Forms</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{ Route('category.update') }}" method="post">
                    {{ csrf_field() }}
                    @include('admin.category.element')
                </form>

            </div>
        </div><!--/span-->
@endsection

        @extends('admin.layouts.master')
        @section('mainContent')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit Category</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tables</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                    <div class="ibox-tools">
                        <a href="{{ route('add.category') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                            <i class="fa fa-plus"></i> <strong>Create</strong></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Category</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{ Route('category.update') }}" method="post">
                                @csrf
                                @include('admin.category.element')
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <a href="{{route('all.categories')}}" class="btn btn-sm btn-warning t m-t-n-xs"><strong>Cancel</strong></a>
                                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit">
                                            <strong>Update</strong></button>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection

