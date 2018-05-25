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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Createpost', 'HomeController@Createpost')->name('manageusers');
Route::get('/Allpost', 'HomeController@Allpost')->name('PendingUsers');
Route::post('/Createnewpost','\App\Http\Controllers\HomeController@Createnewpost');//create new chatroom
Route::get('/postpage/{id}','\App\Http\Controllers\HomeController@OnePage')->name('OneChatRooom');
Route::post('postpage/PostComment','\App\Http\Controllers\HomeController@PostComment');//create new chatroom