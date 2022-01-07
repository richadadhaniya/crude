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

Route::get('/', function () {
    return view('welcome');
});
// insert

Route::get('pageview','CrudeController@page')->name('page.view');
Route::get('views','CrudeController@view')->name('view');
Route::post('stores','CrudeController@store')->name('store');

// update

Route::get('edit{id}','CrudeController@edit')->name('edits');
Route::post('update','CrudeController@update')->name('updates');

// delete
Route::get('delete{id}','CrudeController@delete')->name('delete');