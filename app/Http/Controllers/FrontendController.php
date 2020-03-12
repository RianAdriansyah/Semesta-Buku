<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Buku;
use App\Tag;
use App\Review;
use App\Kategori;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $buku = Buku::with('kategori')->orderBy('created_at', 'desc')->paginate(6);
        $best = Buku::with('kategori')->inRandomOrder()->paginate(8);
        $artikel = Artikel::with('tag')->orderBy('created_at', 'desc')->paginate(3);
        $review = Review::with('buku')->paginate(10);
        $allbuku = Buku::with('kategori')->paginate(9);
        return view('frontend.index', compact('buku', 'review', 'artikel', 'allbuku', 'best'));
    }

    public function buku(Request $request)
    {
        $buku = Buku::with('kategori')->paginate(6);
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->paginate(50);
        $tag = Tag::all();

        $caribuku = $request->caribuku;
        $sort = $request->sort;
        if ($caribuku) {
            $buku = Buku::where('judul', 'LIKE', "%$caribuku%")->paginate(5);
        }
        if ($sort == 'baru') {
            $buku = Buku::orderBy('created_at', 'desc')->paginate(6);
        }
        if ($sort == 'lama') {
            $buku = Buku::orderBy('created_at', 'asc')->paginate(6);
        }
        return view('frontend.buku', compact('buku', 'kategori', 'tag'));
    }
    public function blog(Request $request)
    {
        $artikel = Artikel::with('tag', 'buku')->orderBy('created_at', 'desc')->paginate(5);
        $tag = Tag::with('artikel')->get();

        $cariblog = $request->cariblog;

        if ($cariblog) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cariblog%")->paginate(5);
        }

        return view('frontend.blog', compact('artikel', 'tag'));
    }
    public function review(Request $request)
    {
        $review = Review::with('buku')->orderBy('created_at', 'desc')->paginate(6);
        $kategori = Kategori::all();
        $tag = Tag::all();

        $carireview = $request->carireview;
        $sort = $request->sort;
        if ($carireview) {
            $review = Review::where('judul', 'LIKE', "%$carireview%")->paginate(6);
        }
        // if ($sort == 'bukua') {
        //     $review = Review::orderBy('judul', 'asc')->paginate(6);
        // }
        // if ($sort == 'bukuz') {
        //     $review = Review::orderBy('judul', 'desc')->paginate(6);
        // }
        if ($sort == 'baru') {
            $review = Review::orderBy('created_at', 'desc')->paginate(6);
        }
        if ($sort == 'lama') {
            $review = Review::orderBy('created_at', 'asc')->paginate(6);
        }

        // $carireview = $request->carireview;

        // if ($carireview) {
        //     $caribuku = Buku::where('judul', 'LIKE', "%$carireview%")->paginate(5);
        // }
        return view('frontend.review', compact('review', 'kategori', 'tag'));
    }
    public function about(Request $request)
    {
        return view('frontend.about');
    }
    public function buku_single(Buku $buku)
    {
        $kategori = Kategori::all();
        // $buuku  = Buku::with('review')->get();
        $tag = Tag::all();
        // return dd($buku); 
        return view('frontend.buku_single', compact('buku', 'kategori', 'tag'));
    }
    public function blog_single(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();

        $cariblog = $artikel->cariblog;


        if ($cariblog) {
            $artikel = Artikel::where('judul', 'LIKE', "%$cariblog%")->paginate(5);
        }
        return view('frontend.blog_single', compact('artikel', 'kategori', 'tag'));
    }
    public function review_single(Review $review)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();

        $carireview = $review->carireview;

        if ($carireview) {
            $review = Review::where('judul', 'LIKE', "%$carireview%")->paginate(5);
        }
        return view('frontend.review_single', compact('review', 'kategori', 'tag'));
    }

    public function catbuku(Kategori $kategori, Request $request)
    {
        $tag = Tag::all();
        $sort = $request->sort;
        $buku = $kategori->buku()->latest()->paginate(5);

        if ($sort == 'baru') {
            $buku = Buku::orderBy('created_at', 'desc')->paginate(6);
        }
        if ($sort == 'lama') {
            $buku = Buku::orderBy('created_at', 'asc')->paginate(6);
        }
        return view('frontend.kategoribuku', compact('buku', 'kategori', 'tag'));
    }
    public function tagbuku(Tag $tag, Request $request)
    {
        $kategori = Kategori::all();
        $sort = $request->sort;
        $buku = $tag->buku()->latest()->paginate(5);

        if ($sort == 'baru') {
            $buku = Buku::orderBy('created_at', 'desc')->paginate(6);
        }
        if ($sort == 'lama') {
            $buku = Buku::orderBy('created_at', 'asc')->paginate(6);
        }
        return view('frontend.tagbuku', compact('buku', 'kategori', 'tag'));
    }

    public function tagreview(Tag $tag, Request $request)
    {
        $review = $tag->review()->latest()->paginate(5);
        $carireview = $request->carireview;

        $carireview = $request->carireview;
        $sort = $request->sort;
        if ($carireview) {
            $review = Review::where('judul', 'LIKE', "%$carireview%")->paginate(6);
        }
        if ($sort == 'baru') {
            $review = Review::orderBy('created_at', 'desc')->paginate(6);
        }
        if ($sort == 'lama') {
            $review = Review::orderBy('created_at', 'asc')->paginate(6);
        }

        // if ($carireview) {
        //     $review = Review::where('judul', 'LIKE', "%$carireview%")->paginate(5);
        // }

        return view('frontend.tagreview', compact('review', 'tag'));
    }
    public function tagblog(Tag $tag, Request $request)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        $cariblog = $request->cariblog;

        if ($cariblog) {
            $blog = Artikel::where('judul', 'LIKE', "%$cariblog%")->paginate(5);
        }

        return view('frontend.tagblog', compact('artikel', 'tag'));
    }

    public function reviewsaya()
    {
        // $reviews = Auth::user()->review()->get();
        $reviews = Review::with('buku', 'user')->get();
        return view('frontend.profile', compact('reviews'));
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
    public function rev_store(Request $request)
    {
        $review = new Review;
        $review->judul = $request->judul;
        $review->user_id = Auth::user()->id;
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

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Review <b>$review->judul</b> berhasil ditambahkan!"
        ]);

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
