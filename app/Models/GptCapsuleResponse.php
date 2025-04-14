<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GptCapsuleResponse extends Model
{
    protected $fillable = [
        'category_id',
        'user_input',
        'response_json',
    ];

    protected $casts = [
        'response_json' => 'array',
    ];
}
