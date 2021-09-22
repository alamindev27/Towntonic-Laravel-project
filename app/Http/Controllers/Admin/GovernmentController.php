<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Government;

class GovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $government = Government::where('id',1)->first();

        $pageTitle = 'Government Information';
        
        return view('admin.government.edit', compact('government','pageTitle'));
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
        $government = Government::find($id);
        $government->description =  $request->description;
        $government->update();

        return back()->with('info', 'Government Information updated successfully');
    }
}
