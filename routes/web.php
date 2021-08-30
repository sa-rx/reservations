<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;




Route::get('/','App\Http\Controllers\PageController@index')->name('index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::resource('services','App\Http\Controllers\ServiceController');
Route::resource('reservations','App\Http\Controllers\ReservationController');
Route::resource('comments','App\Http\Controllers\CommentController');
Route::resource('opinions','App\Http\Controllers\OpinionController');
Route::resource('settings','App\Http\Controllers\SettingController');
Route::resource('tools','App\Http\Controllers\ToolController');
Route::resource('contacts','App\Http\Controllers\ContactController');
Route::resource('abouts','App\Http\Controllers\AboutController');
Route::resource('sendmails','App\Http\Controllers\sendmailController');



Route::get('user', [
  'uses' => 'App\Http\Controllers\PageController@user',
  'as'   => 'admin/user',
  'middleware' => 'roles',
  'roles' => ['admin']
]);


Route::get('admin', [
  'uses' => 'App\Http\Controllers\PageController@admin',
  'as'   => 'admin.admin',
  'middleware' => 'roles',
  'roles' => ['admin']
]);


Route::post('add-role', [
  'uses' => 'App\Http\Controllers\PageController@addRole',
  'as'   => 'admin/admin',
  'middleware' => 'roles',
  'roles' => ['admin']
]);





Route::get('editor', [
  'uses' => 'App\Http\Controllers\PageController@editor',
  'as'   => 'editor',
  'middleware' => 'roles',
  'roles' => ['admin','editor']
]);
