<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;



class CartController extends Controller
{
    public function addToCart(Request $request,$Pid){
        $product = DB::table('products')->where('id',$Pid)->first();


        $data['qty'] = $request->quantity;
        $data['id'] = $Pid;
        $data['name'] =$product->name;
        $data['weight'] =0;
        $data['price'] =$product->price;
        $data['options']['image'] =$product->image;
        Cart::add($data);


        return redirect(route('cart.index'));
    }

    public function CartIndex(){
        $AllData = Cart::content();
        return view('frontend.pages.cartIndex',compact('AllData'));
    }

    public function CartDeleteSingle($rowId){
        Cart::update($rowId,0);
       return redirect(route('cart.index'));

    }

    public function CartUpdate(Request $request){
        $rowId = $request->rowId;
        $qty= $request->qty;

        Cart::update($rowId,$qty);
        return redirect(route('cart.index'));
    }
}
