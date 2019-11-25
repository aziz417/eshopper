<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use DB;

class WishlistController extends Controller
{
    public function index(){
        return view('frontend.pages.wishlist');
    }

    public function addWishlist($productId){
        $product = DB::table('tbl_products')->where('product_id',$productId)->first();
        $data['qty'] = 1;
        $data['id'] = $productId;
        $data['name'] = $product->Pname;
        $data['weight'] = 0;
        $data['price'] = $product->price;
        $data['options']['Pimage'] = $product->Pimage;
        Cart::instance('wishlist')->add($data);

        return redirect(route('show.wishlist'));
    }



    public function moveToWishList($productId){
        $product = DB::table('tbl_products')->where('product_id',$productId)->first();
        $data['qty'] = 1;
        $data['id'] = $productId;
        $data['name'] = $product->Pname;
        $data['weight'] = 0;
        $data['price'] = $product->price;
        $data['options']['Pimage'] = $product->Pimage;
        Cart::add($data);

        return redirect(route('cart.index'));
    }
}
