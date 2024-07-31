

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
                <h4 class="card-title">Single color buttons</h4>
                <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>

                 <select class="form-input">
                    <option>valu 1</option>
                 </select>
                    <button type="button" class="btn btn-sm btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-file-check  btn-icon-prepend"></i> Submit </button>
                    <button type="button" class="btn btn-sm btn-gradient-dark btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i></button>
                    <button type="button" class="btn btn-sm btn-gradient-success btn-icon-text">
                        <i class="mdi mdi-alert btn-icon-prepend"></i> Warning </button>
                    <button type="button" class="btn btn-sm btn-gradient-danger btn-icon-text">
                        <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                    <button type="button" class="btn btn-sm btn-gradient-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                      </button>
                    <button type="button" class="btn btn-sm btn-gradient-warning btn-icon-text">
                        <i class="mdi mdi-reload btn-icon-prepend"></i> Reset </button>

            <div class="card-body">
              <h4 class="card-title">Barcha o'quvchilar ro'yxati</h4>
               <a><i class="mdi mdi-checkbox-multiple-marked-outline text-info"></i></a>
               <a><i class="mdi mdi-close text-danger"></i></a>
              <div class="row overflow-auto">
                <div class="col-12">
                <form action="#" enctype="multipart/form-data" method="POST">
                    @csrf

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
                </form>
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
                        url : "{{ route('admin.allStudent') }}",
                    },
                    columns : [
                        {data : 'id', name : 'id'  },
                        {data : 'studentFish', name : 'studentFish'},
                        {data : 'action', name : 'action',orderable:false, searchable:false }
                    ]
                });
            });
            </script>
             <script type="text/javascript">
                $('.student-add').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url:{{route('admin.student_attachment')}},
                        dataType:'JSON',
                        data:$(this).serialize(),
                        success: function(response){
                            if(response.status){
                                if(response.d_status==1){
                                $('#button_'+response.d_id).removeClass( "btn-danger" ).addClass( "btn-info" );
                                $('#button_'+response.d_id).text('bor');
                            }
                            if(response.d_status==0){
                                $('#button_'+response.d_id).removeClass( "btn-info" ).addClass( "btn-danger" );
                                $('#button_'+response.d_id).text('yo`q');
                            }
                            }
                            else{
                                alert('ERROR');
                            }
                        }
                    });
                })
            </script>
        <!-- content-wrapper ends -->

          <!-- content-wrapper ends -->
@include('admin.layouts.footer')
