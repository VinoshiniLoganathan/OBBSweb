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

Route::get('/404', function () {
    return view('404');
});

Route::get('/505', function () {
    return view('505');
});

Route::get('/advanced_form', function () {
    return view('advanced_form');
});

Route::get('/basic_table', function () {
    return view('basic_table');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/camp_update', function () {
    return view('camp_update');
});

Route::get('/boxed_page', function () {
    return view('boxed_page');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/c3_chart', function () {
    return view('c3_chart');
});

Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/draggable_portlet', function () {
    return view('draggable_portlet');
});

Route::get('/dropzone', function () {
    return view('dropzone');
});

Route::get('/dynamic_table', function () {
    return view('dynamic_table');
});

Route::get('/editable_table', function () {
    return view('editable_table');
});

Route::get('/file_upload', function () {
    return view('file_upload');
});

Route::get('/flot_chart', function () {
    return view('flot_chart');
});

Route::get('/font_awesome', function () {
    return view('font_awesome');
});

Route::get('/form_component', function () {
    return view('form_component');
});

Route::get('/form_validation', function () {
    return view('form_validation');
});

Route::get('/camp_registration', function () {
    return view('camp_registration');
});

Route::get('/form_wizard', function () {
    return view('form_wizard');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/general', function () {
    return view('general');
});

Route::get('/google_map', function () {
    return view('google_map');
});

Route::get('/grids', function () {
    return view('grids');
});

Route::get('/horizontal_menu', function () {
    return view('horizontal_menu');
});


Route::get('/index', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('FrontEnd.index');
// });

Route::get('/inline_editor', function () {
    return view('inline_editor');
});

Route::get('/invoice_print', function () {
    return view('invoice_print');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/language', function () {
    return view('language');
});

Route::get('/lock_screen', function () {
    return view('lock_screen');
});

// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/mail_compose', function () {
    return view('mail_compose');
});

Route::get('/mail_view', function () {
    return view('mail_view');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::get('/morris', function () {
    return view('morris');
});

Route::get('/nestable', function () {
    return view('nestable');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/responsive_table', function () {
    return view('responsive_table');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/tree_view', function () {
    return view('tree_view');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/vector_map', function () {
    return view('vector_map');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/widget', function () {
    return view('widget');
});

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

//code for routing or linking to web methods
//Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

//code for view data
//Route::get('index','AuthController@index');
Route::get('view-records','AuthController@index');//rename controller later
//code adding campaign
Route::post('post-camp-registration', 'AuthController@postCampRegistration');
//code to edit records
Route::put('edit-camp-registration', 'AuthController@editCampRegistration');
Route::get('camp_update/{id}','AuthController@show');
Route::post('edit_camp/{id}','AuthController@edit_camp');
//Route::post('/{id}','AuthController@edit_camp');

//get record by id
//Route::get('view-records-id','AuthController@getRecordById');