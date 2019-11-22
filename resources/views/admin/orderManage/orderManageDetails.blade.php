
@extends('admin.layouts.master')
@section('mainContent')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Orders Details</h2>
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
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Customer Details</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Customer Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Phone</th>
                                        {{--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Payment Method</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Order Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 141px;">Action</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <?php foreach ($orderDetailsInfo as $order){

                                        }?>
                                        <td class="center">{{$order->customerName}}</td>
                                        <td class="center">{{$order->customerEmail}}</td>
                                        <td class="center">{{$order->customerPhone}}</td>
                                    </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Shipping Details</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Email</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Phone</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">City</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Notes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php foreach ($orderDetailsInfo as $order){

                                        }?>
                                        <td class="center">{{$order->shippingFname.' '.$order->shippingLname}}</td>
                                        <td class="center">{{$order->shippingEmail}}</td>
                                        <td class="center">{{$order->shippingPhone}}</td>
                                        <td class="center">{{$order->shippingAddress}}</td>
                                        <td class="center">{{$order->shippingAddress}}</td>
                                        <td class="center">...</td>

                                    </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Order Details</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">SL No</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Product Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">Image</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Brand</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Quantity</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Sub Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count = 1;
                                    foreach ($orderDetailsInfo as $order){
                                    ?>
                                    <tr>
                                        <td class="center">{{ $count++ }}</td>
                                        <td class="center">{{ $order->productName }}</td>
                                        <td class="center">{{ $order->productName }}</td>
                                        <td class="center">{{ $order->productName }}</td>
                                        <td class="center">{{ $order->productPrice }} Tk</td>
                                        <td class="center">{{ $order->productSeles_qty }}</td>
                                        <td class="center">{{ $order->productPrice*$order->productSeles_qty }} Tk</td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                                <p class="float-right">Total {{ $order->orderTotal }} Tk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
