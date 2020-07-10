<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    protected $fillable = ['nama_tag'];
    public function pertanyaan()
    {
        return $this->belongsToMany('App\Pertanyaan', 'pertanyaan_tag', 'id_tag', 'id_pertanyaan');
    }
}
