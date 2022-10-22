<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transctions\WidthrawlAmount;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('User.index',compact('user'));
    }

    public function approvedTranscation()
    {
        $widthrawals = WidthrawlAmount::where('status','approved')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.approvedTranscation',compact('widthrawals'));
    }
}
