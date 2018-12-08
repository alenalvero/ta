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
// Route::get('home', 'TestController@index');
Route::group(['middleware'=>['auth']], function(){
Route::get('home', 'PelangganController@index');

// Route::get('karyawan/destroy/{id}', 'KaryawanController@destroy');
//Route::put('blog/edit/{id}', 'BlogController@update');
//Route::get('blog/edit/{id}', 'BlogController@edit');
//Route::post('blog/create', 'BlogController@store');
//Route::get('blog/create', 'BlogController@create');
//Route::get('blog', 'BlogController@index');
//Route::get('email','BlogController@sendMail');

// Route::resource('karyawan', 'KaryawanController');
Route::resource('paket_tour', 'Paket_tourController');
Route::resource('pelanggan', 'PelangganController');
Route::resource('pemesanan', 'PemesananController');
Route::resource('karyawan1', 'Karyawan1Controller');
Route::resource('user', 'UserController')->middleware('auth');
Route::resource('bis', 'BisController');
Route::resource('konfirmasi_pembayaran', 'Konfirmasi_pembayaranController');
Route::resource('trayek', 'TrayekController');
Route::resource('tempat_wisata', 'Tempat_wisataController');


Route::get('pelanggan/destroy/{id}', 'PelangganController@destroy');
Route::get('karyawan1/destroy/{id}', 'Karyawan1Controller@destroy');
Route::get('user/destroy/{id}', 'UserController@destroy');
Route::put('user/edit/{id}', 'UserController@update');
Route::get('user/edit/{id}', 'UserController@edit');
Route::put('tempat_wisata/edit/{id}', 'Tempat_wisataController@update');
Route::get('tempat_wisata/edit/{id}', 'Tempat_wisataController@edit');
Route::get('tempat_wisata/destroy/{id}', 'Tempat_wisataController@destroy');
Route::get('bis/destroy/{id}', 'BisController@destroy');
Route::put('bis/edit/{id}', 'BisController@update');
Route::get('bis/edit/{id}', 'BisController@edit');
Route::put('trayek/edit/{id}', 'TrayekController@update');
Route::get('trayek/edit/{id}', 'TrayekController@edit');
Route::get('trayek/destroy/{id}', 'TrayekController@destroy');
Route::get('/get_wisata/{id}', 'TrayekController@get_wisata');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user','UserController@index')->name('user');


