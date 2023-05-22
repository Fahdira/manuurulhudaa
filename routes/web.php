<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('guests.index');});

Route::get('/admin', 'App\Http\Controllers\AdminController@getIndex')->name('admin.getIndex');
Route::get('/admin/login', 'App\Http\Controllers\AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin/login', 'App\Http\Controllers\AdminController@postLogin')->name('admin.postLogin');

Route::get('/users/index', 'App\Http\Controllers\UsersController@getIndex')->name('users.getIndex');
Route::get('/users/create', 'App\Http\Controllers\UsersController@getCreate')->name('users.getCreate');
Route::post('/users/store', 'App\Http\Controllers\UsersController@postStore')->name('users.postStore');
Route::get('/users/login', 'App\Http\Controllers\UsersController@getLogin')->name('users.getLogin');
Route::post('/users/login', 'App\Http\Controllers\UsersController@postLogin')->name('users.postLogin');



