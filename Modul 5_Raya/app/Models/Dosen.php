<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $guarded = ['id'];
    public function mahasiswas()

    {
        return $this->hasMany(Mahasiswa::class);
    }
    
}
