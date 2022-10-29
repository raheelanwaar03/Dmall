<?php


// create a random product Id

use App\Models\User\AddToCart;

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

function productPrice()
{
    $cartProductPrice = AddToCart::where('user_id',auth()->user()->id)->sum('product_price');
    return $cartProductPrice;
}
