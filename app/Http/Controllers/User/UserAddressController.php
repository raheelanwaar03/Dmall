<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function userAddress()
    {
        $catagorys = Catagory::all();
        return view('User.Account.addAddress',compact('catagorys'));
    }
}
