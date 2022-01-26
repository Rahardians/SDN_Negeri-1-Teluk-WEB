<?php

namespace App\Models\ContentManagement\Galeri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'img'
        
    ];
}
