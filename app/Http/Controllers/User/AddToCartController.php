<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\ProductManger;
use App\Models\User\AddToCart;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function store(Request $request,$id)
    {
        $product = ProductManger::find($id);
        $cartProduct = new AddToCart();
        $cartProduct->user_id = auth()->user()->id;

        if($product->product_discount)
        {
        $cartProduct->product_price = $product->product_discount * $request->cart_qty;
        }
        else{
            $cartProduct->product_price = $product->product_price * $request->cart_qty;
        }

        $cartProduct->product_img = $product->product_img;
        $cartProduct->product_id = $product->product_id;
        $cartProduct->cart_product_qty = $request->cart_qty;
        $cartProduct->save();
        return redirect()->back()->with('success','Product added to cart successfuly');
    }
}
