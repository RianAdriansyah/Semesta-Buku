<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use App\User;

class Role extends LaratrustRole
{
    public function user()
    {
        return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');
    }
}
