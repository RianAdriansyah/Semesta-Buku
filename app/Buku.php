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

    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($buku) {

    //         if ($buku->artikel->count() > 0) {

    //             $html = 'Buku ini memiliki artikel : ';
    //             $html .= '<ul>';
    //             foreach ($buku->artikel as $data) {
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
