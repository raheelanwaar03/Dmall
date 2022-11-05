<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use App\Models\admin\ProductManger;
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
        return view('Admin.Product.allProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagorys = Catagory::all();
        return view('Admin.Product.addProduct', compact('catagorys'));
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
            'product_name' => 'required',
            'product_catagory' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_qty' => 'required',
            'product_img' => 'required',

        ]);
        if ($request->product_id) {
            $productID = $request->product_id;
        } else {
            $productID = productId();
        }


        $file = $request->file('product_img');
        $fileName = rand('111111', '9999999') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);


        $product = new ProductManger();
        $product->product_name = $validated['product_name'];
        $product->product_id = $productID;
        $product->product_discount = $request->product_discount;
        $product->product_catagory = $validated['product_catagory'];
        $product->product_description = $validated['product_description'];
        $product->product_price = $validated['product_price'];
        $product->product_qty = $validated['product_qty'];
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
        return view('Admin.Product.showProduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagorys = Catagory::all();
        $product = ProductManger::find($id);
        return view('Admin.Product.editProduct', compact('product', 'catagorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = ProductManger::find($id);

        // if user updating product id
        if ($request->product_id) {
            $productID = $request->product_id;
        } else {
            $productID = productId();
        }

        if ($request->product_img) {
            $file = $request->product_img;
            $fileName = rand(111111, 99999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
            // $image->move(public_path('images'), $imageName);

            $product->product_name = $request->product_name;
            $product->product_id = $productID;
            $product->product_discount = $request->product_discount;
            $product->product_catagory = $request->product_catagory;
            $product->product_description = $request->product_description;
            $product->product_price = $request->product_price;
            $product->product_qty = $request->product_qty;
            $product->product_img = $fileName;
            $product->save();
            return redirect()->back()->with('success','Product details and Image updated');
        }

        $product->product_name = $request->product_name;
        $product->product_id = $productID;
        $product->product_discount = $request->product_discount;
        $product->product_catagory = $request->product_catagory;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_qty = $request->product_qty;
        $product->save();
        return redirect()->route('Product.index')->with('success','Product details Updated successfuly');
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
        return redirect()->back()->with('success', 'Product Deleted successfuly');
    }
}
