<?php


Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
    
    });

    Route::get('/profile/password', 'Admin\ProfileController@edit')->name('admin.profile.edit');
    Route::post('/profile/password-update','Admin\ProfileController@updatePassword')->name('admin.password.update');

    //Home Information
    Route::get('/home-info', 'Admin\HomeInfoController@index')->name('admin.home-info.index');
    Route::post('/home-info/{id}', 'Admin\HomeInfoController@update')->name('admin.home-info.update');

    //Work Permit
    Route::get('/work-permit-list', 'Admin\WorkPermitController@index')->name('admin.work-permit.index');
    Route::get('/work-permit', 'Admin\WorkPermitController@create')->name('admin.work-permit.create');
    Route::post('/store', 'Admin\WorkPermitController@store')->name('admin.work-permit.store');
    
    Route::get('/{id}/edit', 'Admin\WorkPermitController@edit')->name('admin.work-permit.edit');
    Route::post('/update/{id}', 'Admin\WorkPermitController@update')->name('admin.work-permit.update');
    Route::delete('/{id}/destroy', 'Admin\WorkPermitController@destroy')->name('admin.work-permit.destroy');

    //Visa Instruction
    Route::get('/visa-instruction', 'Admin\VisaInsController@index')->name('admin.visa-ins.index');
    Route::post('/visa-instruction/{id}', 'Admin\VisaInsController@update')->name('admin.visa-ins.update');

    //Government
    Route::get('/government', 'Admin\GovernmentController@index')->name('admin.government.index');
    Route::post('/government/{id}', 'Admin\GovernmentController@update')->name('admin.government.update');

    //Education
    Route::get('/education', 'Admin\EducationController@index')->name('admin.education.index');
    Route::post('/education/{id}', 'Admin\EducationController@update')->name('admin.education.update');

    //Transportation
    Route::get('/transportation', 'Admin\TransportationController@index')->name('admin.transportation.index');
    Route::post('/transportation/{id}', 'Admin\TransportationController@update')->name('admin.transportation.update');

    //Useful Links
    Route::group(['prefix'  =>   'useful-links'], function() {

        Route::get('/', 'Admin\UsefulLinkController@index')->name('admin.useful-links.index');
        Route::get('/create', 'Admin\UsefulLinkController@create')->name('admin.useful-links.create');
        Route::post('/store', 'Admin\UsefulLinkController@store')->name('admin.useful-links.store');
        Route::delete('/{id}/destroy', 'Admin\UsefulLinkController@destroy')->name('admin.useful-links.destroy');

        Route::post('/form-store', 'Admin\UsefulLinkController@form_store')->name('admin.useful-links.form_store');
        Route::delete('/{id}/form/destroy', 'Admin\UsefulLinkController@form_destroy')->name('admin.useful-links.form_destroy');
    
    });

    //Country
    Route::group(['prefix'  =>   'country'], function() {

        Route::get('/', 'Admin\CountryController@index')->name('admin.country.index');
        Route::post('/store', 'Admin\CountryController@store')->name('admin.country.store');
        Route::delete('/{id}/destroy', 'Admin\CountryController@destroy')->name('admin.country.destroy');
    
    });

    //Setting
    Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
    Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

    //About Taiwan
    Route::get('/about-taiwan', 'Admin\AboutTaiwanController@abouttaiwan')->name('admin.abouttaiwan.index');
    Route::post('/about-taiwan/{id}', 'Admin\AboutTaiwanController@abouttaiwan_update')->name('admin.abouttaiwan.update');

    Route::get('/people', 'Admin\AboutTaiwanController@people')->name('admin.people.index');
    Route::post('/people/{id}', 'Admin\AboutTaiwanController@people_update')->name('admin.people.update');

    Route::get('/sports', 'Admin\AboutTaiwanController@sports')->name('admin.sports.index');
    Route::post('/sports/{id}', 'Admin\AboutTaiwanController@sports_update')->name('admin.sports.update');

    Route::get('/society', 'Admin\AboutTaiwanController@society')->name('admin.society.index');
    Route::post('/society/{id}', 'Admin\AboutTaiwanController@society_update')->name('admin.society.update');

    Route::get('/science', 'Admin\AboutTaiwanController@science')->name('admin.science.index');
    Route::post('/science/{id}', 'Admin\AboutTaiwanController@science_update')->name('admin.science.update');

    Route::get('/arts', 'Admin\AboutTaiwanController@arts')->name('admin.arts.index');
    Route::post('/arts/{id}', 'Admin\AboutTaiwanController@arts_update')->name('admin.arts.update');

    Route::get('/travel', 'Admin\AboutTaiwanController@travel')->name('admin.travel.index');
    Route::post('/travel/{id}', 'Admin\AboutTaiwanController@travel_update')->name('admin.travel.update');

    Route::get('/history', 'Admin\AboutTaiwanController@history')->name('admin.history.index');
    Route::post('/history/{id}', 'Admin\AboutTaiwanController@history_update')->name('admin.history.update');

    Route::get('/trade', 'Admin\AboutTaiwanController@trade')->name('admin.trade.index');
    Route::post('/trade/{id}', 'Admin\AboutTaiwanController@trade_update')->name('admin.trade.update');

    Route::get('/scholarship-guideline', 'Admin\AboutTaiwanController@scholar_guide')->name('admin.scholar-guide.index');
    Route::post('/scholarship-guideline/{id}', 'Admin\AboutTaiwanController@scholar_guide_update')->name('admin.scholar-guide.update');

    Route::get('/scholarship-instruction', 'Admin\AboutTaiwanController@scholar_ins')->name('admin.scholar-ins.index');
    Route::post('/scholarship-instruction/{id}', 'Admin\AboutTaiwanController@scholar_ins_update')->name('admin.scholar-ins.update');

    Route::get('/study-taiwan', 'Admin\AboutTaiwanController@study_taiwan')->name('admin.study-taiwan.index');
    Route::post('/study-taiwan/{id}', 'Admin\AboutTaiwanController@study_taiwan_update')->name('admin.study-taiwan.update');

    Route::get('/visa-info', 'Admin\AboutTaiwanController@visa_info')->name('admin.visa-info.index');
    Route::post('/visa-info/{id}', 'Admin\AboutTaiwanController@visa_info_update')->name('admin.visa-info.update');
});