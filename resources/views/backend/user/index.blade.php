@extends('layouts.back')

@section('web-title')
    Daftar Pengguna
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
                    <h6 class="card-header text-center"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-lg fa-plus-square"></i></a></h6>
                    @include('layouts.flash')
                    <div class="card-body">
                <div class="col-lg-12 table-responsive">
                <table class="table table-hover" id="table_id">
                  <thead class="thead-dark" style="font-size: 9px;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Role</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach ($user as $list)

                    <tr>
                    <th scope="row" style="width:50px;">{{ $no++ }}</th>
                    <td>{{ $list->getRoles()[0] }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->email }}</td>
                      <td class="text-center"><a href="{{ route('user.edit', $list->id) }}" class="btn btn-sm btn-success rounded">
                        <i class="fas fa-fw fa-edit"></i></a><br>
                        <form action="{{ route('user.destroy',$list->id) }}" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ route('user.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="form-group">
            <label for="">Role</label>
            <select name="role" class="form-control">
              @php
                  $role = \App\Role::all();
              @endphp
              @foreach ($role as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" required>
            @error('email')
              <small class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </small>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password" required>
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
