<?php

namespace App\Http\Controllers\admin\Transcation;

use App\Http\Controllers\Controller;
use App\Models\admin\Transcation\WidthrawLimit;
use Illuminate\Http\Request;

class LimitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Transctions.widthrawLimit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'widthraw_min' => 'required',
                'widthraw_max' => 'required'
            ]);

            $widthrawLimit = new WidthrawLimit();
            $widthrawLimit->widthraw_min = $validated['widthraw_min'];
            $widthrawLimit->widthraw_max = $validated['widthraw_max'];
            $widthrawLimit->save();
            return redirect()->back()->with('success','Widthraw limits Applied');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
