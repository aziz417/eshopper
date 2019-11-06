@extends('admin.layouts.master')
@section('content')
    <!-- start: Content -->

    <div class="row-fluid sortable">
        <?php
        if(!empty($massege)){
            echo $massege;
        }
        ?>
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Slider Add</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.slider.element')
                </form>
            </div>
        </div>
    </div>
@endsection

