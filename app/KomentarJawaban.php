<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    protected $table = 'komentar_jawaban';
    protected $fillable = ['komentar', 'id_jawaban','id_user'];
    public function jawaban()
    {
        return $this->belongsTo('App\Jawaban', 'id_jawaban');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
