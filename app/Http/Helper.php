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

// checking user purchasing

function purchasingCheck()
{
    $purchasingCheck = Order::where('user_id',auth()->user()->id)->sum('order_price');
    return $purchasingCheck;
}


function referalCommissionOnShoping()
{
    $shoping_check = Order::where('user_id',auth()->user()->id)->sum('order_price');
    $referal_shop_bouns =  $shoping_check * 20 / 100;

    // finding the User
    $user = auth()->user();
    $referalUser = $user->referal;
    if($referalUser = 'default')
    {

    }
    else{
        $user = User::where('username',$referalUser)->first();
        $user->referal_bouns =+ $referal_shop_bouns;
        $user->save();
    }
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

function pendinOgrders()
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

// checking admin rerferal link condition

function referlinkLimit()
{
    $referLinkLimit = WidthrawLimit::where('limit', 1)->first();
    return $referLinkLimit->refer_limit;
}


// checking user Delivered order

function userDeliveredOrder()
{
    $userDeliveredOrder = order::where('user_id',auth()->user()->id)->where('status','delivered')->count();
    return $userDeliveredOrder;    
}

// checking user pending order

function userPendinOgrders()
{
    $userPendingOrder = Order::where('user_id',auth()->user()->id)->where('status','pending')->count();
    return $userPendingOrder;
}

// user all orders

function userAllOrders()
{
    $userAllOrder = Order::where('user_id',auth()->user()->id)->count();
    return $userAllOrder;
}