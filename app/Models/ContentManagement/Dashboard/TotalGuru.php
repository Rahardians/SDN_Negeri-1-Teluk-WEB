<?php

namespace App\Models\ContentManagement\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalGuru extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'img'
        
    ];
}
