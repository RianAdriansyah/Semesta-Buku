@extends('layouts.back')

@section('web-title')
    Edit Buku
@endsection

@section('isi')
<div class="panel-header panel-header-lg-2  ">
    {{-- <canvas id="bigDashboardChart"></canvas> --}}
  </div>
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="container-fluid">
            <div class="card">
              <div class="card-body">
                <form action="{{ route('buku.update', $buku->id) }}" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                      <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="">Judul Buku</label>
                        <input type="text" class="form-control" value="{{ $buku->judul }}" name="judul">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-4">
                            <img src="{{ asset('assets/img/buku/cover/'.$buku->cover)}}" width="80%" alt="product image">                            
                        </div>
                        <div class="form-group col-lg-8 my-auto">
                            <label for="">Cover</label>
                            <input type="file" class="form-control" name="cover">            
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="">Nama Penulis</label>
                        <input type="text" class="form-control" value="{{ $buku->penulis }}" name="penulis">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="">Nama Penerbit</label>
                        <input type="text" class="form-control" value="{{ $buku->penerbit }}" name="penerbit">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="Kategori">Kategori</label>
                        <select name="kategori_id" class="form-control" required>
                          @foreach($kategori as $data)
                          <option value="{{ $data->id }}" {{ ($buku->kategori->id == $data->id) ? 'selected': '' }}>{{ $data->nama_kategori }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-lg-6">
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
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6 rating mt-5">
                      <p style="transform: translate(-50%, -50%) rotateY(180deg);">Rating : {{ $buku->rating }}</p>
                        <input type="radio" name="rating" id="star1" value="5"><label for="star1"></label>
                        <input type="radio" name="rating" id="star2" value="4"><label for="star2"></label>
                        <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
                        <input type="radio" name="rating" id="star4" value="2"><label for="star4"></label>
                        <input type="radio" name="rating" id="star5" value="1"><label for="star5"></label>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="">Nomor ISBN</label>
                        <input type="text" class="form-control" value="{{ $buku->no_isbn }}" name="no_isbn">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label for="">Jumlah Halaman</label>
                        <input type="number" class="form-control" value="{{ $buku->jml_halaman }}" name="jml_halaman">
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="">Tanggal Terbit</label>
                        <input type="date" class="form-control" value="{{ $buku->tgl_terbit }}" name="tgl_terbit">
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="">Sinopsis</label>
                        <textarea name="sinopsis" cols="30" rows="10" class="form-control" id="editor1">
                            {{ $buku->sinopsis }}
                        </textarea>
                      </div>
                      <button type="submit" class="btn btn-md btn-info">Simpan</button>
                      <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">Kembali</a>
                    </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  