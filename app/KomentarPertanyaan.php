<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarPertanyaan extends Model
{
    protected $table = 'komentar_pertanyaan';
    protected $fillable = ['komentar', 'id_pertanyaan','id_user'];
    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'id_pertanyaan');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
