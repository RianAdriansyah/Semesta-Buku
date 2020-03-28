@extends('layouts.front')

@section('web-title')
Edit {{ $review->judul }}
@endsection

@section('isi')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                <h2 class="bradcaump-title" style="color:black;">{{ $review->judul }}</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="/" style="color:black;">Beranda</a>
                      <span class="brd-separetor">/</span>
                    <a class="breadcrumb_item" href="/reviewsaya" style="color:black;">Ulasan</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active" style="color:black;">{{ $review->judul }}</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="wishlist-area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="{{ route('reviewsaya.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        @csrf
                            <div class="form-group">
                                <label for="">Judul Review</label>
                            <input type="text" class="form-control" name="judul" value="{{ $review->judul }}">            
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <img src="{{ asset('assets/img/review/cover/'.$review->cover)}}" width="80%" alt="product image">                            
                                </div>
                                <div class="form-group col-lg-8 my-auto">
                                    <label for="">Cover</label>
                                    <input type="file" class="form-control" name="cover">            
                                </div>
                            </div>
                            <div class="form-group col-lg-6 ratingf mt-5">
                              <p style="transform: translate(-50%, -50%) rotateY(180deg);">Rating : {{ $review->rating }}</p>
                                <input type="radio" name="rating" id="star1" value="5"><label for="star1"></label>
                                <input type="radio" name="rating" id="star2" value="4"><label for="star2"></label>
                                <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
                                <input type="radio" name="rating" id="star4" value="2"><label for="star4"></label>
                                <input type="radio" name="rating" id="star5" value="1"><label for="star5"></label>
                              </div>
                            <div class="form-group">
                              <label for="">Tag</label>
                              @php $tag = \App\Tag::all(); @endphp
                              <select name="tag[]" class="form-control" id="select2" multiple>
                                @foreach($tag as $data)
                                  <option value="{{ $data->id }}"
                                    {{ (in_array($data->id, $selected)) ?
                                    'selected="selected"' : '' }}>
                                    {{ $data->nama_tag }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                @php $buku = \App\Buku::all(); @endphp
                                <select name="buku_id" class="form-control" required>
                                  <option value="">-- Pilih Buku --</option>
                                  @foreach ($buku as $data)
                                <option value="{{ $data->id }}" {{ ($review->buku->id == $data->id) ? 'selected': '' }}>{{ $data->judul }}</option>
                                  @endforeach
                                </select>            
                              </div>
                              <div class="form-group">
                                <label for="">Quotes</label>
                              <input type="text" class="form-control" name="quotes" value="{{ $review->quotes }}"> 
                                <small class="text-danger">*Opsional</small>           
                            </div>
                            <div class="form-group">
                                <label for="">Isi</label>
                                <textarea name="isi" cols="30" rows="10" class="form-control" id="editor1">
                                    {{ $review->isi }}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
                            <a class="btn btn-md btn-warning" href="/reviewsaya" role="button">Kembali</a>
                          </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end --> 

@endsection