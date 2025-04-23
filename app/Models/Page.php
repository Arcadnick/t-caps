<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'price',
        'capsule_ids'
    ];
    protected $casts = [
        'capsule_ids' => 'array',
    ];
}
