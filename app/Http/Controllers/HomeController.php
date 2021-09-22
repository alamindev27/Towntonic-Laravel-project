<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaIns;
use App\Models\Transportation;
use App\Models\Education;
use App\Models\Government;
use App\Models\Downloadable;
use App\Models\UsefulLink;
use App\Models\WorkPermit;
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
use Session;
use PDF;
use App\Models\Country;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
	public function visa_info()
    {
        $visa_info = VisaInfo::where('id',1)->first();
    	return view('visa_info', compact('visa_info'));
    }

    public function visa_ins()
    {
		$visa_ins = VisaIns::where('id',1)->first();
        return view('visa_ins', compact('visa_ins'));
    }

    public function study_in_taiwan()
    {
        $study_taiwan = StudyTaiwan::where('id',1)->first();
        return view('study_in_taiwan', compact('study_taiwan'));
    }

    public function scholarship_guideline()
    {
        $scholar_guide = ScholarshipGuideline::where('id',1)->first();
        return view('scholarship_guideline', compact('scholar_guide'));
    }

    public function scholarship_instruction()
    {
        $scholar_ins = ScholarshipInstruction::where('id',1)->first();
        return view('scholarship_instruction', compact('scholar_ins'));
    }

    public function work_permit()
    {
        $nationalities = Country::all();
        return view('work_permit', compact('nationalities'));
    }

      public function work_permit_search(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
        ]);
        
        $visa = $request->visa_no;
        $name = $request->name;
        $birth = $request->dob;
        $nationality = $request->country_id;
        $work_details = WorkPermit::Where('visa_no','LIKE',"%$visa%")
                                ->orwhere('expatriaes_name','LIKE',"%$name%")
                                ->orWhere('dob','LIKE',"%$birth%")
                                ->first();
        // Session::put('work_detail',$work_details);
        return view('work_permit_search', compact('work_details'));

    }

    // public function work_permit_print()
    // {
    //     $work_detail =  Session::get('work_detail');
    //     $name= $work_detail->expatriaes_name;
    //     $pdf = PDF::loadView('frontend.file.work_permit', compact('work_detail'));  
    //     return $pdf->download('work_permit['.$name.'].pdf');
    // }

    public function about_taiwan()
    {
        $abouttaiwan = AboutTaiwan::where('id',1)->first();
        return view('about_taiwan', compact('abouttaiwan'));
    }

    public function people_language()
    {
        $people = People::where('id',1)->first();
        return view('people_language', compact('people'));
    }

    public function sports()
    {
        $sport = Sport::where('id',1)->first();
        return view('sports', compact('sport'));
    }

    public function transportation()
    {
    	$transport = Transportation::where('id',1)->first();
        return view('transportation', compact('transport'));
    }

    public function society()
    {
        $society = Society::where('id',1)->first();
        return view('society', compact('society'));
    }

    public function education()
    {
    	$education = Education::where('id',1)->first();
        return view('education', compact('education'));
    }

    public function science_technology()
    {
        $science = ScienceTechnology::where('id',1)->first();
        return view('science_technology', compact('science'));
    }

    public function arts_culture()
    {
        $arts = ArtsCulture::where('id',1)->first();
        return view('arts_culture', compact('arts'));
    }

    public function travel_tourism()
    {
        $travel = TravelTourism::where('id',1)->first();
        return view('travel_tourism', compact('travel'));
    }

    public function history_politics()
    {
        $history = HistoryPolitics::where('id',1)->first();
        return view('history_politics', compact('history'));
    }

    public function trade_economy()
    {
        $trade = TradeEconomy::where('id',1)->first();
        return view('trade_economy', compact('trade'));
    }

    public function government()
    {
    	$government = Government::where('id',1)->first();
        return view('government', compact('government'));
    }

    public function noc()
    {
        return view('noc');
    }

    public function noc_search(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
        ]);
    	$name = $request->name;
    	$passport = $request->passport;
    	$work_details = WorkPermit::where('expatriaes_name','LIKE',"%$name%")
                                ->orWhere('passport_no','LIKE',"%$passport%")
                                ->first();
        // Session::put('work_details',$work_details);
        return view('noc_search', compact('work_details'));
        
        
    }

    // public function noc_print()
    // {
    //     $work_details =  Session::get('work_details');
    //     $name= $work_details->expatriaes_name;
    //     $pdf = PDF::loadView('frontend.file.noc', compact('work_details'))->stream();
    //      return $pdf;
    // }


    public function useful_links()
    {
    	$useful_links = UsefulLink::all();
        return view('useful_links', compact('useful_links'));
    }

    public function download_forms()
    {
    	$download_forms = Downloadable::all();
        return view('download_forms', compact('download_forms'));
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function contact_send(Request $request)
    {
        $data = array(
            'fname'      =>  $request->fname,
            'gender'   =>   $request->gender,
            'email'   =>   $request->email,
            'subject'   =>   $request->subject,
            'content'   =>   $request->content,
            
        );

     Mail::to("mail@taiwanmoigov.com")->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('math')]);
    }
}