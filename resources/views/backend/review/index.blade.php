@extends('layouts.back')

@section('web-title')
    Daftar Review
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
                  <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-lg fa-plus-square"></i></a></h6>
                  @include('layouts.flash')
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 10px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Ulasan</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Penulis</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @role('admin')
                      @foreach ($review as $list)

                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $list->judul }}</td>
                      <td>{{ $list->buku->judul }}</td>
                      <td><i class="fas fa-star" style="color:orange;"></i>{{ $list->rating }}</td>
                      <td>{{ $list->user[0]->name }}</td>
                      <td class="text-center"><a href="{{ route('review.edit', $list->id) }}" class="btn btn-sm btn-success rounded">
                          <i class="fas fa-fw fa-edit"></i></a> <br>
                      <a href="{{ route('review.show', $list->id) }}" class="btn btn-sm btn-info rounded">
                            <i class="fas fa-fw fa-info-circle"></i></a>
                            <form action="{{ route('review.destroy',$list->id) }}" method="post">
                              {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Anda yakin untuk menghapus data ini?')">
                                    <i class="fas fa-fw fa-trash-alt"></i>
                                  </button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      @endrole
                      @role('member')

                      @php
                          $reviews = Auth::user()->review()->latest()->get();
                      @endphp
                      
                      @foreach ($reviews as $list)
                      <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $list->judul }}</td>
                        <td>{{ $list->buku->judul }}</td>
                        <td><i class="fas fa-star" style="color:orange;"></i>{{ $list->rating }}</td>
                        <td>{{ $list->user[0]->name }}</td>
                        {{-- @if ($list->user[0]->name ==  Auth::user()->name) --}}
                          <td class="text-center"><a href="{{ route('review.edit', $list->id) }}" class="btn btn-sm btn-success rounded">
                            <i class="fas fa-fw fa-edit"></i></a> <br>
                            <a href="{{ route('review.show', $list->id) }}" class="btn btn-sm btn-info rounded">
                              <i class="fas fa-fw fa-info-circle"></i></a>
                              <form action="{{ route('review.destroy',$list->id) }}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Anda yakin untuk menghapus data ini?')">
                                  <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                              </form>
                          </td>
                        {{-- @else
                          <td><a href="{{ route('review.show', $list->id) }}" class="btn btn-sm btn-info rounded">
                            <i class="fas fa-fw fa-info-circle"></i></a></td>
                      </tr>   
                                @endif --}}
                              </td>
                            </tr>
                            @endforeach
                            
                      @endrole
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-lg-6">
              <label for="">Judul Review</label>
              <input type="text" class="form-control" required name="judul">
          </div>
          <div class="form-group col-lg-6">
              <label for="">Cover</label>
              <input type="file" class="form-control" name="cover">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
              <label for="">Judul Buku</label>
              @php $buku = \App\Buku::all(); @endphp
              <select name="buku_id" class="form-control" required>
                <option value="">-- Pilih Buku --</option>
                @foreach ($buku as $data)
              <option value="{{ $data->id }}">{{ $data->judul }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-lg-6 rating mt-5">
              <p style="transform: translate(-50%, -50%) rotateY(180deg);">Rating</p>
              <input type="radio" name="rating" id="star1" value="5"><label for="star1"></label>
              <input type="radio" name="rating" id="star2" value="4"><label for="star2"></label>
              <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
              <input type="radio" name="rating" id="star4" value="2"><label for="star4"></label>
              <input type="radio" name="rating" id="star5" value="1"><label for="star5"></label>
            </div>
        </div>
              <div class="form-group">
                <label for="">Quotes</label>
                <input type="text" class="form-control" name="quotes">
                <small class="text-danger">*Opsional</small>
            </div>
            <div class="form-group>
              <label for="">Tag</label>
                @php $tag = \App\Tag::all(); @endphp
                <select name="tag[]" class="form-control" required id="select2" style="width:100%;" required multiple>
                  @foreach ($tag as $list)
                <option value="{{ $list->id }}">{{ $list->nama_tag }}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Isi</label>
                <textarea name="isi" cols="30" rows="10" class="form-control" required id="editor1"></textarea>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>
@endsection
