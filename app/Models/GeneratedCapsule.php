<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneratedCapsule extends Model
{
    protected $fillable = [
        'title', 'category_id', 'user_input', 'gpt_response_json', 'is_blocked', 'used_count'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
