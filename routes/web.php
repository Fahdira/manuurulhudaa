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

Route::get('/admin/index', 'App\Http\Controllers\AdminController@getIndex')->name('admin.getIndex');
Route::get('/admin', 'App\Http\Controllers\AdminController@getLogin')->name('admin.getLogin');
Route::get('/admin/login', 'App\Http\Controllers\AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin/login', 'App\Http\Controllers\AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'App\Http\Controllers\AdminController@getLogout')->name('admin.getLogout');
Route::get('/admin/user/index', 'App\Http\Controllers\AdminController@getUserIndex')->name('admin.getUserIndex');
Route::get('/admin/siswa/index', 'App\Http\Controllers\AdminController@getSiswaIndex')->name('admin.getSiswaIndex');
Route::get('/admin/siswa/edit{id}', 'App\Http\Controllers\AdminController@getEditSiswa')->name('admin.getEditSiswa');

Route::get('/admin/pendaftaran/index', 'App\Http\Controllers\AdminController@getPendaftaranIndex')->name('admin.getPendaftaranIndex');

Route::get('/admin/posts/index', 'App\Http\Controllers\PostsController@getIndex')->name('posts.getIndex');
Route::get('/admin/posts/create', 'App\Http\Controllers\PostsController@getCreate')->name('posts.getCreate');
Route::post('/admin/posts/store', 'App\Http\Controllers\PostsController@postStore')->name('posts.postStore');
Route::get('/admin/posts/edit{id}', 'App\Http\Controllers\PostsController@getEdit')->name('posts.getEdit');
Route::post('/admin/posts/update{id}', 'App\Http\Controllers\PostsController@postUpdate')->name('posts.postUpdate');
Route::delete('/admin/posts/delete{id}', 'App\Http\Controllers\PostsController@destroy')->name('posts.destroy');

Route::get('/admin/profile', 'App\Http\Controllers\AdminController@getProfile')->name('admin.getProfile');
Route::get('/admin/edit_profile', 'App\Http\Controllers\AdminController@getEditProfile')->name('admin.getEditProfile');
Route::post('/admin/edit_profile', 'App\Http\Controllers\AdminController@postUpdateProfile')->name('admin.postUpdateProfile');
Route::get('/admin/add', 'App\Http\Controllers\AdminController@getAdd')->name('admin.getAdd');
Route::post('/admin/post', 'App\Http\Controllers\AdminController@postAdd')->name('admin.postAdd');

Route::get('/users/index', 'App\Http\Controllers\UsersController@getIndex')->name('users.getIndex');
Route::get('/users/create', 'App\Http\Controllers\UsersController@getCreate')->name('users.getCreate');
Route::post('/users/store', 'App\Http\Controllers\UsersController@postStore')->name('users.postStore');
Route::get('/users/login', 'App\Http\Controllers\UsersController@getLogin')->name('users.getLogin');
Route::post('/users/login', 'App\Http\Controllers\UsersController@postLogin')->name('users.postLogin');
Route::get('/users/logout', 'App\Http\Controllers\UsersController@getLogout')->name('users.getLogout');



