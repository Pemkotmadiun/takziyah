<?php

Route::get('/', 'HomeController@index')->name('dashboard');

//Laporan
Route::get('/laporan/{laporan}/show/', 'LaporanController@show')->name('laporan.show');

Route::post('/laporan/validasi', 'LaporanController@validasi_store')->name('validasi.store');

Route::get('/laporan/keseluruhan', 'LaporanController@keseluruhan')->name('laporan.keseluruhan');

Route::get('/laporan/baru', 'LaporanController@baru')->name('laporan.baru');

Route::get('/laporan/diterima', 'LaporanController@diterima')->name('laporan.diterima');

Route::get('/laporan/ditolak', 'LaporanController@ditolak')->name('laporan.ditolak');

//Profil / Ubah Password
Route::get('/profil', 'ProfilController@index')->name('profil.index');

Route::post('ubah_password', 'ProfilController@ubah_password')->name('profil.ubah_password');