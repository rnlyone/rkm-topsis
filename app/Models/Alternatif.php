<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'NIK',
        'nama',
        'alamat',
    ];

    public function penilaian()
    {
        return $this->hasMany('App\Models\Penilaian', 'id_alternatif');
    }
}
