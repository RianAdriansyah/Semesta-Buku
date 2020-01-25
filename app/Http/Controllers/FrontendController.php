<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Buku;
use App\Genre;
use App\Review;
use App\Kategori;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buku = Buku::with('kategori')->paginate(6);
        $artikel = Artikel::with('buku')->paginate(3);
        $review = Review::with('buku')->paginate(10);
        $allbuku = Buku::with('kategori')->paginate(9);
        return view('frontend.index', compact('buku', 'review', 'artikel', 'allbuku'));
    }

    public function buku(Request $request)
    {
        $buku = Buku::with('kategori')->paginate(9);
        $kategori = Kategori::all();
        $genre = Genre::all();
        return view('frontend.buku', compact('buku', 'kategori', 'genre'));
    }
    public function blog(Request $request)
    {
        $artikel = Artikel::with('genre', 'buku')->paginate(5);
        $genre = Genre::all();
        return view('frontend.blog', compact('artikel', 'genre'));
    }
    public function review(Request $request)
    {
        $review = Review::with('buku')->paginate(5);
        $kategori = Kategori::all();
        $genre = Genre::all();
        return view('frontend.review', compact('review', 'kategori', 'genre'));
    }
    public function about(Request $request)
    {
        return view('frontend.about');
    }
    public function buku_single(Buku $buku)
    {
        $kategori = Kategori::all();
        $genre = Genre::all();
        return view('frontend.buku_single', compact('buku', 'kategori', 'genre'));
    }
    public function blog_single(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $genre = Genre::all();
        return view('frontend.blog_single', compact('artikel', 'kategori', 'genre'));
    }
    public function review_single(Request $request)
    {
        return view('frontend.review_single');
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
