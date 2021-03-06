<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'buku_tags', 'buku_id', 'tag_id');
    }

    public function review()
    {
        return $this->hasMany('App\Review', 'buku_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($buku) {

            if ($buku->review->count() > 0) {

                $html = 'Buku ini memiliki review : ';
                $html .= '<ul>';
                foreach ($buku->review as $data) {
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }
}
