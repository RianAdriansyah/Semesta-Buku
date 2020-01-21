<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use App\Artikel;

class Kategori extends Model
{
    public function buku()
    {
        return $this->hasMany('App\Buku', 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kategori) {

            if ($kategori->buku->count() > 0) {

                $html = 'Kategori ini memiliki buku : ';
                $html .= '<ul>';
                foreach ($kategori->buku as $data) {
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
