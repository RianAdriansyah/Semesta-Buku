@extends('layouts.back')

@section('web-title')
    Show Artikel
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
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                            <label for="">Judul Artikel</label>
                            <input type="text" class="form-control" disabled value="{{ $artikel->judul }}" name="judul">            
                        </div>
                        <div class="form-group col-lg-6">
                            <label for=""><i class="now-ui-icons larrows-1_cloud-upload-94"></i>Cover</label> <br>
                            <img src="{{ asset('assets/img/artikel/cover/'.$artikel->cover)}}" width="40%" alt="product image">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="">Tag</label>
                          @php $tag = \App\Tag::all(); @endphp
                          <select name="tag[]" class="form-control" id="select2" multiple disabled>
                            @foreach($tag as $data)
                              <option value="{{ $data->id }}"
                                {{ (in_array($data->id, $selected)) ?
                                'selected="selected"' : '' }}>
                                {{ $data->nama_tag }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="">Konten</label>
                          <textarea name="konten" cols="30" rows="10" class="form-control" disabled id="editor1">
                              {!! $artikel->konten !!}
                          </textarea>
                      </div>
                      <a class="btn btn-md btn-warning" href="{{route('artikel.index')}}" role="button">Kembali</a>
                    </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  