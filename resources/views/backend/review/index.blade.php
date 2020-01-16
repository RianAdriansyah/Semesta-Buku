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
              <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a></h6>
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 10px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Review</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1; 
                    @endphp
                    @foreach ($review as $list)
                        
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $list->judul }}</td>
                    <td>{{ $list->buku->judul }}</td>
                    <td class="text-center"><a href="{{ route('review.edit', $list->id) }}" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a> <br>
                    <a href="{{ route('review.show', $list->id) }}" class="btn btn-sm btn-info rounded">
                          <i class="fas fa-fw fa-info-circle"></i></a> 
                          <form action="{{ route('review.destroy',$list->id) }}" method="post">
                            {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit">
                                  <i class="fas fa-fw fa-trash-alt"></i>
                                </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
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
            <div class="form-group">
                <label for="">Judul Review</label>
                <input type="text" class="form-control" required name="judul">            
            </div>
            <div class="form-group">
                <label for="">Cover</label>
                <input type="file" class="form-control" required name="cover">            
            </div>
            <div class="form-group">
                <label for="">Judul Buku</label>
                @php $buku = \App\Buku::all(); @endphp
                <select name="buku_id" class="form-control" required>
                  <option value="">-- Pilih Buku --</option>
                  @foreach ($buku as $data)
                <option value="{{ $data->id }}">{{ $data->judul }}</option>
                  @endforeach
                </select>            
              </div>
              <div class="form-group">
                <label for="">Quotes</label>
                <input type="text" class="form-control" name="quotes"> 
                <small class="text-danger">*Opsional</small>           
            </div>
            <div class="form-group">
                <label for="">Isi</label>
                <textarea name="isi" cols="30" rows="10" class="form-control" required id="editor1"></textarea>
            </div>
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