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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ route('logout') }}" 
          onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-danger">
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
<script>
$(document).ready(function() {
  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();

});
</script>

<script src="{{asset('assets/backend/dataTables/datatables.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#table_id').DataTable();
  });
</script>
</body>

</html>