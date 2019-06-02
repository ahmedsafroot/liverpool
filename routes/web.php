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

Route::get('/','ProfileController@index');
Route::resource('profile', 'ProfileController');
Route::post('step1','ProfileController@store_profile');
Route::post('step2','ProfileController@store_audit_tool');
Route::post('step3','ProfileController@store_industry_leadership');
Route::get("/report",'ProfileController@report');
Route::get('/details/{id}', 'ProfileController@profile_details')->name('profile.details');
Route::get('/audit_tools/{id}', 'ProfileController@audit_tools_details')->name('audit_tools.details');
Route::get('/industry_leadership/{id}', 'ProfileController@industry_leadership_details')->name('industry_leadership.details');

