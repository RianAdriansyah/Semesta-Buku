@extends('layouts.back')

@section('web-title')
    Edit Genre
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
              <form action="{{ route('genre.update', $genre->id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Genre</label>
                        <input type="text" name="nama_genre" id="" class="form-control" value="{{ $genre->nama_genre }}">
                    </div>
                        <button type="submit" class="btn btn-md btn-info">Simpan</button>
                        <a name="" id="" class="btn btn-md btn-warning" href="{{route('genre.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  