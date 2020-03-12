<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;
use Session;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::latest()->get();

        return view('backend.artikel.index', compact('artikel'));
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
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->user_id = Auth::user()->id;
        # Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/artikel/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $artikel->cover = $filename;
        }
        $artikel->konten = $request->konten;
        $artikel->slug = str_slug($request->judul);
        $artikel->save();
        $artikel->tag()->attach($request->tag);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Artikel <b>$artikel->judul</b> berhasil ditambahkan!"
        ]);

        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        $tag = Tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();

        return view('backend.artikel.show', compact('selected', 'artikel', 'tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $tag = Tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();

        return view('backend.artikel.edit', compact('selected', 'artikel', 'tag'));
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
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->user_id = Auth::user()->id;
        # Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/artikel/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if ($artikel->cover) {
                $old_cover = $artikel->cover;
                $filepath = public_path() . '/assets/img/artikel/cover' . $artikel->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $artikel->cover = $filename;
        }
        $artikel->konten = $request->konten;
        $artikel->slug = str_slug($request->judul);
        $artikel->save();
        $artikel->tag()->sync($request->tag);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Artikel <b>$artikel->judul</b> berhasil diedit!"
        ]);

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->cover) {
            $old_cover = $artikel->cover;
            $filepath = public_path() . '/assets/img/artikel/cover' . $artikel->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }

        $artikel->tag()->detach($artikel->id);
        $artikel->delete();

        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Artikel <b>$artikel->judul</b> berhasil dihapus!"
        ]);

        return redirect()->route('artikel.index');
    }
}
