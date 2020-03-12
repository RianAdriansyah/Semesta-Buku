<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::latest()->get();

        return view('backend.tag.index', compact('tag'));
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
        $tag = new Tag;
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag);
        $tag->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "tag <b>$tag->nama_tag</b> berhasil ditambahkan!"
        ]);

        return redirect()->route('tag.index');
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
        $tag = Tag::findOrFail($id);

        return view('backend.tag.edit', compact('tag'));
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
        $tag = Tag::findOrFail($id);
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag);
        $tag->save();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "tag <b>$tag->nama_tag</b> berhasil diiedit!"
        ]);

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->nama_tag;
        $tag->delete();

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "tag <b>$tag->nama_tag</b> berhasil dihapus!"
        ]);

        return redirect()->route('tag.index');
    }
}
