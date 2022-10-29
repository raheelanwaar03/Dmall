<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orderProduct = Order::where('status','Processing')->get();
        return view('Admin.Order.index',compact('orderProduct'));
    }

    public function status($id)
    {
        $orderProduct = Order::find($id);
        $orderProduct->status = 'Deliver';
        $orderProduct->save();
        return redirect()->back()->with('success','Congrats! Order Deliver Successfuly');

    }
}
