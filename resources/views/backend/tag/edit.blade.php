@extends('layouts.back')

@section('web-title')
    Edit Tag
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
              <form action="{{ route('tag.update', $tag->id) }}" method="post">
                <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Tag</label>
                        <input type="text" name="nama_tag" id="" class="form-control" value="{{ $tag->nama_tag }}">
                    </div>
                        <button type="submit" class="btn btn-md btn-info">Simpan</button>
                        <a class="btn btn-md btn-warning" href="{{route('tag.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  