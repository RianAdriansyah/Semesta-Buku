<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Genre extends Model
{
    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'genre_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
