@extends('layouts.back')

@section('web-title')
    Detail Buku
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
              <h6 class="card-header text-center">Detail Buku</h6>
              <div class="card-body">
                <div class="col-lg-12 table-responsive">
                  <div class="form-row">
                    <div class="col-lg-4">
                    <img src="{{ asset('assets/img/buku/cover/'.$buku->cover)}}" alt="product image">
                    </div>
                    <div class="col-lg-8">
						<table style="table">
							<tr>
								<td style="width:32%;">Judul Buku</td>
								<td style="width:3%">: </td>
								<td>{{ $buku->judul }}</td>
							</tr>
							<tr>
								<td>Nama Penulis</td>
								<td style="width:3%">: </td>
							<td>{{ $buku->penulis }}</td>
							</tr>
						<tr>
							<td>Nama Penerbit</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->penerbit }}</td>
						</tr>
						<tr>
							<td>Rating</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->rating }}</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->kategori->nama_kategori }}</td>
						</tr>
						<tr>
							<td>Nomor ISBN</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->no_isbn }}</td>
						</tr>
						<tr>
							<td>Tanggal Terbit</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->tgl_terbit }}</td>
						</tr>
						<tr>
							<td>Jumlah Halaman</td>
							<td style="width:3%">: </td>
							<td>{{ $buku->jml_halaman }} Halaman</td>
						</tr>
						<tr>
							<td>Sinopsis</td>
							<td style="width:3%">: </td>
						</tr>
					</table>
                      <tr>
                        <td>
                          <p>
                            <p>&nbsp; &nbsp;
								{{ $buku->sinopsis }}</p>
                          </p>
                        </td>
                      </tr>
                    </div>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection