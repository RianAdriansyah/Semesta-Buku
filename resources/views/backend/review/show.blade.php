@extends('layouts.back')

@section('web-title')
    Detail Review
@endsection

@section('isi')
<div class="panel-header panel-header-lg-2">
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
                        <div class="form-group">
                            <label for="">Judul Review</label>
                        <input type="text" class="form-control" name="judul" value="{{ $review->judul }}" disabled>            
                        </div>
                        <div class="form-group">
                            <label for=""><i class="now-ui-icons larrows-1_cloud-upload-94"></i>Cover</label> <br>
                            <img src="{{ asset('assets/img/review/cover/'.$review->cover)}}" width="40%" alt="product image">
                        </div>
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                        <input type="text" class="form-control" value="{{ $review->buku->judul }}" disabled>           
                          </div>
                          <div class="form-group">
                            <label for="">Quotes</label>
                          <input type="text" class="form-control" name="quotes" value="{{ $review->quotes }}" disabled> 
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
                            <label for="">Isi</label>
                            <textarea name="isi" cols="30" rows="10" class="form-control" disabled id="editor1">
                                {{ $review->isi }}
                            </textarea>
                        </div>
                      </div>
                        <a name="" id="" class="btn btn-md btn-warning" href="{{route('review.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  