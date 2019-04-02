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

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/ajaxreq', 'Controller@getcolour')->name('ajaxreq');
Route::get('/intreq','Controller@intreq')->name('intreq');
Route::get('/getinterior', 'Controller@getinterior')->name('getinterior');
Route::get('/carblack', 'Controller@getcar')->name('carblack');
Route::get('/intblack', 'Controller@getint')->name('intblack');



//Route::post('getcolour', 'Controller@getcolour');
