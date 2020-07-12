<?php

namespace App\Http\Controllers;

use App\Tag;
use App\User;
use App\Jawaban;
use App\Pertanyaan;
use App\KomentarPertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function tambah_reputasi($id_user)
    {
        $user = User::find($id_user);
        $user->reputasi += 10;
        $user->save();
    }
    public function create()
    {
        $data['tags'] = Tag::all();
        return view('pertanyaan.create', $data);
    }
    public function create_action(Request $request)
    {
        $pertanyaan = Pertanyaan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'id_user' => auth()->user()->id,
        ]);
        $tagIds = [];
        foreach ($request->tag as $t ) {
            $tag = Tag::firstOrCreate(['nama_tag' => $t]);
            if ($tag) {
                $tagIds[] = $tag->id;
            }
        }
        $pertanyaan->tag()->sync($tagIds);
        $this->tambah_reputasi(auth()->user()->id);
        return redirect('/');
    }
    public function edit($id_pertanyaan)
    {
        $data['tags'] = Tag::all();
        $data['pertanyaan'] = Pertanyaan::find($id_pertanyaan);
        return view('pertanyaan.edit', $data);
    }
    public function edit_action($id_pertanyaan, Request $request)
    {
        $pertanyaan = Pertanyaan::find($id_pertanyaan);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->id_user = auth()->user()->id;
        $tagIds = [];
        foreach ($request->tag as $t ) {
            $tag = Tag::firstOrCreate(['nama_tag' => $t]);
            if ($tag) {
                $tagIds[] = $tag->id;
            }
        }
        $pertanyaan->tag()->sync($tagIds);
        $pertanyaan->save();
        return redirect('/');
    }
    public function delete($id_pertanyaan)
    {
        $pertanyaan = Pertanyaan::find($id_pertanyaan)->delete();
        return redirect('/');
    }
    public function detail($id_pertanyaan)
    {
        $data['pertanyaan'] = Pertanyaan::find($id_pertanyaan);
        return view('pertanyaan.index', $data);
    }
    public function jawab($id_pertanyaan, Request $request)
    {
        $jawaban = Jawaban::create([
            'jawaban' => $request->jawaban,
            'id_user' => auth()->user()->id,
            'id_pertanyaan' => $id_pertanyaan
        ]);
        $this->tambah_reputasi(auth()->user()->id);
        return redirect()->back();
    }
    public function komentari($id_pertanyaan, Request $request)
    {
        $komentar = KomentarPertanyaan::create([
            'id_pertanyaan' => $id_pertanyaan,
            'komentar' => $request->komentar,
            'id_user' => auth()->user()->id,
        ]);
        return redirect()->back();
    }
    public function delete_komentar($id_komentar)
    {
        $komentar = KomentarPertanyaan::find($id_komentar)->delete();
        return redirect()->back();
    }
}
