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
    return $shoping_check;

    // if ($shoping_check >= '10000' )
    // {
    //     $check_referal_default = User::where('referal',auth()->user()->username)->first();
    //     // checking the commission that in admin is giving
    //     $referal_bouns_admin = WidthrawLimit::first();
    //     $referal_bouns_admin = $referal_bouns_admin->referal_bouns;
    //     // giving the bouns to the user who refer this user.
    //     // $user->referal_bouns = $referal_bouns_admin;
    //     // $user->save();
    // }

}


