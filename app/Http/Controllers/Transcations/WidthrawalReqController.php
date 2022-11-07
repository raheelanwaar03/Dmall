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
        $user = User::where('id',auth()->user()->id)->first();
        return view('User.Transcations.widthrawal',compact('catagorys','user'));
    }

    public function storeWidthrawalAmount(Request $request)
    {
        $validated = $request->validate([
            'widthrawal_Amount' => 'required',
            'widthrawal_bank' => 'required',
            'widthrawal_bank_Account' => 'required',
            'user_bank_Name' => 'required',
        ]);

        // checking the user Account blanse
        $blanceCheck = User::where('id',auth()->user()->id)->sum('referal_bouns');
        if($blanceCheck < 50)
        {
            return redirect()->back()->with('error','Your account blance is less than 50 your request could not procced');
        }

        $userWidthrawAmount = $validated['widthrawal_Amount'];
        $query = WidthrawLimit::first();
        $adminMinLimit = $query->widthraw_min;
        $adminMaxLimit = $query->widthraw_max;

        if ($userWidthrawAmount < $adminMinLimit)
        {
            return redirect()->back()->with('error','Your Amount is less than Admin limit');
        }

        if ($userWidthrawAmount > $adminMaxLimit)
        {
            return redirect()->back()->with('error','Your Amount is Greater than Admin limit');
        }


        $widthrawal = new WidthrawlAmount();
        $widthrawal->widthrawal_Amount = $validated['widthrawal_Amount'];
        $widthrawal->user_id = auth()->user()->id;
        $widthrawal->widthrawal_bank = $validated['widthrawal_bank'];
        $widthrawal->widthrawal_bank_Account = $validated['widthrawal_bank_Account'];
        $widthrawal->user_bank_Name = $validated['user_bank_Name'];
        $widthrawal->widthrawal_Pho_Nubmer = $request->widthrawal_Pho_Nubmer;
        $widthrawal->save();
        return redirect()->back()->with('success','You have Succssfuly Reqested for Widthraw.');

    }

    public function transcationDetails()
    {
        $catagorys = Catagory::all();
        $widthrawals = WidthrawlAmount::where('user_id',auth()->user()->id)->get();
        return view('User.Transcations.transcationDetails',compact('widthrawals','catagorys'));
    }
}
