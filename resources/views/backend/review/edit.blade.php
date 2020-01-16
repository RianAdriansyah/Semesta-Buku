@extends('layouts.back')

@section('web-title')
    Edit Review
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
                <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
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
                      </div>
                        <button type="submit" class="btn btn-md btn-info">Simpan</button>
                        <a name="" id="" class="btn btn-md btn-warning" href="{{route('review.index')}}" role="button">Kembali</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection  