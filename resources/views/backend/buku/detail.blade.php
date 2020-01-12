@include('layouts.header')

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
                    <img src="{{ asset('assets/frontend/images/books/4.jpg') }}" alt="product image">
                    </div>
                    <div class="col-lg-8">
                      <table style="table">
												<tr>
													<td style="width: 50%;">Nama Penulis</td>
													<td style="width: 5%;">: </td>
													<td>One Direction</td>
												</tr> <br>
												<tr>
													<td style="width: 50%;">Nama Penerbit</td>
													<td style="width: 5%;">: </td>
													<td>The Sun</td>
												</tr>
												<tr>
													<td style="width: 50%;">Rating</td>
													<td style="width: 5%;">: </td>
													<td>5</td>
												</tr>
												<tr>
													<td style="width: 50%;">Nama Penerbit</td>
													<td style="width: 5%;">: </td>
													<td>The Sun</td>
												</tr>
												<tr>
													<td style="width: 50%;">Kategori</td>
													<td style="width: 5%;">: </td>
													<td>Biografi</td>
												</tr>
												<tr>
													<td style="width: 50%;">Nomor ISBN</td>
													<td style="width: 5%;">: </td>
													<td>081910186646</td>
												</tr>
												<tr>
													<td style="width: 50%;">Tanggal Terbit</td>
													<td style="width: 5%;">: </td>
													<td>21 Desember 2002</td>
												</tr>
												<tr>
													<td style="width: 50%;">Jumlah Halaman</td>
													<td style="width: 5%;">: </td>
													<td>300 Halaman</td>
												</tr>
												<tr>
													<td style="width: 50%;">Sinopsis</td>
													<td style="width: 5%;">: </td>
                        </tr>
											</table>
                      <tr>
                        <td>
                          <p>
                            <p>&nbsp; &nbsp;
                               Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
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

  @include('layouts.footer')  