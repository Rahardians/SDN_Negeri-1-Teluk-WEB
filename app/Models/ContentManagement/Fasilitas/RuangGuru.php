<?php

namespace App\Models\ContentManagement\Fasilitas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangGuru extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'img'
        
    ];
}
