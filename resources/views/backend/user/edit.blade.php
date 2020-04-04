@extends('layouts.back')

@section('web-title')
    Edit Pengguna
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
                    @include('layouts.flash')
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" class="form-control">
                                @foreach ($role as $item)
                                <option value="{{ $item->id }}" {{ ($user->getRoles()[0] == $item->name) ? 'selected': '' }}>{{ $item->name }}</option>
                                @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                @error('email')
                                <small class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password Baru</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <a class="btn btn-warning" href="{{route('user.index')}}">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
  </div>



@endsection
