<?php

namespace App\Models\ContentManagement\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstra extends Model
{
    use HasFactory;

    protected $table = 'ekstras';

    protected $fillable = [
        'title',
        'content',
        'img'

    ];
}
