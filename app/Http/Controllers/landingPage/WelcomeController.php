<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\admin\ProductManger;
use App\Models\User\AddToCart;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function landingPage()
    {
        $products = ProductManger::paginate(10);
        $catagorys = Catagory::paginate(10);
        return view('LandingPage.welcome',compact('products','catagorys'));
    }

    public function aboutUs()
    {
        return view('LandingPage.aboutUs');
    }

    public function contactUs()
    {
        return view('LandingPage.contactUs');
    }
}
