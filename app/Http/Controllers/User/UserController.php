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

    public function approvedTranscation()
    {
        $widthrawals = WidthrawlAmount::where('status','approved')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.approvedTranscation',compact('widthrawals'));
    }

    public function rejectTranscation()
    {
        $widthrawals = WidthrawlAmount::where('status','rejected')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.rejectedTransaction',compact('widthrawals'));
    }
}
