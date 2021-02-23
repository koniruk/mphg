<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'world_id',
        'image',
        'comment',
        'updated_at',
    ];
}
