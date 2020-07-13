<?php

use Illuminate\Support\Facades\Route;

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


//front end 
Route::get('/about', function () {
    return view('/FrontEnd/about');
});
Route::get('/faq', function () {
    return view('/FrontEnd/faq');
});
Route::get('/frontend', function () {
    return view('/FrontEnd/frontend');
});

Route::get('/index-2', function () {
    return view('index-2');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

//code for routing or linking to web methods
//Route::get('login', 'AuthController@index');
//Route::post('post-login1', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
Route::post('post-login', 'AuthController@postLogin');


//donors routes
Route::get('/donor_Benefits', function () {
    return view('/Donor/donor_Benefits');
});
Route::get('/donor_Campaign', function () {
    return view('/Donor/donor_Campaign');
});
Route::get('/donor_CampRegistration', function () {
    return view('/Donor/donor_CampRegistration');
});
Route::get('/donor_Donation', function () {
    return view('/Donor/donor_Donation');
});
Route::get('/donor_Profile', function () {
    return view('/Donor/donor_Profile');
});


//hospital routes
Route::get('/hosp_Benefit', function () {
    return view('/Hospital/hosp_Benefit');
});

Route::get('/hosp_BenefitEdit', function () {
    return view('/Hospital/hosp_BenefitEdit');
});

Route::get('/hosp_BenefitRecords', function () {
    return view('/Hospital/hosp_BenefitRecords');
});

Route::get('/hosp_Campaign', function () {
    return view('/Hospital/hosp_Campaign');
});

Route::get('/hosp_CampEdit', function () {
    return view('/Hospital/hosp_CampEdit');
});

Route::get('/hosp_CampRecords', function () {
    return view('/Hospital/hosp_CampRecords');
});

Route::get('/hosp_CampRegistration', function () {
    return view('/Hospital/hosp_CampRegistration');
});

Route::get('/hosp_Donors', function () {
    return view('/Hospital/hosp_Donors');
});

Route::get('/hosp_DonorsEdit', function () {
    return view('/Hospital/hosp_DonorsEdit');
});

Route::get('/hosp_DonorsRecords', function () {
    return view('/Hospital/hosp_DonorsRecords');
});
 
Route::get('/hosp_Profile', function () {
    return view('/Hospital/hosp_Profile');
});

//code for view data
//Route::get('index','AuthController@index');
Route::get('view-records','AuthController@view_records');//rename controller later
//code adding campaign
Route::post('post-camp-registration', 'AuthController@postCampRegistration');
//code to edit records
Route::put('edit-camp-registration', 'AuthController@editCampRegistration');
Route::get('camp_update/{id}','AuthController@camp_update');
Route::post('edit_camp/{id}','AuthController@edit_camp');
//Route::post('/{id}','AuthController@edit_camp');

//get record by id
//Route::get('view-records-id','AuthController@getRecordById');