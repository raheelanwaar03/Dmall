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
        $catagorys = Catagory::first();
        return view('User.Account.addAddress',compact('catagorys'));
    }

    public function store(Request $request)
    {
        if(auth()->user()->user_id)

       $validated =  $request->validate([
            'user_city' => 'required',
            'user_area' => 'required',
            'user_street' => 'required',
        ]);

        $user = UserAddress::where('user_id',auth()->user()->id)->first();

        if($user)
        {
            return redirect()->back()->with('error','You already added your Address Update the existing One');
        }

        $userAddress = new UserAddress();
        $userAddress->user_id = auth()->user()->id;
        $userAddress->user_city = $validated['user_city'];
        $userAddress->user_area = $validated['user_area'];
        $userAddress->user_street = $validated['user_street'];
        $userAddress->user_zip = $request->user_zip;
        $userAddress->save();
        return redirect()->back()->with('success','Your Address Saved Successfuly');
    }

    public function index()
    {
        $catagorys = Catagory::all();
        $userAddress = UserAddress::where('user_id',auth()->user()->id)->get();
        return view('User.Account.addresses',compact('catagorys','userAddress'));
    }

    public function edit($id)
    {
        $userAddress = UserAddress::find($id);
        $catagorys = Catagory::all();
        return view('User.Account.edit',compact('catagorys','userAddress'));
    }

    public function update(Request $request,$id)
    {
        $userAddress = UserAddress::find($id);
        $userAddress->user_id = auth()->user()->id;
        $userAddress->user_city = $request->user_city;
        $userAddress->user_area = $request->user_area;
        $userAddress->user_street = $request->user_street;
        $userAddress->user_zip = $request->user_zip;
        $userAddress->save();
        return redirect()->route('User.Address.index')->with('success','Address Updated Succfully');
    }
}
