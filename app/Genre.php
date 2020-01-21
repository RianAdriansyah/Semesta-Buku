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

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($genre) {

    //         if ($genre->artikel->count() > 0) {

    //             $html = 'genre ini memiliki artikel : ';
    //             $html .= '<ul>';
    //             foreach ($genre->artikel as $data) {
    //                 $html .= "<li>$data->judul</li>";
    //             }
    //             $html .= '</ul>';
    //             Session::flash("flash_notification", [
    //                 "level" => "danger",
    //                 "message" => $html
    //             ]);
    //             // membatalkan proses penghapusan
    //             return false;
    //         }
    //     });
    // }
}
