<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul','isi','pertanyaan','id_user'];
    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'pertanyaan_tag', 'id_pertanyaan', 'id_tag');
    }
    public function jawaban()
    {
        return $this->hasMany('App\Jawaban', 'id_pertanyaan');
    }
    public function komentar()
    {
        return $this->hasMany('App\KomentarPertanyaan', 'id_pertanyaan');
    }
}
