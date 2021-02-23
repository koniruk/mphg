<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_type_id',
        'contact_status_id',
        'world_id',
        'location_id',
        'size_id',
        'sex_id',
        'name',
        'email',
        'url',
        'created_at',
        'updated_at',
    ];
}
