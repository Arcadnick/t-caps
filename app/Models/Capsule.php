<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capsule extends Model
{
    protected $fillable = [
        'title', 'slug', 'category_id', 'type', 'is_blocked', 'content'
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
