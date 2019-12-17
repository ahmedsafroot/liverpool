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
Route::group(['middleware' => 'auth'], function () {

Route::get('/','ProfileController@home')->name("home");
Route::get('profile/{id?}','ProfileController@index')->name('profile');
Route::get('export/{id}','ProfileController@export')->name('export');
Route::post('step1','ProfileController@store_profile');
Route::post('step2','ProfileController@store_audit_tool');
Route::post('step3','ProfileController@store_industry_leadership');
Route::post('step4','ProfileController@store_market_trend');
Route::post('step5','ProfileController@store_customer_experience');
Route::post('step6','ProfileController@store_bea');
Route::post('step7','ProfileController@store_trublance');
Route::post('step8','ProfileController@store_sw');
Route::post('step9','ProfileController@store_worksheet');
Route::post('step10','ProfileController@store_ansoff');
Route::post('step11','ProfileController@store_action');

Route::get("/report",'ProfileController@report');
Route::get("/myreport",'ProfileController@myreport');
Route::get('/details/{id}', 'ProfileController@profile_details')->name('profile.details');
Route::get('/audit_tools/{id}', 'ProfileController@audit_tools_details')->name('audit_tools.details');
Route::get('/industry_leadership/{id}', 'ProfileController@industry_leadership_details')->name('industry_leadership.details');
Route::get('/market_trends/{id}', 'ProfileController@market_trends_details')->name('market_trends.details');
Route::get('/customer_experience/{id}', 'ProfileController@customer_experience_details')->name('customer_experience.details');
Route::get('/bea/{id}', 'ProfileController@bea_details')->name('bea.details');
Route::get('/trub/{id}', 'ProfileController@trub_details')->name('trub.details');
Route::get('/sw/{id}', 'ProfileController@sw_details')->name('sw.details');
Route::get('/worksheet/{id}', 'ProfileController@worksheet_details')->name('worksheet.details');
Route::get('/ansoff/{id}', 'ProfileController@ansoff_details')->name('ansoff.details');
Route::get('/actions/{id}', 'ProfileController@action_details')->name('action.details');
Route::get('/messages/{id}', 'ProfileController@message_details')->name('messages.details');

});

Auth::routes();



