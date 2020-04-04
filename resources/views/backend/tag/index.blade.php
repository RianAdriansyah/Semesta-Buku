@extends('layouts.back')

@section('web-title')
    Daftar Tag
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
              <h6 class="card-header text-center"><a href="" class="btn btn-primary"
                 data-toggle="modal" data-target="#tambahTag"><i class="fas fa-lg fa-plus-square"></i></a></h6>
                 @include('layouts.flash')
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 9px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Tag</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($tag as $list)
                    <tr>
                    <th scope="row" style="width:50px;">{{ $no++ }}</th>
                    <td>{{ $list->nama_tag }}</td>
                    <td>{{ $list->slug }}</td>
                    <td class="text-center">
                      {{-- <a href="{{ route('tag.edit', $list->id) }}" class="btn btn-sm btn-success rounded"
                    data-toggle="modal" data-target="#edittag{{ $list->id }}">
                        <i class="fas fa-fw fa-edit"></i></a> --}}
                        <a href="{{ route('tag.edit', $list->id) }}" class="btn btn-sm btn-success rounded"><i class="fas fa-fw fa-edit"></i></a>
                      {{-- <a href="" class="btn btn-sm btn-info rounded">
                        <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp; --}}
                        <form action="{{ route('tag.destroy',$list->id) }}" method="post">
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

<!-- Modal Tambah-->
<div class="modal fade" id="tambahTag" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="tambahTagLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahTagLabel">Tambah Tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('tag.store') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_tag">Nama Tag</label>
            <input type="text" class="form-control" name="nama_tag" required>
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
