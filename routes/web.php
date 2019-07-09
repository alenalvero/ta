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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/check-user', 'WelcomeController@checkUser');
});
Route::group(
	['middleware' => ['auth', 'role:operator']],
	function () {
		Route::get('/operator', function () {
			dd(auth()->user()->type);
		});

		Route::resource('operator/paket_tour', 'Paket_tourController');
		Route::get('operator/paket_tour/destroy/{id}', 'Paket_tourController@destroy');
		// Route::resource('operator/pelanggan', 'PelangganController');
		Route::resource('operator/pemesanan', 'PemesananController');

		Route::resource('operator/kota', 'KotaController');
		Route::resource('operator/bis', 'BisController');
		Route::resource('operator/konfirmasi_pembayaran', 'Konfirmasi_pembayaranController');
		Route::post('operator/ ', 'Konfirmasi_pembayaranController@verifikasi');
		Route::get('operator/konfirmasi_pembayaran_individu', 'Konfirmasi_pembayaranController@individu');
		Route::post('operator/verifikasi_individu', 'Konfirmasi_pembayaranController@verifikasi_individu');
		Route::resource('operator/trayek', 'TrayekController');
		Route::resource('operator/tempat_wisata', 'Tempat_wisataController');
		Route::resource('operator/pemesanan_paket_tour', 'Pemesanan_paket_tourController');
		// Route::get('operator/pelanggan/destroy/{id}', 'PelangganController@destroy');
		Route::get('operator/karyawan1/destroy/{id}', 'Karyawan1Controller@destroy');
		Route::put('operator/tempat_wisata/{id}/edit', 'Tempat_wisataController@update');
		Route::get('operator/tempat_wisata/{id}/edit', 'Tempat_wisataController@edit');
		Route::get('operator/tempat_wisata/destroy/{id}', 'Tempat_wisataController@destroy');
		Route::get('operator/kota/destroy/{id}', 'KotaController@destroy');
		Route::put('operator/kota/edit/{id}', 'KotaController@update');
		Route::get('operator/bis/destroy/{id}', 'BisController@destroy');
		Route::put('operator/bis/edit/{id}', 'BisController@update');

		Route::put('operator/trayek/edit/{id}', 'TrayekController@update');
		Route::get('operator/trayek/edit/{id}', 'TrayekController@edit');
		Route::get('operator/trayek/destroy/{id}', 'TrayekController@destroy');
	
	Route::resource('operator/hotel', 'HotelController');
	Route::resource('operator/mobil', 'MobilController');

		Route::get('operator/pemesanan/{id}edit', 'PemesananController@edit');
		Route::get('operator/pemesanan/{id}edit', 'PemesananController@update');
		Route::get('operator/pemesanan/{id}/pilih-mobil', 'PemesananController@pilih_mobil');
	}
);
Route::get('/get_wisata/{id}', 'TrayekController@get_wisata');
Route::put('customer_PaketTour/form_input_paket/{id}/pesan', 'CustomerController@update');
Route::get('customer_PaketTour/form_input_paket/{id}/pesan', 'CustomerController@pesan');
Route::get('customer_PaketTour/detail_paket/{id}/detail', 'Customer_PaketTourController@detail');
Route::post('customer_PaketTour/create', 'CustomerController@create')->name('customer.create');
Route::resource('/', 'CustomerController');
Route::resource('/customer_PaketTour', 'Customer_PaketTourController');
Route::resource('/about', 'AboutController');

Route::get('profile/detail_order/{id}/show', 'Pemesanan_paket_tourController@show');
Route::post('profile/konfirmasi_pembayaran', 'Konfirmasi_pembayaranController@update');
Route::get('profile/konfirmasi_pembayaran/{id}/konfirmasi', 'Konfirmasi_pembayaranController@konfirmasi');
Route::group(['middleware' => ['auth', 'role:admin']], function () {

	// Route::get('karyawan/destroy/{id}', 'KaryawanController@destroy');
	//Route::put('blog/edit/{id}', 'BlogController@update');
	//Route::get('blog/edit/{id}', 'BlogController@edit');
	//Route::post('blog/create', 'BlogController@store');
	//Route::get('blog/create', 'BlogController@create');
	//Route::get('blog', 'BlogController@index');
	//Route::get('email','BlogController@sendMail');
	// Route::resource('karyawan', 'KaryawanController');
	Route::resource('admin/user', 'UserController')->middleware('auth');
	Route::get('admin/user/destroy/{id}', 'UserController@destroy');
	Route::put('admin/user/edit/{id}', 'UserController@update');
	Route::get('admin/user/edit/{id}', 'UserController@edit');
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pelanggan/daftar', 'PelangganController@daftar');
Route::post('/pelanggan/proses_daftar', 'PelangganController@proses_daftar')->name('proses_daftar_pelanggan');

Route::get('/pelanggan/login', 'PelangganController@login');
Route::post('/pelanggan/proses_login', 'PelangganController@proses_login')->name('proses_login_pelanggan');

Route::get('/pelanggan/logout', 'PelangganController@logout');
Route::post('/tes-email', 'UserController@sendMail');

Route::group(['middleware' => ['auth', 'role:user']], function () {
	Route::get('/pelanggan/upload_struk/{id}', 'CustomerController@upload_struk');
	Route::post('/pelanggan/upload_struk/{id}', 'CustomerController@proses_upload_struk');
	Route::resource('/profile', 'ProfileController');
	Route::get('/struk/{id}', 'CustomerController@cetak_struk');
});
