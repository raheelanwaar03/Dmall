<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Catagory;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagorys = Catagory::paginate(10);
        return view('Admin.Catagory.allCatagories',compact('catagorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Catagory.addCatagory');
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
            'catagory_name' => 'required',
            'catagory_des' => 'required',
            'catagory_img' => 'required',
        ]);

        $image = $validated['catagory_img'];
        $imageName = rand(111111,999999). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$imageName);

        $catagory = new Catagory();
        $catagory->catagory_name = $validated['catagory_name'];
        $catagory->catagory_des = $validated['catagory_des'];
        $catagory->catagory_img = $imageName;
        $catagory->save();
        return redirect()->back()->with('success','New Catagory Added Succssfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catagory = Catagory::find($id);
        return view('Admin.Catagory.showCatagory',compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return redirect()->back()->with('success','Product Deleted Successfuly');
    }
}
