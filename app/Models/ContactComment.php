<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactComment extends Model
{
    protected $fillable = [
        'contact_id',
        'comment',
        'created_at',
        'updated_at',
    ];
}
