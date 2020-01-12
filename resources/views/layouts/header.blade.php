<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/backend/img/apple-icon.png ') }}" }}>
  <link rel="icon" type="image/png" href="{{asset('assets/backend/img/favicon.png ') }}" }}>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Semesta Buku
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets/backend/css/bootstrap.min.css ') }}" }} rel="stylesheet" />
  <link href="{{asset('assets/backend/css/now-ui-dashboard.css?v=1.3.0 ') }}" }} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/backend/demo/demo.css ') }}" }} rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/backend/dataTables/datatables.min.css ') }}">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="{{ route('index') }}" class="simple-text logo-mini">
          SB
        </a>
        <a href="{{ route('index') }}" class="simple-text logo-normal">
          Semesta Buku
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
          <a href="{{ route('buku.index') }}">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Daftar Buku</p>
            </a>
          </li>
          <li>
          <a href="{{ route('genre.index') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>Daftar Genre</p>
            </a>
          </li>
          <li>
          <a href="{{ route('artikel.index') }}">
              <i class="now-ui-icons files_paper"></i>
              <p>Daftar Artikel</p>
            </a>
          </li>
          <li>
          <a href="{{ route('kategori.index') }}">
              <i class="now-ui-icons location_bookmark"></i>
              <p>Daftar Kategori</p>
            </a>
          </li>
          <li>
            <a href="{{ route('review.index') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Daftar Review</p>
            </a>
          </li>
          <li class="active-pro">
          <a href="{{ route('logout') }}" 
          data-toggle="modal" data-target="#logoutModal">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Admin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <p>
                    {{ Auth::user()->name }}
                  </p>
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
     
      