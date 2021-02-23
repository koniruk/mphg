<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * ロケーションの配列を取得
     *
     * @return array
     */
    public function getLocationLists(){
        $locations = $this->all();
        $locationLists = [];
        foreach($locations as $location){
            $locationLists[$location->id] = $location->name;
        }
        return $locationLists;
    }
}
