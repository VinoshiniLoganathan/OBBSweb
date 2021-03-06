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
Route::get('/about2', function () {
    return view('/FrontEnd/about2');
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
Route::get('dnr_profile', 'DonorController@dnr_profile');
Route::get('dnr_update/{id}', 'DonorController@dnr_update');
Route::get('dnr_newprof/{id}', 'DonorController@dnr_newprof');

// Route::get('view-donor-records','DonorController@view_donor_records');
Route::get('donor_camp_register/{id}','DonorController@donor_camp_register');
Route::get('donation_record','DonorController@donation_record');
Route::get('benefit_record','DonorController@benefit_record');
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

Route::get('/hosp_BloodBagForm', function () {
    return view('/Hospital/hosp_BloodBagForm');
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

// Route::get('/hosp_CampRegisteredComplete', 'AuthController@camp_register_complete', function () {
//     return view('/Hospital/hosp_CampRegisteredComplete');
// });

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
//profile upd
Route::get('hosp_profile', 'HospitalController@hosp_profile');
Route::get('hosp_update/{id}', 'HospitalController@hosp_update');
Route::get('hosp_newprof/{id}', 'HospitalController@hosp_newprof');

//code for blood bag
Route::get('blood_count','AuthController@blood_count');
Route::get('blood_count_detail','AuthController@blood_count_detail');
Route::get('blood_bag','AuthController@blood_bag');
Route::get('blood_bag_detail/{id}','AuthController@blood_bag_detail');
Route::get('blood_bag_status/{id}','AuthController@blood_bag_status');

//code for view campaign data
//Route::get('index','AuthController@index');
Route::get('view-records','AuthController@view_records');//rename controller later
//code adding campaign
Route::post('post-camp-registration', 'AuthController@postCampRegistration');
//code to edit records
Route::put('edit-camp-registration', 'AuthController@editCampRegistration');
Route::get('camp_update/{id}','AuthController@camp_update');
Route::post('edit_camp/{id}','AuthController@edit_camp');

Route::get('camp_detail/{id}','AuthController@camp_detail');
Route::get('camp_register_detail/{id}','AuthController@camp_register_detail');

Route::get('camp_register_detail/camp-register-complete/{donor_id}/{camp_id}','AuthController@camp_register_complete');
Route::get('camp_register_complete_detail/{id}','AuthController@camp_register_complete_detail');
//Route::post('/{id}','AuthController@edit_camp');
//get record by id
//Route::get('view-records-id','AuthController@getRecordById');

//code for view donor data
Route::get('view-donor-records','AuthController@view_donor_records');//rename controller later
//code adding campaign
Route::post('donors-registration', 'AuthController@postDonorsRegistration');
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
