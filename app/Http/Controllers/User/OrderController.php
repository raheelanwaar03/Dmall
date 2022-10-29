<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\AddToCart;
use App\Models\User\Order;
use App\Models\User\UserAddress;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('User.Order.index');
    }

    public function store()
    {
        // checking if user enter his address or not
        $checkAddress = UserAddress::where('user_id',auth()->user()->id)->first();
        if($checkAddress == null)
        {
            return redirect()->back()->with('error','You did not Provide your Address');
        }

        $products = AddToCart::where('user_id',auth()->user()->id)->get();

        foreach ($products as $product)
        {
            $orderProduct = new Order();
            $orderProduct->user_id = $product['user_id'];
            $orderProduct->user_email = auth()->user()->email;
            $orderProduct->consign_num = consign_num();
            $orderProduct->product_name = $product->product_name;
            $orderProduct->product_id = $product->product_id;
            $orderProduct->product_qty = $product->cart_product_qty;
            $orderProduct->product_img = $product->product_img;
            $orderProduct->item_price = $product->item_price;
            $orderProduct->order_price = orderTotalPrice();
            $orderProduct->payment_method = "Cash On Delivery";
            $orderProduct->save();

            $cart_id = $product->id;
            $cart = AddToCart::find($cart_id);
            $cart->delete();

        }
        return redirect()->back()->with('success','You Placed the order Admin will contact you soon!');



    }
}
