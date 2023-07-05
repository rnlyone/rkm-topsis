<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'kelas',
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'kelas');
    }

    public function walikelas($userid)
    {
        return $this->kelas()->where('walikelas', $userid);
    }

    public function penilaian()
    {
        return $this->hasMany('App\Models\Penilaian', 'id_alternatif');
    }
}
