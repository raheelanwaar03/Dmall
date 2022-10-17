<?php

namespace App\Http\Controllers\Transcations;

use App\Http\Controllers\Controller;
use App\Models\Transctions\WidthrawlAmount;
use Illuminate\Http\Request;

class WidthrawalReqController extends Controller
{
    public function widthrawalReqView()
    {
        return view('User.Transcations.widthrawal');
    }

    public function storeWidthrawalAmount(Request $request)
    {
        $validated = $request->validate([
            'widthrawal_Amount' => 'required',
            'widthrawal_bank' => 'required',
            'widthrawal_bank_Account' => 'required',
            'user_bank_Name' => 'required',
        ]);

        $widthrawal = new WidthrawlAmount();
        $widthrawal->widthrawal_Amount = $validated['widthrawal_Amount'];
        $widthrawal->widthrawal_bank = $validated['widthrawal_bank'];
        $widthrawal->widthrawal_bank_Account = $validated['widthrawal_bank_Account'];
        $widthrawal->user_bank_Name = $validated['user_bank_Name'];
        $widthrawal->widthrawal_Pho_Nubmer = $request->widthrawal_Pho_Nubmer;
        $widthrawal->save();
        return redirect()->back()->with('success','You have Succssfuly Reqested for Widthraw.');

    }

    public function transcationDetails()
    {
        $widthrawals = WidthrawlAmount::get();
        return view('User.Transcations.transcationDetails',compact('widthrawals'));
    }
}
