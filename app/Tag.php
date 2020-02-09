<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikel_tags', 'tag_id', 'artikel_id');
    }
    public function buku()
    {
        return $this->belongsToMany('App\Buku', 'buku_tags', 'tag_id', 'buku_id');
    }
    public function review()
    {
        return $this->belongsToMany('App\Review', 'review_tags', 'tag_id', 'review_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
