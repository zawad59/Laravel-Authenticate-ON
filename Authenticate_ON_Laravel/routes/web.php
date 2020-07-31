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

Route::get('/SG', 'OnController@index')->name('SG');
Route::get('/MY', 'OnController@index')->name('MY');
Route::get('/PH', 'OnController@index')->name('PH');
Route::get('/TH', 'OnController@index')->name('TH');
Route::get('/TH.EN', 'OnController@index')->name('TH.EN');
Route::get('/VN', 'OnController@index')->name('VN');
Route::get('/VN.EN', 'OnController@index')->name('VN.EN');
Route::get('/ID', 'OnController@index')->name('ID');
Route::get('/ID.EN', 'OnController@index')->name('ID.EN');
Route::get('/TR', 'OnController@index')->name('TR');
Route::get('/TR.EN', 'OnController@index')->name('TR.EN');
Route::get('/EG', 'OnController@index')->name('EG');
Route::get('/EG.EN', 'OnController@index')->name('EG.EN');
Route::get('/SA', 'OnController@index')->name('SA');
Route::get('/SA.EN', 'OnController@index')->name('SA.EN');
Route::get('/IQ', 'OnController@index')->name('IQ');
Route::get('/IQ.EN', 'OnController@index')->name('IQ.EN');
Route::get('/AE', 'OnController@index')->name('AE');
Route::get('/AE.EN', 'OnController@index')->name('AE.EN');

Route::get('/{param}', function () {
    return redirect('/SG');
});
Route::get('/', function () {
    return redirect('/SG');
});
Route::post('/', 'OnController@store');

Route::post('/mail', 'OnController@sendmail');
Route::post('/postal', 'OnController@postal');
