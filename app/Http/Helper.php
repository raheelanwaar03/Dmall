<?php


// create a random product Id

use App\Models\admin\Transcation\WidthrawLimit;
use App\Models\Transctions\WidthrawlAmount;
use App\Models\User;
use App\Models\User\AddToCart;
use App\Models\User\Order;

function  productId()
{
    $productId = rand(1111,9999999);
    return $productId;
    // storing in session
    session()->put('Product_id', $productId);
}

function cartProduct()
{
        $cartProduct = AddToCart::where('user_id',auth()->user()->id)->count();
        return $cartProduct;
}

function cartProductQuantity()
{
    $orderProduct = AddToCart::where('user_id',auth()->user()->id)->sum('cart_product_qty');
    return $orderProduct;
}

function orderTotalPrice()
{
    $cartProductPrice = AddToCart::where('user_id',auth()->user()->id)->sum('product_price');
    return $cartProductPrice;
}

function consign_num()
{
    $consign_num = rand(111111,99999);
    return $consign_num;
}

// check User Referal commission

function referalBouns()
{
    $user = User::where('id',auth()->user()->id)->first();
    $bouns = $user->referal_bouns;
    return $bouns;
}

function referalCommissionOnShoping()
{
    $shoping_check = Order::where('user_id',auth()->user()->id)->sum('order_price');
    $referal_shop_bouns =  $shoping_check * 20 / 100;

    // finding the User
    $user = auth()->user();
    $referalUser = $user->referal;
    $user = User::where('username',$referalUser)->first();
    $user->referal_bouns += $referal_shop_bouns;
    $user->save();
}

// checking all users

function allUsers()
{
    $user = User::all();
    return  $user->count();
}

// All Orders
function allOrders()
{
    $order = Order::all();
    return $order->count();
}

// totla Pending Orders

function pendingOrders()
{
    $pendingOrder = Order::where('status','pending')->get();
    return $pendingOrder->count();
}

// Total Delivered Orders

function deliveredOrder()
{
    $deliveredOrder = Order::where('status','delivered')->get();
    return $deliveredOrder->count();
}

