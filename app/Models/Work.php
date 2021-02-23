<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'world_id',
        'location_id',
        'size_id',
        'public_status_id',
        'name',
        'access',
        'created_at',
        'updated_at',
    ];

    public function world()
    {
        return $this->belongsTo('App\Models\World');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function public_status()
    {
        return $this->belongsTo('App\Models\PublicStatus');
    }
}
