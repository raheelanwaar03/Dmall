<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\admin\ProductManger;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function showProduct($id)
    {
        $catagorys = Catagory::all();
        $product = ProductManger::find($id);
        return view('User.Product.showProduct',compact('product','catagorys'));
    }

}
