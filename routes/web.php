<?php
 
Route::get('/', function () {
    return view('welcome');
});
 
 
Route::get('/pegawai', 'PegawaiController@index');