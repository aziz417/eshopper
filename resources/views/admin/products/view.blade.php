@extends('admin.layouts.master')
@section('content')
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><span class="break"></span>Product details</h2>

            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>

        </div>
        <div class="box-content">
                @foreach($product as $p)
                <p><b>Product Name: </b>{{$p->Pname}}</p>
                <p><b>Category : </b>{{$p->Cname}}</p>
                <p><b>Brand : </b>{{$p->Bname}}</p>
                <p><b>Description: </b>{{$p->Pdescription}}</p>
                <p><b>price: </b>{{$p->price}}</p>
                {{--<p><b>image: </b>{{$p->Pimage}}</p>--}}
                <p><b>Size: </b>{{$p->Psize}}</p>
                <p><b>Color: </b>{{$p->Pcolor}}</p>
                <p><b>Status: </b>{{$p->Pstatus}}</p>
            @endforeach
                    <a class="btn btn-primary" style="float: right" href="{{Route('product.edit',$product->product_id)}}">Edit</a>
        </div>
    </div><!--/span-->
@endsection
