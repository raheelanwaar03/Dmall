<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $users = User::where('account_type','registered')->get();
        return view('Admin.User.registeredUser',compact('users'));
    }

    public function bannedUser()
    {
        $users = User::where('account_type','banned')->get();
        return view('Admin.User.bannedUser',compact('users'));
    }
}
