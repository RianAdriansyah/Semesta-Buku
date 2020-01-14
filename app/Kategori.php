<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kategori extends Model
{
    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($kategori) {

    //         if ($kategori->artikel->count() > 0) {

    //             $html = 'Kategori ini memiliki artikel : ';
    //             $html .= '<ul>';
    //             foreach ($kategori->artikel as $data) {
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
