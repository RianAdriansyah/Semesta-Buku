@include('layouts.header')

<div class="panel-header panel-header-lg-2  ">
    {{-- <canvas id="bigDashboardChart"></canvas> --}}
  </div>
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="container-fluid">
            <div class="card">
              <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahBuku">Tambah</a></h6>
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 9px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">Nama Penulis</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Rating</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>Otto</td>
                      <td>Otto</td>
                      <td>Otto</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="{{ route('detail') }}" class="btn btn-sm btn-info rounded">
                        <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="" class="btn btn-sm btn-danger rounded">
                        <i class="fas fa-fw fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Jacob</td>
                      <td>Jacob</td>
                      <td>Jacob</td>
                      <td>Jacob</td>
                      <td class="text-center"><a href="" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="" class="btn btn-sm btn-info rounded">
                        <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="" class="btn btn-sm btn-danger rounded">
                        <i class="fas fa-fw fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>Larry the Bird</td> 
                      <td>Larry the Bird</td> 
                      <td>Larry the Bird</td> 
                      <td>Larry the Bird</td> 
                      <td class="text-center"><a href="" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="" class="btn btn-sm btn-info rounded">
                        <i class="fas fa-fw fa-info-circle"></i></a> &nbsp; &nbsp; &nbsp;
                      <a href="" class="btn btn-sm btn-danger rounded">
                        <i class="fas fa-fw fa-trash-alt"></i></a>
                      </td>
                    </tr>
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

<div class="modal fade bd-example-modal-lg" data-backdrop="static" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="">Judul Buku</label>
            <input type="text" class="form-control" name="judul">
          </div>
          <div class="form-group col-lg-6">
            <label for="">Cover</label>
            <input type="file" class="form-control" name="cover">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="">Nama Penulis</label>
            <input type="text" class="form-control" name="penulis">
          </div>
          <div class="form-group col-lg-6">
            <label for="">Nama Penerbit</label>
            <input type="text" class="form-control" name="penerbit">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="">Kategori</label>
            <input type="text" class="form-control" name="kategori_id">
          </div>
          <div class="form-group col-lg-6">
            <label for="">Nomor ISBN</label>
            <input type="number" class="form-control" name="no_isbn">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-lg-6">
            <label for="">Rating</label>
            <input type="number" class="form-control" name="rating">
          </div>
          <div class="form-group col-lg-6">
            <label for="">Jumlah Halaman</label>
            <input type="number" class="form-control" name="jml_halaman">
          </div>
        </div>
          <div class="form-group">
            <label for="">Tanggal Terbit</label>
            <input type="date" class="form-control" name="tgl_terbit">
          </div>
          <div class="form-group">
            <label for="">Sinopsis</label>
            <textarea name="sinopsis" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </div>
  </div>
</div>
  @include('layouts.footer')
  