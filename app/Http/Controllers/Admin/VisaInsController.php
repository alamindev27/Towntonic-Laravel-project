<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisaIns;

class VisaInsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visa_ins = VisaIns::where('id',1)->first();

        $pageTitle = 'Visa Information';
        
        return view('admin.visa-ins.edit', compact('visa_ins','pageTitle'));
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
        $visa_ins = VisaIns::find($id);
        $visa_ins->description =  $request->description;
        $visa_ins->update();

        return back()->with('info', 'Visa Information updated successfully');
    }
}
