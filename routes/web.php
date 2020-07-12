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

    Route::get('pertanyaan/{id_pertanyaan}', 'PertanyaanController@detail'); //detail
    Route::post('pertanyaan/{id_pertanyaan}/jawab', 'PertanyaanController@jawab');
    Route::post('pertanyaan/{id_pertanyaan}/komentar', 'PertanyaanController@komentari');
    Route::delete('pertanyaan/delete/komentar/{id_komentar}', 'PertanyaanController@delete_komentar'); 
    // Jawaban
    Route::get('jawaban/edit/{id_jawaban}', 'JawabanController@edit'); // Mengubah jawaban
    Route::put('jawaban/edit/{id_jawaban}', 'JawabanController@edit_action'); // Mengubah jawaban
    Route::post('jawaban/{id_jawaban}/komentar', 'JawabanController@komentari'); //komentari jawaban
    Route::delete('jawaban/delete/komentar/{id_komentar}', 'JawabanController@delete_komentar'); 

});

Route::view('login', 'login')->name('login');
