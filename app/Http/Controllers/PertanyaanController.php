<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
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
}
