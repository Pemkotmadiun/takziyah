<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/laporan/{laporan}/show/', 'LaporanController@show')->name('laporan.show');

Route::post('/laporan/validasi', 'LaporanController@validasi_store')->name('validasi.store');
