<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkPermit;
use App\Models\Country;

class WorkPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permitlists = WorkPermit::all();

        $pageTitle = 'Work Permit List';
        $subTitle = "List of work permit";
        
        return view('admin.work-permit.index', compact('permitlists','pageTitle','subTitle'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationalities = Country::all();

        $pageTitle = 'Add Work Permit';
        $subTitle = "Work Permit Information";
        
        return view('admin.work-permit.create', compact('nationalities','pageTitle','subTitle'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        WorkPermit::create($request->all());
        return redirect()->route('admin.work-permit.index')->with('success', 'Work permit added successfully');
        
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nationalities = Country::all();

        $pageTitle = 'Edit Work Permit';
        $subTitle = "Update Work Permit Information";
        $workpermit = WorkPermit::find($id);
        
        return view('admin.work-permit.edit', compact('nationalities','workpermit','pageTitle','subTitle'));
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
        WorkPermit::find($id)->update($request->all());
        return redirect()->route('admin.work-permit.index')->with('success', 'Work permit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkPermit::find($id)->delete();
        return redirect()->route('admin.work-permit.index')->with('error', 'Work permit deleted successfully');
    }
}
