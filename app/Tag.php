<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name', 'description',
    ];
    /**
    * Get the channels associated with the given tag
    */
    public function channels() {
        return $this->belongsToMany('App\Channel'); //channel_id
    }
}
