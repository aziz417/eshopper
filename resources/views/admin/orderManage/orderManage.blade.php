@extends('admin.layouts.master')

@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><span class="break"></span>All Order</h2>

            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Customer Name:</th>
                    <th>Customer Id:</th>
                    <th>Shipping Id:</th>
                    <th>Payment Id:</th>
                    <th>Order Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php($count=1)
                @foreach($orderInfo as $order)
                    <tr>
                        <td><?php echo $count++ ?></td>
                        <td class="center">{{ Str::limit($order->customerName, 40) }}</td>
                        <td class="center">{{ $order->customerID }}</td>
                        <td class="center">{{ Str::limit($order->shippingId, 40) }}</td>
                        <td class="center">{{ Str::limit($order->paymentId, 40) }}</td>
                        <td class="center">{{ Str::limit($order->orderTotal, 40) }}</td>
                        <td class="center">{{ Str::limit($order->orderStatus, 40) }}</td>
                        <td class="center">
                            <a class="btn btn-success" href="{{Route('order.details',$order->orderId)}}">
                                <i class="halflings-icon white eye-open"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div><!--/span-->
@endsection
