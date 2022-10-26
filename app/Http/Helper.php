<?php


// create a random product Id


function  productId()
{
    $productId = rand(1111,9999999);
    // storing in session
    session()->put('Product_id', $productId);

}
