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
                      <th scope="col">Nama Genre</th>
                      <th scope="col">Slug</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Genre</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  @include('layouts.footer')
  