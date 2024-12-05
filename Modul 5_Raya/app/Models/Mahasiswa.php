<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mahasiswa extends Model
{
    protected $guarded = ['id'];
    public function dosen()
{
    return $this->belongsTo(Dosen::class, 'dosen_id'); // dosen_id is the foreign key in Mahasiswa
}
    
    
}
