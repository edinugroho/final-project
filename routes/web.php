<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

// Pertanyaan
Route::view('pertanyaan', 'pertanyaan.index'); //  Jawab pertanyaan
Route::view('pertanyaan/create', 'pertanyaan.create'); // Menambahkan pertanyaan
Route::view('pertanyaan/edit', 'pertanyaan.edit'); // Mengubah pertanyaan

// Jawaban
Route::view('jawaban/edit', 'jawaban.edit'); // Mengubah jawaban

Route::view('login', 'login');
