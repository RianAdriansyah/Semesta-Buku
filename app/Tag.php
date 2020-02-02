<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'tag_id');
    }
    public function buku()
    {
        return $this->hasMany('App\Buku', 'tag_id');
    }
    public function review()
    {
        return $this->hasMany('App\Review', 'tag_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
