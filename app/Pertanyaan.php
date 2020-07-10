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
}
