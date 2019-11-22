<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests;
use Session;
use Illuminat;

class OrderController extends Controller
{
    public function OrderManage(){
        $orderInfo = DB::table('tbl_order')
            ->join('tbl_customers','tbl_order.customerID','=','tbl_customers.id')
            ->select('tbl_order.*','tbl_customers.customerName')
            ->orderBy('tbl_order.orderId','DESC')->get();
        return view('admin.orderManage.orderManage',compact('orderInfo'));
    }


    public function OrderDetails($orderId){
       /* $orderDetailsInfo = DB::table('tbl_order')
            ->join('tbl_order_details','tbl_order.orderId','=','tbl_order_details.orderId')
            ->join('tbl_products','tbl_order_details.productId','=','tbl_products.product_id')
            ->join('tbl_category','tbl_products.category_id','=','tbl_category.Cid')
            ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.Bid')
            ->join('tbl_shipping','tbl_order.shippingId','=','tbl_shipping.shippingId')
            ->join('tbl_payment','tbl_order.paymentId','=','tbl_payment.paymentId')
            ->join('tbl_customers','tbl_order.customerID','=','tbl_customers.id')
            ->select('tbl_products.*','tbl_order_details.productSeles_qty','tbl_order.orderTotal','tbl_order.created_at'
                ,'tbl_shipping.*','tbl_payment.paymentMethod','tbl_payment.created_at','tbl_customers.customerName',
                'tbl_customers.customerEmail','tbl_customers.customerPhone','tbl_category.Cname','tbl_brands.Bname')
            ->select('tbl_order.*','tbl_order_details.*','tbl_products.*','tbl_category.*','tbl_brands.*','tbl_shipping.*',
                'tbl_payment.*','tbl_customers.*')
            ->get();*/
          $orderDetailsInfo = DB::table('tbl_order')
            ->join('tbl_customers','tbl_order.customerID','=','tbl_customers.id')
            ->join('tbl_order_details','tbl_order.orderId','=','tbl_order_details.orderId')
            ->join('tbl_shipping','tbl_order.shippingId','=','tbl_shipping.shippingId')
            ->select('tbl_order.*','tbl_shipping.*','tbl_order_details.*','tbl_customers.*')
            ->get();

        return view('admin.orderManage.orderManageDetails',compact('orderDetailsInfo'));
    }

}
