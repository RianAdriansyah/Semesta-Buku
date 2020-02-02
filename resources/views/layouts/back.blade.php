<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/backend/img/apple-icon.png ') }}" }}>
  <link rel="icon" type="image/png" href="{{asset('assets/backend/img/favicon.png ') }}" }}>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('web-title') | Panel Admin Semesta Buku
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" /></head>

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
          <a href="{{ route('tag.index') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>Daftar Tag</p>
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

      @yield('isi')
     
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
    </div>
    
    <!-- Logout Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="logoutModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda ingin melanjutkan untuk logout ?
          </div>
          <div class="modal-footer">
            
            <div class="col-md-6 mx-auto">
              <button type="button" class="btn btn-secondary btn-block rounded" data-dismiss="modal">Batal</button>
            </div>
            <div class="col-md-6 mx-auto">

              <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="btn btn-danger btn-block rounded">
                          <i class="now-ui-icons media-1_button-power"></i>&nbsp; Logout
                <form id="logout-form" action="{{ route('logout') }}"
                   method="POST" style="display: none;">
                   @csrf
              </form>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--   Core JS Files   -->
    <script src="{{asset('assets/backend/js/core/jquery.min.js ') }}"></script>
    <script src="{{asset('assets/backend/js/core/popper.min.js ') }}"></script>
    <script src="{{asset('assets/backend/js/core/bootstrap.min.js ') }}"></script>
    <script src="{{asset('assets/backend/js/plugins/perfect-scrollbar.jquery.min.js ') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{asset('assets/backend/js/plugins/chartjs.min.js ') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/backend/js/plugins/bootstrap-notify.js ') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/backend/js/now-ui-dashboard.min.js?v=1.3.0 ') }}" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/backend/demo/demo.js ') }}"></script>
    <script src="{{asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>    <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    
    });
    </script>
    
    <script src="{{asset('assets/backend/dataTables/datatables.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('#table_id').DataTable();
        $('#select2').select2();
      });
    </script>

  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
  </script>
    </body>
    
    </html>