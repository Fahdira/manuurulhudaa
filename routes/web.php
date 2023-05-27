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
Route::get('/admin/siswa/show{id}', 'App\Http\Controllers\AdminController@showSiswa')->name('admin.showSiswa');
Route::post('/admin/siswa/change{id}', 'App\Http\Controllers\AdminController@postChange')->name('admin.postChange');
Route::post('/admin/siswa/charge{id}', 'App\Http\Controllers\AdminController@postCharge')->name('admin.postCharge');
Route::post('/admin/siswa/pay{id}', 'App\Http\Controllers\AdminController@postPay')->name('admin.postPay');
Route::get('/admin/siswa/edit{id}', 'App\Http\Controllers\AdminController@getEditSiswa')->name('admin.getEditSiswa');

Route::get('/admin/pendaftaran/index', 'App\Http\Controllers\PendaftaranController@getIndex')->name('pendaftaran.getIndex');
Route::get('/admin/pendaftaran/create', 'App\Http\Controllers\PendaftaranController@getCreate')->name('pendaftaran.getCreate');
Route::get('/admin/pendaftaran/edit{id}', 'App\Http\Controllers\PendaftaranController@getEdit')->name('pendaftaran.getEdit');
Route::post('/admin/pendaftaran/store', 'App\Http\Controllers\PendaftaranController@postStore')->name('pendaftaran.postStore');
Route::post('/admin/pendaftaran/update{id}', 'App\Http\Controllers\PendaftaranController@postUpdate')->name('pendaftaran.postUpdate');
Route::post('/admin/pendaftaran/change{id}', 'App\Http\Controllers\PendaftaranController@postChange')->name('pendaftaran.postChange');
Route::delete('/admin/pendaftaran/delete{id}', 'App\Http\Controllers\PendaftaranController@destroy')->name('pendaftaran.destroy');

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
Route::get('/users/daftar', 'App\Http\Controllers\UsersController@getDaftar')->name('users.getDaftar');
Route::get('/users/create', 'App\Http\Controllers\UsersController@getCreate')->name('users.getCreate');
Route::post('/users/store', 'App\Http\Controllers\UsersController@postStore')->name('users.postStore');
Route::get('/users/login', 'App\Http\Controllers\UsersController@getLogin')->name('users.getLogin');
Route::post('/users/login', 'App\Http\Controllers\UsersController@postLogin')->name('users.postLogin');
Route::get('/users/logout', 'App\Http\Controllers\UsersController@getLogout')->name('users.getLogout');

Route::get('/users/daftar/siswa', 'App\Http\Controllers\SiswaController@getIndex')->name('siswa.getIndex');
Route::post('/users/daftar/store', 'App\Http\Controllers\SiswaController@postStore')->name('siswa.postStore');
Route::get('/users/daftar/alamat', 'App\Http\Controllers\AlamatController@getIndex')->name('alamat.getIndex');

Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'DependentDropdownController@cities')->name('cities');
Route::get('districts', 'DependentDropdownController@districts')->name('districts');
Route::get('villages', 'DependentDropdownController@villages')->name('villages');



