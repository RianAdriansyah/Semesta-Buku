<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Buku;
use App\Genre;
use App\Review;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::with('kategori')->paginate(6);
        $allbuku = Buku::with('kategori')->get();
        $artikel = Artikel::with('buku')->paginate(3);
        $review = Review::with('buku')->paginate(10);
        return view('frontend.index', compact('buku', 'artikel', 'review', 'allbuku'));
    }
    public function buku(Request $request)
    {
        return view('frontend.buku');
    }
    public function blog(Request $request)
    {
        return view('frontend.blog');
    }
    public function review(Request $request)
    {
        return view('frontend.review');
    }
    public function about(Request $request)
    {
        return view('frontend.about');
    }
    public function buku_single(Request $request)
    {
        return view('frontend.buku_single');
    }
    public function blog_single(Request $request)
    {
        return view('frontend.blog_single');
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
