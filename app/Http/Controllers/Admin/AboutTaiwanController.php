<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutTaiwan;
use App\Models\ArtsCulture;
use App\Models\HistoryPolitics;
use App\Models\People;
use App\Models\Sport;
use App\Models\ScholarshipGuideline;
use App\Models\ScholarshipInstruction;
use App\Models\ScienceTechnology;
use App\Models\Society;
use App\Models\StudyTaiwan;
use App\Models\TradeEconomy;
use App\Models\VisaInfo;
use App\Models\TravelTourism;

class AboutTaiwanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function abouttaiwan()
    {
        $abouttaiwan = AboutTaiwan::where('id',1)->first();

        $pageTitle = 'About Taiwan';
        
        return view('admin.about_taiwan.abouttaiwan_edit', compact('abouttaiwan','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function abouttaiwan_update(Request $request, $id)
    {
        $abouttaiwan = AboutTaiwan::find($id);
        $abouttaiwan->description =  $request->description;
        $abouttaiwan->update();

        return back()->with('info', 'About Taiwan Information updated successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function people()
    {
        $people = People::where('id',1)->first();

        $pageTitle = 'People and Language';
        
        return view('admin.about_taiwan.people_edit', compact('people','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function people_update(Request $request, $id)
    {
        $people = People::find($id);
        $people->description =  $request->description;
        $people->update();

        return back()->with('info', 'People and Language Information updated successfully');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sports()
    {
        $sport = Sport::where('id',1)->first();

        $pageTitle = 'Sports';
        
        return view('admin.about_taiwan.sports_edit', compact('sport','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sports_update(Request $request, $id)
    {
        $sport = Sport::find($id);
        $sport->description =  $request->description;
        $sport->update();

        return back()->with('info', 'Sports Information updated successfully');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arts()
    {
        $arts = ArtsCulture::where('id',1)->first();

        $pageTitle = 'Arts and Culture';
        
        return view('admin.about_taiwan.arts_edit', compact('arts','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function arts_update(Request $request, $id)
    {
        $arts = ArtsCulture::find($id);
        $arts->description =  $request->description;
        $arts->update();

        return back()->with('info', 'Arts and Culture Information updated successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $history = HistoryPolitics::where('id',1)->first();

        $pageTitle = 'History and Politics';
        
        return view('admin.about_taiwan.history_edit', compact('history','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function history_update(Request $request, $id)
    {
        $history = HistoryPolitics::find($id);
        $history->description =  $request->description;
        $history->update();

        return back()->with('info', 'History and Politics Information updated successfully');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function society()
    {
        $society = Society::where('id',1)->first();

        $pageTitle = 'Society';
        
        return view('admin.about_taiwan.society_edit', compact('society','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function society_update(Request $request, $id)
    {
        $society = Society::find($id);
        $society->description =  $request->description;
        $society->update();

        return back()->with('info', 'Society Information updated successfully');
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function science()
    {
        $science = ScienceTechnology::where('id',1)->first();

        $pageTitle = 'Science and Technology';
        
        return view('admin.about_taiwan.science_edit', compact('science','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function science_update(Request $request, $id)
    {
        $science = ScienceTechnology::find($id);
        $science->description =  $request->description;
        $science->update();

        return back()->with('info', 'Science and Technology Information updated successfully');
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function travel()
    {
        $travel = TravelTourism::where('id',1)->first();

        $pageTitle = 'Travel and Tourism';
        
        return view('admin.about_taiwan.travel_edit', compact('travel','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function travel_update(Request $request, $id)
    {
        $travel = TravelTourism::find($id);
        $travel->description =  $request->description;
        $travel->update();

        return back()->with('info', 'Travel and Tourism Information updated successfully');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trade()
    {
        $trade = TradeEconomy::where('id',1)->first();

        $pageTitle = 'Trade and Economy';
        
        return view('admin.about_taiwan.trade_edit', compact('trade','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trade_update(Request $request, $id)
    {
        $trade = TradeEconomy::find($id);
        $trade->description =  $request->description;
        $trade->update();

        return back()->with('info', 'Trade and Economy Information updated successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scholar_guide()
    {
        $scholar_guide = ScholarshipGuideline::where('id',1)->first();

        $pageTitle = 'Scholarship Guidelines';
        
        return view('admin.about_taiwan.scholar_guide_edit', compact('scholar_guide','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function scholar_guide_update(Request $request, $id)
    {
        $scholar_guide = ScholarshipGuideline::find($id);
        $scholar_guide->description =  $request->description;
        $scholar_guide->update();

        return back()->with('info', 'Scholarship Guidelines Information updated successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scholar_ins()
    {
        $scholar_ins = ScholarshipInstruction::where('id',1)->first();

        $pageTitle = 'Scholarship Instruction';
        
        return view('admin.about_taiwan.scholar_ins_edit', compact('scholar_ins','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function scholar_ins_update(Request $request, $id)
    {
        $scholar_ins = ScholarshipInstruction::find($id);
        $scholar_ins->description =  $request->description;
        $scholar_ins->update();

        return back()->with('info', 'Scholarship Instruction Information updated successfully');
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function study_taiwan()
    {
        $study_taiwan = StudyTaiwan::where('id',1)->first();

        $pageTitle = 'Study in Taiwan';
        
        return view('admin.about_taiwan.study_taiwan_edit', compact('study_taiwan','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function study_taiwan_update(Request $request, $id)
    {
        $study_taiwan = StudyTaiwan::find($id);
        $study_taiwan->description =  $request->description;
        $study_taiwan->update();

        return back()->with('info', 'Study in Taiwan Information updated successfully');
    }

           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visa_info()
    {
        $visa_info = VisaInfo::where('id',1)->first();

        $pageTitle = 'Visa Information';
        
        return view('admin.about_taiwan.visa_info_edit', compact('visa_info','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function visa_info_update(Request $request, $id)
    {
        $visa_info = VisaInfo::find($id);
        $visa_info->description =  $request->description;
        $visa_info->update();

        return back()->with('info', 'Visa Information updated successfully');
    }

}
