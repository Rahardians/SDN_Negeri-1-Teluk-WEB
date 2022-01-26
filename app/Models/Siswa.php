<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FileSiswa;

class Siswa extends Model
{
    protected $fillable =[
        'nama',
        'nik',
        'alamat',
        'nama_ibu',
        'nama_ayah',
        'active'
    ];
}
