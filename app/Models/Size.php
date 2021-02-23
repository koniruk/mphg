<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * サイズの配列を取得
     *
     * @return array
     */
    public function getSizeLists(){
        $sizes = $this->all();
        $sizeLists = [];
        foreach($sizes as $size){
            $sizeLists[$size->id] = $size->name;
        }
        return $sizeLists;
    }
}
