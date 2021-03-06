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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function schule()
    {
        return $this->hasOne("App\schulen", "schulnr", "schulID");
    }

    public function bewertung()
    {
        return $this->hasOne("App\bewertungen", "userID", "id");
    }
}
