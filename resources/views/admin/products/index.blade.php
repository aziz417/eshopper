
@extends('admin.layouts.master')
@section('mainContent')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>All Products</h2>
            <span class="text-success" id="success"></span>
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

            @include('admin.products.modal')
            <div class="ibox-tools">
                {{--<a href="{{ route('add.product') }}" class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                    <i class="fa fa-plus"></i> <strong>Create</strong></a>--}}
                <div class="text-center">
                    <button type="button" class="btn btn-primary" id="modalShow">
                        <i class="fa fa-plus"></i>  Create
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>All Products</h5>
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
                                            <th class="sorting_asc" style="width: 60px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 166px;">SI No</th>
                                            <th class="sorting_asc" style="width: 130px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Name</th>
                                            <th class="sorting_asc" style="width: 130px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Brand</th>
                                            <th class="sorting_asc" style="width: 170px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Category</th>
                                            <th class="sorting_asc" style="width: 100px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Image</th>
                                            <th class="sorting_asc" style="width: 290px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Price</th>
                                            <th class="sorting_asc" style="width: 105px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Status</th>
                                            <th class="sorting_asc" style="width: 110px" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                            <td class="center">Name</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">SI No</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Brand</th>
                                        <th rowspan="1" colspan="1">Category</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Price</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="1">Action</th>
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

@push('custom-js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            //  Modal form show
        $('#modalShow').on('click', function () {
            $('#modalTitle').html('');
            $('#modalTitle').html('Add Product');
            $('#action').html('');
            $('#action').html('Add Product');
            $('#myModal5').modal('show');
            $('#productForm')[0].reset();
        });

        // show all category into the input field.
        $(document).ready(function () {
            var categoryName = $('#category').attr('name');
            $.ajax({                    // it is one way another way apply brand data get
                url: "{{ route('get.CategoryBrand.data') }}",
                method:"POST",
                data:{categoryName:categoryName},
                dataType:"JSON",
                success:function (feedBackResult) {
                    $("#category").html(feedBackResult.data);
                },
            });
        });

        $(document).ready(function () {
            var brandName = $('#brand').attr('name');
                $.ajax({                            //comment out another way just method change
                    url: "{{ route('get.CategoryBrand.data') }}",
                    method:"POST",
                    data:{brandName:brandName},
                    dataType:"JSON",
                    success:function (feedBackResult) {
                        $("#brand").html(feedBackResult.data);
                    },
                });
        });

        // show all brand into the input field.

        //modal form input data save

        $('#productForm').on('submit', function (e) {
            e.preventDefault();
            if ($('#action').val() == "Add Product") {

                var formData = new FormData($('#productForm')[0]);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route("product.store") }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function (data) {
                        $('#productForm')[0].reset();
                        ///$('#user_table').DataTable().ajax.reload();
                        $('#myModal5').modal('hide');
                        if(data){
                            swal({
                                title: 'Product Save',
                                text: 'Thank-You',
                                icon: 'success',
                                timer: 1200,
                                buttons: false,
                            })
                                .then(() => {
                                    dispatch(redirect('/'));
                                })
                        }
                    },
                    error: function (data) {
                        swal({
                            title: 'Product Save Fail',
                            text: 'Sorry',
                            icon: 'Error',
                            timer: 3000,
                            buttons: false,
                        })
                            .then(() => {
                                dispatch(redirect('/'));
                            })
                    }
                });
            }

        });
    </script>
@endpush


