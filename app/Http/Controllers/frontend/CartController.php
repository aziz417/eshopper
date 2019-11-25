<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;



class CartController extends Controller
{
    public function addToCart(Request $request,$Pid){
        $product = DB::table('tbl_products')->where('product_id',$Pid)->first();
        $data['qty'] = $request->quantity;
        $data['id'] = $Pid;
        $data['name'] =$product->Pname;
        $data['weight'] =0;
        $data['price'] =$product->price;
        $data['options']['Pimage'] =$product->Pimage;
        Cart::add($data);
        return redirect(route('cart.index'));
    }

    public function CartIndex(){
        //$category = DB::table('tbl_category')->where('Cstatus',1)->get();
        return view('frontend.pages.cartIndex'/*,compact('category')*/);
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
