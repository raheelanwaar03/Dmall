<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\Transctions\WidthrawlAmount;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        $catagorys = Catagory::all();
        return view('User.index',compact('user','catagorys'));
    }

    public function refer()
    {
        $catagorys = Catagory::all();
        return view('User.Account.referFriend',compact('catagorys'));
    }

    public function allRefer()
    {
        $allReferFriends = User::where('username','refer')->get();
        return view('User.Account.allReferFriends',compact('allReferFriends'));
    }

    public function approvedTranscation()
    {
        $catagorys = Catagory::all();
        $widthrawals = WidthrawlAmount::where('status','approved')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.approvedTranscation',compact('widthrawals','catagorys'));
    }

    public function rejectTranscation()
    {
        $catagorys = Catagory::all();
        $widthrawals = WidthrawlAmount::where('status','rejected')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.rejectedTransaction',compact('widthrawals','catagorys'));
    }
}
