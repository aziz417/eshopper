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
                            <h4><a href="">{{$data->name}}</a></h4>
                        </td>
                        <td class="cart_price">
                            <p>{{$data->price}}</p>
                        </td>

                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{ route('cart.delete.single',$data->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                        <td class="cart_delete">
                            <a href="{{ route('move.ToWishList',$data->id) }}" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Move to cart</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->


@include('frontend.elements.footer')
