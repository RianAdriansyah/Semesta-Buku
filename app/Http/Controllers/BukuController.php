<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Tag;
use App\Kategori;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;
use Session;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::with('kategori')->latest()->get();

        return view('backend.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->slug = str_Slug($request->judul);
        # Foto
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/buku/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $buku->cover = $filename;
        }
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->no_isbn = $request->no_isbn;
        $buku->rating = $request->rating;
        $buku->sinopsis = $request->sinopsis;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->kategori_id = $request->kategori_id;
        $buku->save();
        $buku->tag()->attach($request->tag);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Buku <b>$buku->judul</b> berhasil ditambahkan!"
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        $selected = $buku->tag->pluck('id')->toArray();
        return view('backend.buku.show', compact('buku', 'kategori', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        $selected = $buku->tag->pluck('id')->toArray();
        return view('backend.buku.edit', compact('buku', 'kategori', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->judul = $request->judul;
        $buku->slug = str_slug($request->judul);
        # Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/buku/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if ($buku->cover) {
                $old_cover = $buku->cover;
                $filepath = public_path() . '/assets/img/buku/cover' . $buku->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $buku->cover = $filename;
        }
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->no_isbn = $request->no_isbn;
        $buku->rating = $request->rating;
        $buku->sinopsis = $request->sinopsis;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->kategori_id = $request->kategori_id;
        $buku->save();
        $buku->tag()->sync($request->tag);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Buku <b>$buku->judul</b> berhasil diedit!"
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        if ($buku->cover) {
            $old_cover = $buku->cover;
            $filepath = public_path() . '/assets/img/buku/cover' . $buku->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }
        $buku->delete();
        $buku->tag()->detach($buku->id);

        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Buku <b>$buku->judul</b> berhasil dihapus!"
        ]);

        return redirect()->route('buku.index');
    }
}
