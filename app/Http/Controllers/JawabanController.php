<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\KomentarJawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function komentari($id_jawaban, Request $request)
    {
        $komentar = KomentarJawaban::create([
            'id_jawaban' => $id_jawaban,
            'komentar' => $request->komentar,
            'id_user' => auth()->user()->id,
        ]);
        return redirect()->back();
    }
    public function edit($id_jawaban)
    {
        $data['jawaban'] = Jawaban::find($id_jawaban);
        return view('jawaban.edit', $data);
    }
    public function edit_action($id_jawaban, Request $request)
    {
        $jawaban = Jawaban::find($id_jawaban);
        $jawaban->jawaban = $request->jawaban;
        $jawaban->save();
        return redirect('pertanyaan/'.$request->id_pertanyaan);
    }
    public function delete_komentar($id_komentar)
    {
        $komentar = KomentarJawaban::find($id_komentar)->delete();
        return redirect()->back();
    }
}
