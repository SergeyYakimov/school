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
// Route::post('/mail', 'MainSettingsController@post');
// Route::post('mail', 'MainSettingsController@post');

Route::post('/send', 'MailController@send');
Route::post('/newssend', 'MailController@newssend');
Route::post('/contactsend', 'MailController@contactsend');
Auth::routes();

Route::get('/', 'MainSettingsController@index');

//Route::get('/home', 'HomeController@index')->name('home');
