<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['jawaban','id_user','id_pertanyaan'];
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'id_pertanyaan');
    }
    public function komentar()
    {
        return $this->hasMany('App\KomentarJawaban', 'id_jawaban');
    }
}
