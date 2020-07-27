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
Route::get('/home', function () {
    return view('/FrontEnd/home');
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

Route::get('/donor_registration', function () {
    return view('donor_registration');
});
Route::get('/donor_login', function () {
    return view('donor_login');
});
Route::get('donor-registration', 'DonorController@Donorregistration');
Route::post('post-donor-registration', 'DonorController@postDonorRegistration'); 
Route::get('donor-dashboard', 'DonorController@Donordashboard'); 
Route::get('donor-logout', 'DonorController@Donorlogout');
Route::post('post-donor-login', 'DonorController@postDonorLogin');

Route::get('/hosp_registration', function () {
    return view('hosp_registration');
});
Route::get('/hosp_login', function () {
    return view('hosp_login');
});
Route::get('hosp-registration', 'HospitalController@Hospregistration');
Route::post('post-hosp-registration', 'HospitalController@postHospRegistration'); 
Route::get('hosp-dashboard', 'HospitalController@Hospdashboard'); 
Route::get('hosp-logout', 'HospitalController@Hosplogout');
Route::post('post-hosp-login', 'HospitalController@postHospLogin');


//donors routes
Route::get('/donor_Benefits', function () {
    return view('/Donor/donor_Benefits');
});
Route::get('/donor_Campaign','DonorController@donor_camp_records', function () {
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
// Route::get('view-donor-records','DonorController@view_donor_records');
Route::get('donor_camp_register/{id}','DonorController@donor_camp_register');
// Route::post('register_camp/{id}','DonorController@register_camp');


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

Route::get('/hosp_BloodBag', function () {
    return view('/Hospital/hosp_BloodBag');
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

//code for view campaign data
//Route::get('index','AuthController@index');
Route::get('view-records','AuthController@view_records');//rename controller later
//code adding campaign
Route::post('post-camp-registration', 'AuthController@postCampRegistration');
//code to edit records
Route::put('edit-camp-registration', 'AuthController@editCampRegistration');
Route::get('camp_update/{id}','AuthController@camp_update');
Route::get('camp_register_detail/{id}','AuthController@camp_register_detail');
Route::get('camp_detail/{id}','AuthController@camp_detail');
Route::post('edit_camp/{id}','AuthController@edit_camp');
//Route::post('/{id}','AuthController@edit_camp');
//get record by id
//Route::get('view-records-id','AuthController@getRecordById');

//code for view donor data
Route::get('view-donor-records','AuthController@view_donor_records');//rename controller later
//code adding campaign
Route::post('post-donor-registration', 'AuthController@postDonorRegistration');
//code to edit records
Route::put('edit-donor-registration', 'AuthController@editDonorRegistration');
Route::get('donor_update/{id}','AuthController@donor_update');
Route::post('edit_donor/{id}','AuthController@edit_donor');

//code for view benefit data
Route::get('view-benefit-records','AuthController@view_benefit_records');//rename controller later
//code adding campaign
Route::post('post-benefit-registration', 'AuthController@postBenefitRegistration');
//code to edit records
Route::put('edit-benefit-registration', 'AuthController@editBenefitRegistration');
Route::get('benefit_update/{id}','AuthController@benefit_update');
Route::post('edit_benefit/{id}','AuthController@edit_benefit');
