@extends('layouts.back')

@section('web-title')
    Daftar Artikel
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
              <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahArtikel">Tambah</a></h6>
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 9px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Artikel</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">User</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach ($artikel as $data) 
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->judul }}</td>
                      <td>{{ $data->buku->judul }}</td>
                      <td>{{ $data->user->name }}</td>
                      <td>{{ $data->slug }}</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a> &nbsp; &nbsp; &nbsp;
                        <a href="" class="btn btn-sm btn-info rounded">
                          <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp;
                          <a href="" class="btn btn-sm btn-danger rounded">
                            <i class="fas fa-fw fa-trash-alt"></i></a>
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

<div class="modal fade bd-example-modal-lg" data-backdrop="static" id="tambahArtikel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="">Judul Artikel</label>
                <input type="text" class="form-control" name="judul">            
            </div>
            <div class="form-group col-lg-6">
                <label for="">Judul Buku</label>
                @php $buku = \App\Buku::all(); @endphp
                <select name="buku_id" class="form-control" required>
                  @foreach ($buku as $list)
                <option value="{{ $list->id }}">{{ $list->judul }}</option>
                  @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for=""><i class="now-ui-icons larrows-1_cloud-upload-94"></i>Cover</label>
            <input type="file" class="form-control" name="cover" >            
          </div>
          <div class="form-group">
              <label for="">Genre</label>
              @php $genre = \App\Genre::all(); @endphp
              <select name="genre[]" class="form-control multiple" required multiple>
                @foreach ($genre as $list)
              <option value="{{ $list->id }}">{{ $list->nama_genre }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="">Konten</label>
              <textarea name="konten" cols="30" rows="10" class="form-control" id="editor1"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
@endsection  