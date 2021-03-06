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

use Illuminate\Support\Facades\URL;

Route::get('/', 'HomeController@index');

Route::post('upload', 'HomeController@upload');
Route::post('uploadWatermark', 'HomeController@uploadWatermark');
Route::post('deleteWatermark', 'HomeController@deleteWatermark');
Route::get('download', 'HomeController@download');
Route::get('delete', 'HomeController@delete');
