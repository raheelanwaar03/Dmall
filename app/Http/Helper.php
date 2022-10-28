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
    $cartProduct = AddToCart::where('user_id',auth()->user()->id)->get();
    return $cartProduct->count();
}
