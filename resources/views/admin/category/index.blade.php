@extends('admin.layouts.master')
@section('mainContent')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Categories</h2>
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
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>All Categories</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="html5buttons">
                                    <div class="dt-buttons btn-group">
                                        <a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Copy</span></a>
                                        <a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>CSV</span></a>
                                        <a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Excel</span></a>
                                        <a class="btn btn-default buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>PDF</span></a>
                                        <a class="btn btn-default buttons-print" tabindex="0" aria-controls="DataTables_Table_0" href="#"><span>Print</span></a>
                                    </div>
                                </div>
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                                <div id="DataTables_Table_0_filter" class="dataTables_filter ">
                                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label>                                </div>
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div>
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 166px;">SI No</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="2" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count=1?></php>
                                    @foreach($AllCategory as $category)
                                        <tr class="gradeA odd" role="row">
                                            <td><?php echo $count++ ?></td>
                                            <td class="center">{{ $category->name }}</td>
                                            <td class="center">{{ Str::limit($category->description, 40) }}</td>
                                            <td class="center">
                                                @if($category->status == 1)
                                                    <a class=" " href="{{Route('category.status.unactive',$category->id)}}">
                                                        <span class="btn-xs btn-primary btn-rounded ">Active</span>
                                                    </a>
                                                @else
                                                    <a class=" " href="{{Route('category.status.active',$category->id)}}">
                                                        <span class=" btn-xs btn-danger btn-rounded " >Unactive</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="center">
                                                <div class="fsEdit">
                                                    <a title="Edit" href="{{ Route('category.edit',$category->id) }}" class="cus_mini_icon color-success">
                                                        <i class="fa fa-pencil-square-o "></i></a>

                                                </div>
                                                <div class="fsDelete">
                                                    <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="cus_mini_icon color-danger fsDltButton"><i class="fa fa-trash "></i></button>
                                                    </form>
                                                </div>




                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">SI No</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Description</th>
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
