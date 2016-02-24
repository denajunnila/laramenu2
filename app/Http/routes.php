<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//This is the main page
Route::get('/', 'DatabaseController@home');
//This is the subcatagory page with id to limit what is displayed
Route::get('subcat/{id}', 'DatabaseController@subcat');
//This is the subcatagory page with id to limit what is displayed
Route::get('item/{id}', 'DatabaseController@item');
Route::get('deletecat/{id}', 'DatabaseController@deletecat');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
