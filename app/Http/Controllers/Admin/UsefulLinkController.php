<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsefulLink;
use App\Models\Downloadable;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;

class UsefulLinkController extends Controller
{
	use UploadAble;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pageTitle = 'Useful Links';
        $subTitle = "List of links";

        $useful_links = UsefulLink::all();

        $downloadables = Downloadable::all();
        
        return view('admin.useful-link.index', compact('useful_links','pageTitle','subTitle','downloadables'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UsefulLink::create($request->all());
        return redirect()->route('admin.useful-links.index')->with('success', 'Link added successfully');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UsefulLink::find($id)->delete();
        return redirect()->route('admin.useful-links.index')->with('error', 'Link deleted successfully');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function form_store(Request $request)
    {
    	$down_form = null;

        if ($request->has('down_form') && ($request->file('down_form') instanceof  UploadedFile)) {
            $down_form = $this->uploadOne($request->file('down_form'));
        }

        $downloadable_form = new Downloadable();
        $downloadable_form->title = $request->title;
        $downloadable_form->down_form = $down_form;
        $downloadable_form->save();
        return redirect()->route('admin.useful-links.index')->with('success', 'Downloadable form added successfully');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function form_destroy($id)
    {
        $downloadable_form = Downloadable::find($id);
        if ($downloadable_form->down_form != null) {
            $this->deleteOne($downloadable_form->down_form);
        }
       
        $downloadable_form->delete();
        return redirect()->route('admin.useful-links.index')->with('error', 'Downloadable form deleted successfully');
    }
}
