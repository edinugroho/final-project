<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function tambah_pertanyaan(Request $request)
    {
        dd($request->all());
    }
}
