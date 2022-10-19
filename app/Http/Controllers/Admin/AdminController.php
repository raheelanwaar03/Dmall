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
}
