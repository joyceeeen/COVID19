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
Route::group(['middleware' => 'under-construction'], function () {

  Route::get('/', function () {
    return view('welcome');
  });
  Route::get('/covid','HomeController@covid');
  // Route::get('/tables', function () {
  //   return view('tables');
  // });
  Route::get('/rastable', function () {
    return view('rastable');
  });
  // Route::get('/json/ras','HomeController@ras');
  // Route::get('/json/cebuana','HomeController@cebuana');
  Route::get('/json/covid19','HomeController@covid19');
  Route::get('/json/branches','HomeController@branches');
  Route::get('analytics','HomeController@analytics');
  Route::get('/cebuana-vs-truemoney', 'HomeController@cebuanaView');
  Route::get('/cebuana-vs-palawan-ml', 'HomeController@palawanView');
  // Route::get('/cebuana-vs-mk', 'HomeController@palawanView');

});
