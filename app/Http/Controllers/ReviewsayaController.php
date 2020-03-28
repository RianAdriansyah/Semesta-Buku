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

class ReviewsayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->ajax()) {

        //     $review = Review::all();
        //     return Datatables::of($review)
        //         ->addIndexColumn()
        //         ->addColumn('action', function ($row) {
        //             $btn = '<button type="button" id="edit-data" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit" data-id="' . $row->id . '"><i class="fa fa-edit"></i></button>';
        //             $btn = $btn . ' <button type="button" id="hapus-data" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus" data-id="' . $row->id . '" data-nama="' . $row->nama . '"><i class="fa fa-trash-o"></i></button>';

        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        // return view('frontend.reviewsaya');

        $review = Auth::user()->review()->orderBy('created_at', 'desc')->get();


        return view('frontend.reviewsaya', compact('review'));
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

        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Review <b>$review->judul</b> berhasil ditambahkan!"
        // ]);


        return redirect()->back();
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
        $review = Review::findOrFail($id);
        $buku = Buku::all();
        $selected = $review->tag->pluck('id')->toArray();
        return view('frontend.editreview', compact('buku', 'review', 'selected'));
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

        // Session::flash("flash_notification", [
        //     "level" => "success",
        //     "message" => "Review <b>$review->judul</b> berhasil diedit!"
        // ]);

        return redirect('reviewsaya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
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
        // Session::flash("flash_notification", [
        //     "level" => "danger",
        //     "message" => "Review <b>$review->judul</b> berhasil dihapus!"
        // ]);
        $review->delete();
        $review->tag()->detach($review->id);

        return redirect()->back();

        // dd($request->id);
    }
}
