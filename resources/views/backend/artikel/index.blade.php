@include('layouts.header')

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
                  <thead class="thead-dark" style="font-size: 11px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Artikel</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">Cover</th>
                      <th scope="col">User</th>
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
                      <a href="" class="btn btn-sm btn-info rounded">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Judul Artikel</label>
                <input type="text" class="form-control" name="judul">            
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Judul Buku</label>
                <input type="text" class="form-control" name="buku">            
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Konten</label>
                <textarea name="konten" cols="30" rows="5"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
  @include('layouts.footer')
  