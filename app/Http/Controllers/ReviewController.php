<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Buku;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::with('buku', 'user')->latest()->get();

        return view('backend.review.index', compact('review'));
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
        $review = new Review;
        $review->judul = $request->judul;
        $review->buku_id = $request->buku_id;
        # Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/review/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $review->cover = $filename;
        }
        $review->isi = $request->isi;
        $review->quotes = $request->quotes;
        $review->rating = $request->rating;
        $review->slug = str_slug($request->judul);
        $review->save();
        $review->tag()->attach($request->tag);
        $review->user()->attach(Auth::user()->id);

        Alert::success('Berhasil', 'Data berhasil ditambahkan!');

        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::findOrFail($id);
        $buku = Buku::all();
        $selected = $review->tag->pluck('id')->toArray();
        return view('backend.review.show', compact('buku', 'review', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $buku = Buku::all();
        $selected = $review->tag->pluck('id')->toArray();
        return view('backend.review.edit', compact('buku', 'review', 'selected'));
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
        $review = Review::findOrFail($id);
        $review->judul = $request->judul;
        $review->buku_id = $request->buku_id;
        # Cover
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $path = public_path() . '/assets/img/review/cover';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if ($review->cover) {
                $old_cover = $review->cover;
                $filepath = public_path() . '/assets/img/review/cover' . $review->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $review->cover = $filename;
        }
        $review->isi = $request->isi;
        $review->quotes = $request->quotes;
        $review->rating = $request->rating;
        $review->slug = str_slug($request->judul);
        $review->save();
        $review->tag()->sync($request->tag);
        $review->user()->sync(Auth::user()->id);

        Alert::success('Berhasil', 'Data berhasil diubah!');

        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        if ($review->cover) {
            $old_cover = $review->cover;
            $filepath = public_path() . '/assets/img/review/cover' . $review->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }

        Alert::success('Berhasil', 'Data berhasil dihapus!');

        $review->delete();
        $review->tag()->detach($review->id);
        // $review->user()->detach($review->user->id);

        return redirect()->route('review.index');
    }
}
