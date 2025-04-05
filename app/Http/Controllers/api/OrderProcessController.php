<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Stock;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrderProcessController extends Controller
{
    function index(Request $request)
    {

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        //  $customer->password=$request->password;
        // $customer->password = Hash::make($request->password);
        $customer->phone = $request->phone;
        //  if(isset($request->photo)){
        //      $customer->photo=$request->photo;
        //  }
        $customer->address = $request->address;
        date_default_timezone_set("Asia/Dhaka");
        $customer->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $customer->updated_at = date('Y-m-d H:i:s');

        if ($customer->save()) {
            $last_customer_id = $customer->id;
            // Do something with $last_customer_id
        } else {
            $last_customer_id = 1;
        }

        $order = new Order;
        $order->customer_id = (int) $last_customer_id;
        $order->total_price = $request->total_price;
        $order->order_status_id = 1;
        $order->payment_status_id = 1;
        date_default_timezone_set("Asia/Dhaka");
        $order->created_at = date('Y-m-d H:i:s');
        date_default_timezone_set("Asia/Dhaka");
        $order->updated_at = date('Y-m-d H:i:s');

        $order->save();

        //   $order->id;

        foreach ($request->products as $key => $product) {
            $orderdetail = new OrderDetail;
            $orderdetail->order_id = $order->id;
            $orderdetail->product_id = $product['item_id'];
            $orderdetail->quantity = $product['qty'];
            $orderdetail->price = $product['price'];
            $orderdetail->discount = $product['discount'];
            $orderdetail->subtotal = $product['subtotal'];
            date_default_timezone_set("Asia/Dhaka");
            $orderdetail->created_at = date('Y-m-d H:i:s');
            date_default_timezone_set("Asia/Dhaka");
            $orderdetail->updated_at = date('Y-m-d H:i:s');

            $orderdetail->save();


            $stock = new Stock;
            $stock->product_id = $product['item_id'];
            $stock->transaction_type = "sales";
            $stock->quantity = $product['qty'] * -1;
            date_default_timezone_set("Asia/Dhaka");
            $stock->updated_at = date('Y-m-d H:i:s');
            $stock->save();
        }

        return response()->json(['success' => "Order Place successfully"]);
    }

    function allOrders(){
        $orders= Order::with('customer')->get();
        return response()->json(["orders"=>$orders]);
    }
    function invoice(Request $request){
        $invoice= Order::with(['customer','orderDetails','orderDetails.product'])->where("id", $request->id)->get();
        return response()->json(["invoice"=>$invoice]);
    }

}
