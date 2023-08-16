<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function addToCart($id){

        if (session("user_id")) {

            $data = Product::find($id);
            $orderItem = new OrderItem();
            $orderItem->user_id = session("user_id");
            $orderItem->product_id = $data->id;
            $orderItem->order_items_quantity = 1;
            $orderItem->save();
            session(["added" => 'cart']);
        
            $order = Order::where('user_id', session("user_id"))->first();
        
            if ($order == null) {
                $neworder = new Order();
                $neworder->user_id = session("user_id");
                $neworder->total_amount = $orderItem->order_items_quantity * $data->price;
                $neworder->order_date = now();
                $neworder->save();
            } else {
                $userorder = OrderItem::where('user_id', session('user_id'))->get();
                $totalprice = 0;
        
                foreach ($userorder as $orderItem) {
                    $product = Product::find($orderItem->product_id);
                    $totalprice += $orderItem->order_items_quantity * $product->price;
                }
        
                $order->total_amount = $totalprice;
                $order->save();
            }
        
            session(["productAdded" => "true"]);
            return redirect("/");
        } else {
            return redirect("/login-pass");
        }

    }
    public function displayCart(){

        if(session("user_id")) {

            $order=Order::where('user_id', session('user_id'))->get();
            $order_item=OrderItem::join("products", "order_items.product_id", "=", "products.id")->get();

            return view("cart", ['order'=>$order,'order_items'=>$order_item]);
        }
        else{
            return redirect("/login-pass");
        }
    }

    public function placeOrder(){
        session(["order"=>"true"]);
        return redirect("/");
    }
}
