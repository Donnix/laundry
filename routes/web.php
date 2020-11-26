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
Route::resource('pakets','PaketController');
Route::resource('customers','CustomerController');
Route::resource('pesanans','PesananController');
Route::resource('pembayarans','PembayaranController');
Route::resource('karyawans','KaryawanController');
Route::resource('transactions','TransactionController');
Route::get('/laporans','LaporanController@index')->name('laporans');
Route::get('/laporans/cari','LaporanController@cari');
Route::get('/laporans/print','LaporanController@print')->name('laporans.print');
Route::get('/laporans/show','LaporanController@show')->name('laporans.show');
