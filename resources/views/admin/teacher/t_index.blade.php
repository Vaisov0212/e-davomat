
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
                <h3 class="page-title">O'qituvchilar </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.teachers.create') }}">Yangi O'qituvchi</a>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">O'qituvchilar Ro'yxati</h4>
                    <div class="row">
                        <div class="col-12">
                            <table id="order-listing" class="table table-responsive" style="width: 100%;text-align: center " >
                                <thead  >
                                    <tr >
                                        <th style="text-align: center">id</th>
                                        <th style="text-align: center">F.I.Sh</th>
                                        <th style="text-align: center">amallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <!-- Modal starts -->
                            <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel-2">Ma'lumot o'chirilsinmi ?
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>O'chirishni tasdiqlang !</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success delete">Ha</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Yoq</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function() {
                var table = $('#order-listing').DataTable({
                    scrollX:true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('admin.teachers.index') }}",
                    },
                    columns: [{
                            data: 'id', name: 'id'
                        },
                        {
                            data: 't_fish', name: 't_fish'
                        },
                        {
                            data: 'action',name: 'action',orderable: false,searchable: false
                        }
                    ]
                });

            });
        </script>

        <!-- content-wrapper ends -->

        <!-- content-wrapper ends -->
        @include('admin.layouts.footer')
