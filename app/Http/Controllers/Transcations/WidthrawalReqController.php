<?php

namespace App\Http\Controllers\Transcations;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\admin\Transcation\WidthrawLimit;
use App\Models\Transctions\WidthrawlAmount;
use App\Models\User;
use Illuminate\Http\Request;

class WidthrawalReqController extends Controller
{
    public function widthrawalReqView()
    {
        $catagorys = Catagory::all();
        $user = User::where('id', auth()->user()->id)->first();
        return view('User.Transcations.widthrawal', compact('catagorys', 'user'));
    }

    public function storeWidthrawalAmount(Request $request)
    {
        $validated = $request->validate([
            'widthrawal_Amount' => 'required',
            'widthrawal_bank' => 'required',
            'widthrawal_bank_Account' => 'required',
            'user_bank_Name' => 'required',
        ]);

        $requestAmount = $validated['widthrawal_Amount'];

        $userWidthrawAmount = $validated['widthrawal_Amount'];
        $query = WidthrawLimit::first();
        $adminMinLimit = $query->widthraw_min;
        $adminMaxLimit = $query->widthraw_max;

        // checking the user Account blanse
        $blanceCheck = User::where('id', auth()->user()->id)->sum('referal_bouns');
        if($blanceCheck < $requestAmount)
        {
            return redirect()->back()->with('error','your account have not much amount');
        }
        // checking admin min widthraw limit
        if ($blanceCheck == null) {
            return redirect()->back()->with('error', 'Your account blance is 0 your request could not procced');
        }

        if ($userWidthrawAmount < $adminMinLimit) {
            return redirect()->back()->with('error', 'Your Amount is less than Admin Daily limit');
        }

        if ($userWidthrawAmount > $adminMaxLimit) {
            return redirect()->back()->with('error', 'Your Amount is Greater than Admin Daily limit');
        }

        $widthrawal = new WidthrawlAmount();
        $widthrawal->user_id = auth()->user()->id;
        $widthrawal->widthrawal_Amount = $validated['widthrawal_Amount'];
        $widthrawal->widthrawal_bank = $validated['widthrawal_bank'];
        $widthrawal->widthrawal_bank_Account = $validated['widthrawal_bank_Account'];
        $widthrawal->user_bank_Name = $validated['user_bank_Name'];
        $widthrawal->widthrawal_Pho_Nubmer = $request->widthrawal_Pho_Nubmer;
        $widthrawal->save();
        // dedecting amount from wallet
        $userWallet = User::where('id', auth()->user()->id)->first();
        $userWallet = $userWallet->referal_bouns;
        $userWallet = $userWallet - $validated['widthrawal_Amount'];
        $user = User::where('id', auth()->user()->id)->first();
        $user->referal_bouns = $userWallet;
        $user->save();

        return redirect()->back()->with('success', 'You have Succssfuly Reqested for Widthraw.');
    }

    public function transcationDetails()
    {
        $catagorys = Catagory::all();
        $widthrawals = WidthrawlAmount::where('user_id', auth()->user()->id)->where('status','pending')->get();
        return view('User.Transcations.transcationDetails', compact('widthrawals', 'catagorys'));
    }

    public function update(Request $request,$id)
    {
        $widthrawal = WidthrawlAmount::find($id);
        $widthrawal->tid_reason = $request->tid_reason;
        $widthrawal->save();
        return redirect()->back();
    }

}
