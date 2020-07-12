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

// Route::get('/', function () {
//     return view('FrontEnd.index');
// });


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
Route::get('/camp_update', function () {
    return view('camp_update');
});

Route::get('/editable_table', function () {
    return view('editable_table');
});

Route::get('/camp_registration', function () {
    return view('camp_registration');
});

Route::get('/profile', function () {
    return view('profile');
});

//code for routing or linking to web methods
//Route::get('login', 'AuthController@index');
//Route::post('post-login1', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

Route::post('post-login', 'LoginController@postLogin');

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