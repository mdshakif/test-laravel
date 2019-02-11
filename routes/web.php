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
//logout
Route::get('/logout','AdminController@logout');



Route::get('/', function () {
    return view('player_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

Route::get('/viewprofile','AdminController@viewprofile');

Route::get('/setting','AdminController@setting');


//add student....
Route::get('/addplayers','AddplayersController@addplayers');
Route::post('/save_player','AddplayersController@saveplayer');
//all page rout here
Route::get('/allplayers','AllplayersController@allplayers');

Route::get('/dhaka','dhakaController@dhaka');

Route::get('/khulna','khulnaController@khulna');

Route::get('/comilla','comillaController@comilla');

Route::get('/rajshahi','rajshahiController@rajshahi');

Route::get('/sylhet','sylhetController@sylhet');

Route::get('/playerfee','playersfeeController@playerfee');
//kajhoine full maneger
Route::get('/allmaneger','manegerController@maneger');