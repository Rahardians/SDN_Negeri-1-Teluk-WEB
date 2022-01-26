<?php

namespace App\Models\ContentManagement\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GurudanKaryawan extends Model
{
    use HasFactory;

    protected $table = 'gurudankaryawans';

    protected $fillable = [
        'title',
        'content',
        'img'

    ];
}
