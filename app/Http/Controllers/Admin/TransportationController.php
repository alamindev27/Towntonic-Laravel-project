<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transportation;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportation = Transportation::where('id',1)->first();

        $pageTitle = 'Transportation Information';
        
        return view('admin.transportation.edit', compact('transportation','pageTitle'));
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
        $transportation = Transportation::find($id);
        $transportation->description =  $request->description;
        $transportation->update();

        return back()->with('info', 'Transportation Information updated successfully');
    }
}
