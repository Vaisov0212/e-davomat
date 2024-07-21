   @include('admin.layouts.header')
     <!-- partial:partials/_navbar.html -->
       @include('admin.layouts.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title text-danger">Davomat</h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >111</li>
                </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Guruh o'quvchilar ro'yxati</h4>
                <div class="row">
                    <div class="col-12" style="text-align:center, ">
                    <table id="order-listing" class="table table-responsive h1" style="text-align:center" >
                        <thead>
                            <tr>
                                <th><h5>Guruh nomi</h5></th>
                                <th><h5>Holati</h5></th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach ($data as $davomat)
                             <tr>
                                <td>{{$davomat->student->studentFish}}</td>
                                <td>
                                    <form id="formData"   action="{{route("admin.attendance.index")}}" enctype="multipart/form-data" method="post" >
                                      @csrf
                                    <input  class="davomat_id" type="hidden" name="davomat_id" value="{{$davomat->id}}" >
                                    <button id="button_{{$davomat->id}}" type="submit" id="davomat_id"  @if($davomat->chesk==0) class=" btn btn-sm btn-danger" @endif
                                        @if($davomat->chesk==1) class=" btn btn-sm btn-info" @endif> @if($davomat->chesk==1) bor @endif  @if($davomat->chesk==0) yo'q @endif</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <script type="text/javascript">
                $('form').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url:$(this).attr('action'),
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
        @include('admin.layouts.footer')

