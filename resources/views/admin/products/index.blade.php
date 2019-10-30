@extends('admin.layouts.master')
@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><span class="break"></span>All Products</h2>

            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <div style="float: right">
                 <span class="alert-success align-right">
                <?php
                     $massage = Session::get('massage');
                     if($massage){
                         echo $massage;
                         Session::put(NULL);
                     }
                     ?>
             </span>
                </div>
                <tr>
                    <th>SL</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Image</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $count=1?></php>
                @foreach($AllProducts as $product)
                    <tr>
                        <td><?php echo $count++ ?></td>
                        <td class="center">{{ ucfirst($product->Pname) }}</td>
                        <td class="center">{{ ucfirst($product->Cname) }}</td>
                        <td class="center">{{ ucfirst($product->Bname) }}</td>
                        <td class="center">{{ $product->Pstatus }}</td>
                        <td class="center">Not found</td>
                        {{--<td class="center">{{ Str::limit($product->description, 40) }}</td>--}}
                        <td class="center">
                            @if($product->Pstatus == 1)
                                <span class="label label-success">Active</span>
                            @else
                                <span class="label btn-danger">Unactive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($product->Pstatus == 1)
                                <a class="btn btn-danger" href="{{Route('status.unactive',$product->product_id)}}">
                                    <i class="halflings-icon white thumbs-down"></i>
                                </a>
                            @else
                                <a class="btn btn-success" href="{{Route('status.active',$product->product_id)}}">
                                    <i class="halflings-icon white thumbs-up"></i>
                                </a>
                            @endif
                            <a class="btn btn-info" href="{{--{{Route('product.edit',$product->product_id)}}--}}">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="{{--{{Route('product.delete',$product->product_id)}}--}}" id="delete">
                                <i class="halflings-icon white trash"></i>
                            </a>
                                <a class="btn btn-success" href="{{--{{Route('product.delete',$product->product_id)}}--}}" id="delete">
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
