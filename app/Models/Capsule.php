<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capsule extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'type',
        'is_blocked',
        'content',
        'automates',
        'expected',
        'image',
        'landing_url',
        'use_default_page',
        'default_price',
        'default_integrations',
    ];

    protected $casts = [
        'automates' => 'array',
        'expected' => 'array',
        'default_integrations' => 'array',
        'is_blocked' => 'boolean',
        'use_default_page' => 'boolean',
        'default_price' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'capsule_id');
    }
}
