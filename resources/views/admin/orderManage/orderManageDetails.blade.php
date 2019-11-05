@extends('admin.layouts.master')
@section('content')

        <div class="box span12">
            <div class="row">
                <div class="span6">
                    <div class="box-header">
                        <h2><span class="break"></span>Customer Details</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>Customer Name:</th>
                                <th>Customer Phone:</th>
                                <th>Email:</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <?php foreach ($orderDetailsInfo as $order){

                                }?>
                                <td class="center">{{$order->customerName}}</td>
                                <td class="center">{{$order->customerPhone}}</td>
                                <td class="center">{{$order->customerEmail}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="span6">
                    <div class="box-header">
                        <h2><span class="break"></span>Shipping Details</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>Shipping Name:</th>
                                <th>Address:</th>
                                <th>Phone:</th>
                                <th>Email:</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php foreach ($orderDetailsInfo as $order){

                                }?>
                                <td class="center">{{$order->shippingFname.' '.$order->shippingLname}}</td>
                                <td class="center">{{$order->shippingAddress}}</td>
                                <td class="center">{{$order->shippingPhone}}</td>
                                <td class="center">{{$order->shippingEmail}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="box-header">
                        <h2><span class="break"></span>Order details</h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>Product Id:</th>
                                <th>Product Name:</th>
                                <th>Quentity:</th>
                                <th>Price:</th>
                                <th>Sub-Total:</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orderDetailsInfo as $order){
                                ?>
                            <tr>
                                <td class="center">{{$order->productId}}</td>
                                <td class="center">{{$order->productName}}</td>
                                <td class="center">{{$order->productSeles_qty}}</td>
                                <td class="center">{{$order->productPrice}}</td>
                                <td class="center">{{$order->productPrice*$order->productSeles_qty}}</td>
                            </tr>
                            <?php }?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4">Total With vat:</td>
                                <td><strong>={{$order->orderTotal}}</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/span-->
@endsection
@include('admin.elements.footer')
