<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = true;

    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'review_tags', 'review_id', 'tag_id');
    }
    public function user()
    {
        return $this->belongsToMany('App\User', 'review_users', 'review_id', 'user_id');
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
