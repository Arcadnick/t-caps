<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'capsule_id', 'user_name', 'email', 'message', 'request_type', 'status'
    ];

    public function capsule()
    {
        return $this->belongsTo(Capsule::class, 'capsule_id');
    }
}
