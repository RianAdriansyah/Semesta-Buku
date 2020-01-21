<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Session;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();

        return view('backend.genre.index', compact('genre'));
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
        $genre = new Genre;
        $genre->nama_genre = $request->nama_genre;
        $genre->slug = str_slug($request->nama_genre);
        $genre->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Genre <b>$genre->nama_genre</b> berhasil ditambahkan!"
        ]);

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);

        return view('backend.genre.edit', compact('genre'));
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
        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->slug = str_slug($request->nama_genre);
        $genre->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Genre <b>$genre->nama_genre</b> berhasil diiedit!"
        ]);

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->nama_genre;
        $genre->delete();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Genre <b>$genre->nama_genre</b> berhasil dihapus!"
        ]);

        return redirect()->route('genre.index');
    }
}
