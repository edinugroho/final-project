<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['pertanyaans'] = Pertanyaan::paginate(5);
        return view('index', $data);
    }
    public function profile()
    {
        dd(auth()->user());
    }
}
