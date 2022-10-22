<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductManger;
use Illuminate\Http\Request;

class ProductMangerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductManger::all();
        return view('Admin.Product.allProduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name'=>'required',
            'product_description'=>'required',
            'product_price'=>'required',
            'product_img'=>'required',
        ]);
        $file = $request->file('product_img');
        $fileName = rand('111111','9999999') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'),$fileName);


        $product = new ProductManger();
        $product->product_name = $validated['product_name'];
        $product->product_description = $validated['product_description'];
        $product->product_price = $validated['product_price'];
        $product->product_img = $fileName;
        $product->save();
        return redirect()->back()->with('success', 'You have Add a new Product Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = ProductManger::find($id);
        return view('Admin.Product.showProduct',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = ProductManger::find($id);
        return view('Admin.Product.editProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductManger $product)
    {
        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $fileName = rand('111111', '999999') . '.' .  $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            $product->product_img = $fileName;
        }

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->save();
        return redirect()->back()->with('success','Product Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ProductManger::find($id);
        $product->delete();
        return redirect()->back()->with('success','Product Deleted successfuly');
    }
}
