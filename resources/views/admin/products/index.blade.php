@extends('admin.layouts.master')
@section('mainContent')
    <div class="row">
    <div class="col-lg-10">
        <h2>All Products</h2>
        @include('partials.flash_messages.flashMessages')<span class="text-success" id="success"></span>
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
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="modalShow">
                <i class="fa fa-plus"></i>  Create
            </button>
        </div>
    </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
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
                                    <label>Show
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                </div>
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div>
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 166px;">Id</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Slug</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Brand</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">Category</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 140px!important;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 105px!important;">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">Color</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 190px!important;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Id</th>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Slug</th>
                                        <th rowspan="1" colspan="1">Brand</th>
                                        <th rowspan="1" colspan="1">Category</th>
                                        <th rowspan="1" colspan="1">Description</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Price</th>
                                        <th rowspan="1" colspan="1">Color</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="1">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
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

        // get data and show into datatable
        $(document).ready(function(){
                                //Get all and show in dataTables
            $('#DataTables_Table_0').DataTable({
                processing: true,
                serverSide: true,
                ajax:{
                    url: "{{ route('product.index') }}",
                },
                columns:[
                    { data:'id', name:'id' },
                    { data:'name', name:'Name' },
                    { data:'slug', name:'Slug' },
                    { data:'brand_id', name:'Brand' },
                    { data:'category_id', name:'Category' },
                    { data:'description', name:'Description' },
                    { data: 'image', name: 'Image',
                        render: function( data, type, full, meta ) {
                            return '<img class="img-thumbnail" style="width: 80px; height: 80px;"'+
                                'src="{{asset('backend/uploads_images/product/')}}/'+data+'"/>';
                        },
                        orderable: false
                    },
                    { data:'price',  name:'Price' },
                    { data:'size',  name:'Size' },
                    { data:'status', name:'Status', orderable:false },
                    { data:'action', name:'Action', orderable:false }
                ]
            });
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
                        $('#DataTables_Table_0').DataTable().ajax.reload();
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
                            });
                    }
                });
            }

        });

        // edit modal form show
        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $.ajax({
                url:"product/"+id+"/edit",
                method: "GET",
                data:{id:id},
                dataType:"JSON",

                success: function(feedBackResult){
                    $('#productForm')[0].reset();
                    $('#row_id').val(feedBackResult.data.id); // for row id hidden field
                    $('#productHiddenImageName').val(feedBackResult.data.id); // for image hidden name

                    $('#name').val(feedBackResult.data.name); // for product name
                    $('#price').val(feedBackResult.data.price); // for product price
                    $('#size').val(feedBackResult.data.size) // for product size
                    $('#color').val(feedBackResult.data.color) // for color
                    $('#description').val(feedBackResult.data.description) // for description
                    $('#category').append('<option name="category1" selected value="'+feedBackResult.data.id+'">'+ feedBackResult.data.name +'</option>');
                    $('#brand').append('<option name="brand1" selected value="'+feedBackResult.data.id+'">'+ feedBackResult.data.name +'</option>');

                    // status verified here
                    if(feedBackResult.data.status == 1){
                        $('#status').attr('checked', true); // it's only get value
                        $('#status').parent().addClass('checked'); // it's only show right singe
                    }

                    // feature verified here
                    if(feedBackResult.data.featured == 1){
                        $('#featured').attr('checked', true); // it's only get value
                        $('#featured').parent().addClass('checked'); // it's only show right singe
                    }

                    // here image name set into img tag
                    $('#output_image').attr('src', '{{asset('backend/uploads_images/product/')}}/' + feedBackResult.data.image + '');
                    $("#modalTitle").text('Edit Product');
                    $("#action").text('Update');
                    $("#action").val('update');
                    $("#myModal5").modal('show');
                }
            });
        });

        //

         // product status change here
        $(document).on('click', '.status', function () {
            var id = $(this).attr('id');
            var status = $(this).val();
            $.ajax({
                url: "product/status/"+id+"",
                method:"POST",
                data:status,
                type:"JSON",
                success:function (data) {
                    $('#DataTables_Table_0').DataTable().ajax.reload();
                }
            });
        });
    </script>
@endpush


