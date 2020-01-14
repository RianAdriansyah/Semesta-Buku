<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $timestamps = true;

    public function genre()
    {
        return $this->belongsToMany('App\Genre', 'artikel_genres', 'artikel_id', 'genre_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku', 'buku_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
