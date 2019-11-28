
@extends('admin.layouts.master')
@section('mainContent')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Create Category</h2>
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
                <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                    <i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Create category</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" action="{{ Route('category.store') }}" method="post">
                        {{ csrf_field() }}
                        @include('admin.category.element')
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <a href="{{route('category.index')}}" class="btn btn-sm btn-warning t m-t-n-xs"><strong>Cancel</strong></a>
                                <button class="btn btn-sm btn-primary m-t-n-xs" type="submit">
                                    <strong>Submit</strong></button>
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

