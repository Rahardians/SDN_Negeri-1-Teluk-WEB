<?php

namespace App\Models\ContentManagement\Galeri;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'active'
        
    ];
}
