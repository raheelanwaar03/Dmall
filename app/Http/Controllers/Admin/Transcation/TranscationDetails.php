<?php

namespace App\Http\Controllers\admin\Transcation;

use App\Http\Controllers\Controller;
use App\Models\Transctions\WidthrawlAmount;
use Illuminate\Http\Request;

class TranscationDetails extends Controller
{
    public function userWidthrawalReq()
    {
        $userWidthrawalReqs = WidthrawlAmount::all();
        return view('Admin.Transctions.userWidthrawalReq',compact('userWidthrawalReqs'));
    }

    public function approvedTransction()
    {
        $userWidthrawalReqs = WidthrawlAmount::where('status','approved')->get();
        return view('Admin.Transctions.approvedTranscation',compact('userWidthrawalReqs'));
    }

    public function pendingTransction()
    {
        $userWidthrawalReqs = WidthrawlAmount::where('status','pending')->get();
        return view('Admin.Transctions.pendingTranscation',compact('userWidthrawalReqs'));
    }

    public function approvedReq($id)
    {
        $widthrawal = WidthrawlAmount::find($id);
        $widthrawal->status = 'approved';
        $widthrawal->save();
        return redirect()->back()->with('success','You have approved the User Request');
    }

    public function rejectReq($id)
    {
        $widthrawal = WidthrawlAmount::find($id);
        $widthrawal->status = 'rejected';
        $widthrawal->save();
        return redirect()->back()->with('success','You have Rejected the User Widthrawal Request');
    }

    public function rejectTransction()
    {
        $userWidthrawalReqs = WidthrawlAmount::where('status','rejected')->get();
        return view('Admin.Transctions.rejectedTranscation',compact('userWidthrawalReqs'));
    }

}
