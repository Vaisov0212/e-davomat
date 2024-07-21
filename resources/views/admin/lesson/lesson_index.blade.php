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
                    <table id="order-listing" class="table table-striped table-responsive" style="text-align:center; width:100%" >
                        <thead>
                        <tr class="table" style="text-align:center">
                            <th style="text-align:center" >T/R</th>
                            <th style="text-align:center">Guruh nomi</th>
                            <th style="text-align:center">Gurux o'qituvchisi</th>
                            <th style="text-align:center">dars sanasi</th>
                            <th style="text-align:center">dars boshlangan vaqt</th>
                            <th style="text-align:center">Dars yaratilgan sana</th>
                            <th style="text-align:center">Amallar</th>
                        </tr>
                        </thead >
                        <tbody >
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
                    scrollX:true,
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

