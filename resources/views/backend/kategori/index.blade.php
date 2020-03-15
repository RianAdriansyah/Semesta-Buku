@extends('layouts.back')

@section('web-title')
    Daftar Kategori
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
                    <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a></h6>
                    @include('layouts.flash')
                    <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 9px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Kategori</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kategori as $list)

                    <tr>
                    <th scope="row" style="width:50px;">{{ $no++ }}</th>
                    <td>{{ $list->nama_kategori }}</td>
                    <td>{{ $list->slug }}</td>
                      <td class="text-center"><a href="{{ route('kategori.edit', $list->id) }}" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a><br>
                        <form action="{{ route('kategori.destroy',$list->id) }}" method="post">
                          {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger btn-sm rounded" type="submit">
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('kategori.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori">
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

{{-- 
<!-- Modal Remove-->
<div class="modal fade" id="hapusModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="hapusModalLabel">Peringatan</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda ingin menghapus kategori ini ?
      </div>
      <div class="modal-footer">
        
        <div class="col-md-6 mx-auto">
          <button type="button" class="btn btn-secondary btn-block rounded" data-dismiss="modal">Batal</button>
        </div>
        <div class="col-md-6 mx-auto">
          <form action="{{ route('kategori.destroy',$list->id) }}" method="post">
            {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger btn-block rounded" type="submit">
                  <i class="fas fa-fw fa-trash-alt"></i> Hapus
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
