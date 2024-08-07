

@include('admin.layouts.header')
{{-- @yield('cdn_contentd') --}}
      <!-- partial:partials/_navbar.html -->
         @include('admin.layouts.navbar')
         <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
    {{--  --}}
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">O'quvchilar</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.student.create')}}">Yangi O'quvchi</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Barcha o'quvchilar ro'yxati</h4>
              <div class="row overflow-auto">
                <div class="col-12">
                  <table id="order-listing" class="table" cellspacing="0" width="100%">
                    <thead>
                      <tr class="bg-primary text-white">
                        <th>id</th>
                        <th>studentFish</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
            $(function () {
                var table = $('#order-listing').DataTable({
                    processing : true,
                    serverSide : true,
                    ajax : {
                        url : "{{ route('admin.student.index') }}",
                    },
                    columns : [
                        {data : 'id', name : 'id'  },
                        {data : 'studentFish', name : 'studentFish'},
                        {data : 'action', name : 'action',orderable:false, searchable:false }
                    ]
                });
            });
            </script>
        <!-- content-wrapper ends -->

          <!-- content-wrapper ends -->
@include('admin.layouts.footer')
