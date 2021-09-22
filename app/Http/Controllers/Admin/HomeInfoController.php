<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeInfo;

class HomeInfoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_info = HomeInfo::where('id',1)->first();

        $pageTitle = 'Home Information';
        
        return view('admin.home-info.edit', compact('home_info','pageTitle'));
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
    	// return $request;
        $home_info = HomeInfo::find($id);
        $home_info->description =  $request->description;
        $home_info->update();

        return back()->with('info', 'Home Information updated successfully');
    }
}
