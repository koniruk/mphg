<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'world_id',
        'public_status_id',
        'description',
        'display_date',
        'created_at',
        'updated_at',
    ];
}
