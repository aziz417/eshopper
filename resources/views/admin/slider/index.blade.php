

@extends('admin.layouts.master')
@section('mainContent')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Slider</h2>
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
                <a href="{{ route('slider.add') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                    <i class="fa fa-plus"></i> <strong>Create</strong></a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>All Sliders</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Sl No</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=1?></php>
                                    @foreach($sliderItem as $dataItem)
                                        <tr>
                                            <td><?php echo $count++ ?></td>
                                            <td class="center">{{ ucfirst($dataItem->name) }}</td>
                                            <td class="center"><img src="{{asset('images/products/'.$dataItem->image)}}" width="50" height="60"></td>
                                            <td class="center">
                                                @if($dataItem->status == 1)
                                                    <a class=" " href="{{Route('slider.status.unactive',$dataItem->id)}}">
                                                        <span class="btn-xs btn-primary btn-rounded ">Active</span>
                                                    </a>
                                                @else
                                                    <a class=" " href="{{Route('slider.status.active',$dataItem->id)}}">
                                                        <span class=" btn-xs btn-danger btn-rounded " >Unactive</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="center">
                                                <a title="Edit" href="{{ Route('slider.edit',$dataItem->id) }}" class="cus_mini_icon color-success">
                                                    <i class="fa fa-pencil-square-o "></i></a>
                                                <a title="Delete" href="{{ Route('slider.delete',$dataItem->id) }}" data-toggle="modal" data-target="#myModal6" type="button" class="cus_mini_icon color-danger">
                                                    <i class="fa fa-trash "></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">SI No</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="2">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                        </li><li class="paginate_button page-item ">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                            <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

