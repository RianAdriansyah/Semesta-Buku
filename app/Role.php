<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use App\User;

class Role extends LaratrustRole
{
    public function user()
    {
        return $this->hasMany('App\User', 'user_id');
    }
}
