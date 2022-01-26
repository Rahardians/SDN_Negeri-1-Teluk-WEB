<?php

namespace App\Models\ContentManagement\Kontak;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable=['title','alamat','email','hp','active'];
}
