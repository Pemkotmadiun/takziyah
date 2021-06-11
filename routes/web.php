<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/berhasil', function () {
    return view('landing.berhasil');
});

Auth::routes(['verify' => true]);

Route::get('/', 'Landing\LandingController@index')->name('landing.index');

Route::post('/laporan', 'LaporanController@laporan')->name('laporan.store');

Route::get('/laporan/{laporan}', 'LaporanController@show')->name('laporan.show');

Route::post('/pengajuan/santunan', 'LaporanController@santunan_store')->name('pengajuan.santunan_store');

Route::delete('/pengajuan/santunan/{pengajuan}', 'LaporanController@santunan_destroy')->name('pengajuan.santunan_destroy');

Route::get('/pengajuan/ulang/{dokumen}/{pengajuan_santunan}','LaporanController@ulang')->name('pengajuan.ulang');

Route::post('/pengajuan/ulang','LaporanController@pengajuan_ulang_store')->name('pengajuan_ulang_store.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
