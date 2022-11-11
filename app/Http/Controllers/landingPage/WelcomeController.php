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
        $catagorys = Catagory::all();
        return view('LandingPage.welcome', compact('products', 'catagorys'));
    }

    public function index()
    {
        $products = ProductManger::paginate(8);
        $catagorys = Catagory::all();
        return view('LandingPage.allProducts', compact('products', 'catagorys'));
    }

    public function aboutUs()
    {
        $catagorys = Catagory::all();
        return view('LandingPage.aboutUs', compact('catagorys'));
    }

    public function contactUs()
    {
        $catagorys = Catagory::all();
        return view('LandingPage.contactUs', compact('catagorys'));
    }

    public function search(Request $request)
    {
        $catagorys = Catagory::all();
        $searchText = $request->search;
        $products = ProductManger::where('product_name','LIKE','%'.$searchText.'%')
        ->orWhere('product_catagory','LIKE','%'.$searchText.'%')
        ->orWhere('product_price','LIKE','%'.$searchText.'%')->get();
        return view('LandingPage.search',compact('products','catagorys'));
    }
}
