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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/filter/{id}', 'JenisController@filter');




Route::group(['middleware'=>['auth', 'role:admin']], function(){
		Route::resource('/jenis','JenisController');
		Route::resource('/supplier','SupplierController');
});

Route::group(['middleware'=>['auth', 'role:karyawan|admin']], function(){
		Route::resource('/barang','BarangController');
		Route::resource('/pembelian','PembelianController');
		Route::resource('/penjualan','PenjualanController');
		Route::resource('/laporan','LaporanController');
		Route::get('jual','laporanpenjualanController@index');
		Route::post('jual/penjualan','laporanpenjualanController@index2');
		Route::get('beli','laporanpembelianController@index');
		Route::post('beli/pembelian','laporanpembelianController@index2');
		
});