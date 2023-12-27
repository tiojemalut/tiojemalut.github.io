<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswa";
    // protected $fillabel=['nama','jurusan','jenis_kelamin','alamat'];
    
    protected $guarded=[];
}