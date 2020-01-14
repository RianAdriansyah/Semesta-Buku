@extends('layouts.back')

@section('web-title')
    Edit Kategori
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
              <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="" class="form-control" value="{{ $kategori->nama_kategori }}">
                    </div>
                        <button type="submit" class="btn btn-md btn-info">Simpan</button>
                        <a name="" id="" class="btn btn-md btn-warning" href="{{route('kategori.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  