@include('layouts.header')

<div class="panel-header panel-header-lg-2  ">
    {{-- <canvas id="bigDashboardChart"></canvas> --}}
  </div>
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="container-fluid">
            <div class="card">
              <h6 class="card-header text-center"><a href="" class="btn btn-primary"
                 data-toggle="modal" data-target="#tambahGenre">Tambah</a></h6>
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 11px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Genre</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($genre as $list)
                    <tr>
                    <th scope="row" style="width:50px;">{{ $no++ }}</th>
                    <td>{{ $list->nama_genre }}</td>
                    <td>{{ $list->slug }}</td>
                    <td class="text-center">
                      {{-- <a href="{{ route('genre.edit', $list->id) }}" class="btn btn-sm btn-success rounded" 
                    data-toggle="modal" data-target="#editGenre{{ $list->id }}">
                        <i class="fas fa-fw fa-edit"></i></a> --}}
                        <a href="{{ route('genre.edit', $list->id) }}" class="btn btn-sm btn-success rounded"><i class="fas fa-fw fa-edit"></i></a>
                      {{-- <a href="" class="btn btn-sm btn-info rounded">
                        <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp; --}}
                        <form action="{{ route('genre.destroy',$list->id) }}" method="post">
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
<div class="modal fade" id="tambahGenre" tabindex="-1" role="dialog" aria-labelledby="tambahGenreLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahGenreLabel">Tambah Genre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('genre.store') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_genre">Nama Genre</label>
            <input type="text" class="form-control" name="nama_genre" required>
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
  @include('layouts.footer')
  