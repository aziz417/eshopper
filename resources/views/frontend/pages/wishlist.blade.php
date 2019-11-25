@include('frontend.elements.header')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">WishList</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Image</td>
                    <td class="price">Name</td>
                    <td class="quantity">Price</td>
                    <td class="total">Action</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php $contents = Cart::instance('wishlist')->content() ?>
                @foreach($contents as $data )
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{asset('images/products/'.$data->options->Pimage)}}" alt="" width="70" height="100"></a>
                        </td>
                        <td class="cart_description">
                            <h4>{{$data->name}}</h4>
                        </td>
                        <td class="cart_description">
                            <h4>{{$data->price}}</h4>
                        </td>

                        <td class="cart_delete cart_description">
                            <a class="cart_quantity_delete" href="{{ route('wishList.delete.single',$data->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                        <td class="">
                            <a href="{{ route('move.ToWishList',$data->id) }}">
                                <button class="btn btn-fefault cart">Move to cart</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->


@include('frontend.elements.footer')
