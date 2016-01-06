<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     * A user can have many channels
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function channels() {
       return $this->hasMany('App\Channel'); 
    }
}
