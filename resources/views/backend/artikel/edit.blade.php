@extends('layouts.back')

@section('web-title')
    Edit Artikel
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
                <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Judul Artikel</label>
                            <input type="text" class="form-control" value="{{ $artikel->judul }}" name="judul">            
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Judul Buku</label>
                            <select name="buku_id" class="form-control" required>
                              @foreach ($buku as $list)
                            <option value="{{ $list->id }}"{{ ($artikel->buku->id == $list->id) ? 'selected': '' }}>{{ $list->judul }}</option>
                              @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-lg-4">
                            <img src="{{ asset('assets/img/artikel/cover/'.$artikel->cover)}}" width="80%" alt="product image">                            
                        </div>
                        <div class="form-group col-lg-8 my-auto">
                            <label for="">Cover</label>
                            <input type="file" class="form-control" name="cover">            
                        </div>
                    </div>
                      <div class="form-group">
                          <label for="">Genre</label>
                          @php $genre = \App\Genre::all(); @endphp
                          <select name="genre[]" class="form-control" id="select2" multiple>
                            @foreach($genre as $data)
                              <option value="{{ $data->id }}"
                                {{ (in_array($data->id, $selected)) ?
                                'selected="selected"' : '' }}>
                                {{ $data->nama_genre }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="">Konten</label>
                          <textarea name="konten" cols="30" rows="10" class="form-control" id="editor1">
                              {{ $artikel->konten }}
                          </textarea>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('artikel.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  