<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transctions\WidthrawlAmount;

class UserController extends Controller
{
    public function index()
    {
        return view('User.index');
    }

    public function approvedTranscation()
    {
        $widthrawals = WidthrawlAmount::where('status','approved')->where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.approvedTranscation',compact('widthrawals'));
    }
}
