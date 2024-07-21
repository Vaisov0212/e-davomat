@include('admin.layouts.header')
     <!-- partial:partials/_navbar.html -->

         @include('admin.layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title text-danger">Darslar xaqida hisobot</h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >111</li>
                </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-header">
                <div class="card-body">
                <h4 class="card-title">Draslar</h4>
                <div class="row">
                    <div class="col-12" style="text-align: center">
                    <table id="order-listing" class="table table-striped" style="text-align:center" >
                        <thead>
                        <tr class="table" style="text-align:center">
                            <th style="text-align:center" >T/R</th>
                            <th style="text-align:center">Guruh nomi</th>
                            <th style="text-align:center">Gurux o'qituvchisi</th>
                            <th style="text-align:center">dars sanasi</th>
                            <th style="text-align:center">dars boshlangan vaqt</th>
                            <th style="text-align:center">Dars yaratilgan sana</th>
                            {{-- <th style="text-align:center">Holati</th> --}}
                            <th style="text-align:center">Amallar</th>
                        </tr>
                        </thead >
                        <tbody >
                            {{-- @foreach ($lessons as $lesson)
                            <tr >
                                <td >{{$lesson->id}}</td>
                                <td>{{$lesson->groups->g_name}}</td>
                                <td>{{$lesson->groups->teacher->t_fish}}</td>
                                <td>{{$lesson->lessonData= date('d-m-Y')}}</td>
                                <td>{{$lesson->lessonTime=date('H:s')}}</td>
                                <td>{{$lesson->created_at->format('d-m-Y')}}</td>
                                <td>
                                <label class="badge badge-info">On hold</label>
                                </td>
                                <td>
                                <button class="btn btn-sm btn-outline-primary"><i class="mdi mdi-eye" ></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="mdi mdi-pencil" ></i></button>
                                </td>
                            </tr>
                            @endforeach --}}

                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <script type="text/javascript" >
            $(function(){
                var $table=$('#order-listing').DataTable({
                    processing:true,
                    serverSide:true,
                    ajax:{
                        url:"{{route('admin.lessons.index')}}"
                    },
                    columns:[
                        {data:'id',name:'id'},
                        {data:'g_name',name:'g_name'},
                        {data:'t_fish',name:'t_fish'},
                        {data:'lesson_data',name:'lesson_data'},
                        {data:'lesson_time',name:'lesson_time'},
                        {data:'create_data',name:'create_data'},
                        {data:'action',name:'Amallar',orderable:false, searchable:false},

                    ]
                });
            });

            </script>
        <!-- content-wrapper ends -->
        @include('admin.layouts.footer')

