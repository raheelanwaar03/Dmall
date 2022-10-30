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

    public function deliverOrder()
    {
        $orderProduct = Order::where('status','Delivered')->get();
        return view('Admin.Order.deliveredOrder',compact('orderProduct'));
    }

    public function changeStatus($id)
    {
        $orderProduct = Order::find($id);
        $orderProduct->status = 'Delivered';
        $orderProduct->save();
        return redirect()->back()->with('success','Congrats! Order Deliver Successfuly');
    }
}
