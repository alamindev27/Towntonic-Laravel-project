<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$home_info = App\Models\HomeInfo::where('id',1)->first();
    return view('welcome', compact('home_info'));
});


Auth::routes();
require 'admin.php';

View::composer('admin.dashboard.index',function ($view) {
    $workpermits = App\Models\WorkPermit::all()->count();
    $countries = App\Models\Country::all()->count();
    $view->with('workpermits',$workpermits)->with('countries',$countries);
});

Route::get('/visa-information', 'HomeController@visa_info')->name('home.visa_info');
Route::get('/visa-instruction', 'HomeController@visa_ins')->name('home.visa_ins');
Route::get('/study-in-taiwan', 'HomeController@study_in_taiwan')->name('home.study_in_taiwan');
Route::get('/scholarship-guideline', 'HomeController@scholarship_guideline')->name('home.scholarship_guideline');
Route::get('/scholarship-instruction', 'HomeController@scholarship_instruction')->name('home.scholarship_instruction');

Route::get('/work-permit', 'HomeController@work_permit')->name('home.work_permit');
Route::post('/work-permit-search', 'HomeController@work_permit_search')->name('home.work-permit.search');
// Route::get('/work-permit-print','HomeController@work_permit_print')->name('home.work-permit.print');

Route::get('/about-taiwan', 'HomeController@about_taiwan')->name('home.about_taiwan');
Route::get('/people-language', 'HomeController@people_language')->name('home.people_language');
Route::get('/sports', 'HomeController@sports')->name('home.sports');
Route::get('/transportation', 'HomeController@transportation')->name('home.transportation');
Route::get('/society', 'HomeController@society')->name('home.society');
Route::get('/education', 'HomeController@education')->name('home.education');
Route::get('/science-technology', 'HomeController@science_technology')->name('home.science_technology');
Route::get('/arts-culture', 'HomeController@arts_culture')->name('home.arts_culture');
Route::get('/travel-tourism', 'HomeController@travel_tourism')->name('home.travel_tourism');
Route::get('/history-politics', 'HomeController@history_politics')->name('home.history_politics');
Route::get('/trade-economy', 'HomeController@trade_economy')->name('home.trade_economy');
Route::get('/government', 'HomeController@government')->name('home.government');

//noc_search
Route::get('/noc', 'HomeController@noc')->name('home.noc');
Route::post('/noc-search', 'HomeController@noc_search')->name('home.noc.search');
// Route::get('/noc-print','HomeController@noc_print')->name('home.noc.print');
Route::get('refreshcaptcha', 'HomeController@refreshCaptcha');

Route::get('/useful-links', 'HomeController@useful_links')->name('home.useful_links');
Route::get('/download-forms', 'HomeController@download_forms')->name('home.download_forms');

Route::get('/contact-us', 'HomeController@contact_us')->name('home.contact_us');
Route::post('/contact/send', 'HomeController@contact_send')->name('contact.send');

