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
                 @include('layouts.flash')
                 <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-body bg-primary">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="fa fa-user-o text-light border-light"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text text-light">FORMULIR PENDAFTARAN EMAIL MAHASISWA</div>
                                    <div class="stat-digit count text-light">4356789</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
