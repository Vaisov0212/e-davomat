 <!-- partial:partials/_footer.html -->
 <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
{{-- </div> --}}
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('admin/vendors/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- End plugin js for this page -->
<script src="{{asset('admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- inject:js -->
<script src="{{asset('admin/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/js/misc.js')}}"></script>
<script src="{{asset('admin/js/settings.js')}}"></script>
<script src="{{asset('admin/js/todolist.js')}}"></script>
<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
<!-- endinject -->

<!-- End plugin js for this page -->
<!-- inject:js -->

<script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>

<!-- Custom js for this page -->
{{-- <script src="{{asset('admin/js/dashboard.js')}}"></script> --}}
<!-- End custom js for this page -->
<script>
$('.nav-link').click(function(){
    $( '.nav-link').removeClass('active');
    $(this).addClass('active');
})</script>
</body>
</html>
