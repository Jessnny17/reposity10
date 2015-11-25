<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home','main_controller@home'); // this is the home page


Route::get('/about_us','main_controller@about_us'); //home page
Route::get('/contact_us','main_controller@contact_us'); //contact page
Route::get('/location','main_controller@location'); //location


Route::get('/search','main_controller@search'); //search page
Route::post('/search','main_controller@to_view_result'); //to view result page
Route::post('/search_result','main_controller@search_result'); //changing the search page select boxes

Route::get('/view_search_result/{dest_id}/{d_port}/{ship_id}','main_controller@view_search_result'); //view result page
Route::post('/view_search_result/{dest_id}/{d_port}/{ship_id}','main_controller@to_purchase');//to purchase page

Route::get('/view_payment/{cr_id}/{ca_id}/{qty}','main_controller@purchase'); //view purchase page
Route::post('/view_payment/{cr_id}/{ca_id}/{qty}','main_controller@purchase_save'); //view purchase page

Route::post('/add_compare','main_controller@add_compare'); //ajax for adding for compare
Route::get('/compare_list','main_controller@compare_list'); //compare page
Route::get('/remove_compare/{id}','main_controller@remove_compare'); //compare page









