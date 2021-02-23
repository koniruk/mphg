<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicStatus extends Model
{
    protected $table = 'public_status';

    protected $fillable = [
        'name',
    ];

    /**
     * サイズの配列を取得
     *
     * @return array
     */
    public function getPublicStatusList(){
        $public_status = $this->all();
        $publicStatusLists = [];
        foreach($public_status as $status){
            $publicStatusLists[$status->id] = $status->name;
        }
        return $publicStatusLists;
    }
}
