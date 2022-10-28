<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\User\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function userAddress()
    {
        $catagorys = Catagory::all();
        return view('User.Account.addAddress',compact('catagorys'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_city' => 'required',
            'user_area' => 'required',
            'user_street' => 'required',
        ]);

        $userAddress = new UserAddress();
        $userAddress->user_id = auth()->user()->id;
        $userAddress->user_city = $validated['user_city'];
        $userAddress->user_area = $validated['user_area'];
        $userAddress->user_street = $validated['user_street'];
        $userAddress->user_zip = $request->user_zip;
        $userAddress->save();
        return redirect()->back()->with('success','Your Address Saved Successfuly');
    }
}
