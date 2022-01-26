<?php

namespace App\Models\ContentManagement\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisidanMisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'img'

    ];
}
