<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTamplate extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'size_id',
        'created_at',
        'updated_at',
    ];
}
