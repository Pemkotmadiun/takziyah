<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/laporan/{laporan}/show/', 'LaporanController@show')->name('laporan.show');

Route::post('/laporan/validasi', 'LaporanController@validasi_store')->name('validasi.store');

//Profil / Ubah Password
Route::get('/profil', 'ProfilController@index')->name('profil.index');

Route::post('ubah_password', 'ProfilController@ubah_password')->name('profil.ubah_password');