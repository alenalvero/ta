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
 Route::get('home', 'TestController@index');
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
	Route::resource('admin/paket_tour', 'Paket_tourController');
	Route::resource('admin/pelanggan', 'PelangganController');
	Route::resource('admin/pemesanan', 'PemesananController');
	Route::resource('admin/karyawan1', 'Karyawan1Controller');
	Route::resource('admin/user', 'UserController')->middleware('auth');
	Route::resource('admin/bis', 'BisController');
	Route::resource('admin/konfirmasi_pembayaran', 'Konfirmasi_pembayaranController');
	Route::resource('admin/trayek', 'TrayekController');
	Route::resource('admin/tempat_wisata', 'Tempat_wisataController');
	Route::resource('admin/pemesanan_paket_tour', 'Pemesanan_paket_tourController');
	Route::resource('/customer_PaketTour', 'Customer_PaketTourController');
	Route::resource('/about', 'AboutController');



	Route::get('admin/pelanggan/destroy/{id}', 'PelangganController@destroy');
	Route::get('admin/karyawan1/destroy/{id}', 'Karyawan1Controller@destroy');
	Route::get('admin/user/destroy/{id}', 'UserController@destroy');
	Route::put('admin/user/edit/{id}', 'UserController@update');
	Route::get('admin/user/edit/{id}', 'UserController@edit');
	Route::put('adin/tempat_wisata/edit/{id}', 'Tempat_wisataController@update');
	Route::get('admin/tempat_wisata/edit/{id}', 'Tempat_wisataController@edit');
	Route::get('admin/tempat_wisata/destroy/{id}', 'Tempat_wisataController@destroy');
	Route::get('admin/bis/destroy/{id}', 'BisController@destroy');
	Route::put('admin/bis/edit/{id}', 'BisController@update');
	Route::get('admin/bis/edit/{id}', 'BisController@edit');
	Route::put('admin/trayek/edit/{id}', 'TrayekController@update');
	Route::get('admin/trayek/edit/{id}', 'TrayekController@edit');
	Route::get('admin/trayek/destroy/{id}', 'TrayekController@destroy');
	Route::get('/get_wisata/{id}', 'TrayekController@get_wisata');

});

Route::resource('/', 'CustomerController');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');


