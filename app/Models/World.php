<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * ワールドの配列を取得
     *
     * @return array
     */
    public function getWorldLists(){
        $worlds = $this->all();
        $worldLists = [];
        foreach($worlds as $world){
            $worldLists[$world->id] = $world->name;
        }
        return $worldLists;
    }
}
