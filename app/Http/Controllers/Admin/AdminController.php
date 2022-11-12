<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ProductManger;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    public function allUsers()
    {
        $users = User::all();
        return view('Admin.User.allUser',compact('users'));
    }

    public function userBan($id)
    {
        $user = User::find($id);
        $user->account_type = 'banned';
        $user->save();
        return redirect()->back()->with('success','User account Banned Successfuly');
    }

    public function registerId($id)
    {
        $user = User::find($id);
        $user->account_type  = 'registered';
        $user->save();
        return redirect()->back()->with('success','User account is registered Successfuly');
    }

    public function registeredUser()
    {
        $users = User::where('account_type','registerd')->get();
        return view('Admin.User.registeredUser');
    }

    public function bannedUser()
    {
        $uesrs = User::where('account_type','banned')->get();
        return view('Admin.User.bannedUser');
    }

    public function adminSearch(Request $request)
    {
        $searchText = $request->search;

        $products = ProductManger::where('product_name','LIKE','%'.$searchText.'%')
        ->orWhere('product_price','LIKE','%'.$searchText.'%')
        ->orWhere('product_catagory','LIKE','%'.$searchText.'%')->get();

        return view('Admin.search',compact('products'));
    }

}
