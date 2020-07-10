<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Auth::routes();
// Pertanyaan
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::view('pertanyaan', 'pertanyaan.index'); //  Jawab pertanyaan
    
    Route::get('pertanyaan/create', 'PertanyaanController@create'); // Menambahkan pertanyaan
    Route::post('pertanyaan/create', 'PertanyaanController@create_action');

    Route::get('pertanyaan/edit/{id_pertanyaan}', 'PertanyaanController@edit'); // Mengubah pertanyaan
    Route::put('pertanyaan/edit/{id_pertanyaan}', 'PertanyaanController@edit_action'); // Mengubah pertanyaan
    Route::delete('pertanyaan/delete/{id_pertanyaan}', 'PertanyaanController@delete'); // Mengubah pertanyaan

    // Jawaban
    Route::view('jawaban/edit', 'jawaban.edit'); // Mengubah jawaban
});

Route::view('login', 'login')->name('login');
