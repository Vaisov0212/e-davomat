
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
                <h3 class="page-title"> Profile </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sample Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Custom pills</h4>
                        <div class="row">
                          <div class="col-md-10 mx-auto">
                            <ul class="nav nav-pills nav-pills-custom" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true"> Ko'rib chiqish </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false"> Tahrirlash </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false"> O'quvchilar </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-vibes" role="tab" aria-controls="pills-contact" aria-selected="false"> Vibes </a>
                              </li>
                              <li class="nav-item">
                                {{-- <a class="nav-link"  href="{{route('admin.addStudent',$group->id)}}" > yangi o'quvchi </a> --}}
                              </li>
                            </ul>
                            <div class="tab-content tab-content-custom-pill" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="table">
                                  <thead>
                                      <tr>
                                        <th></th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Guruh nomi:</td>
                                            <td><b>{{$group->g_name}}</b></td>
                                          </tr>
                                      <tr>
                                        <td>Guruh narxi:</td>
                                        <td><b>{{$group->g_money}}</b></td>
                                      </tr>
                                      <tr>
                                        <td>Mentor:</td>
                                        <td><b>{{$group->teacher->name}}</b></td>
                                     </tr>
                                  </tbody>
                                  </table>
                              </div>
                              <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="tab-pane fade show active" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab">

                                <form id="form-update" enctype="multipart/form-data" action="{{route('admin.groups.update',$group->id)}}" method="POST"  class="forms-sample">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" id="tasdiqlash" value="0" class="form-check-input-Warning"> Tahrirlashni tasdiqlash </label>
                                        </div>
                                    </div>
                                    <p class="text-dark" id="info-text" ></p>
                                  <div class="form-group">
                                    <label for="input-name">Guruh nomi:</label>
                                    <input id="input-name" disabled value="{{$group->g_name}}"  name="name" type="text" class="form-control confirm" placeholder="to'liq nom:" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="input-money">Kurs Narhi</label>
                                    <input id="input-money" disabled name="money" value="{{$group->g_money}}" type="text" class="form-control confirm"  placeholder="250 ming som:" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="input-teacher">Mentor</label>
                                    <select id="input-teacher"  disabled name="teacher" value="{{$group->teacher->name}}"  class="form-select text-dark confirm" required>
                                        @foreach ($teachers as $item )
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                  <button disabled type="submit" class="btn  btn-info  confirm ">saqlash</button>
                                </form>

                                </div>
                              </div>
                              <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-contact-tab">
                                 <table id="order-listing" class="table " cellspacing="0" width="100%" style="text-align: center">
                                        <thead>
                                          <tr class="bg-primary text-white">
                                            <th>id</th>
                                            <th>studentFish</th>
                                            <th>action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($group->student as $item )
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td><b><a class="text-info" href="{{route('admin.student.show',$item->id)}}">{{$item->studentFish}}</a></b></td>
                                                <td>     <button class="btn btn-sm btn-outline-primary"><i class="mdi mdi-eye" ></i></button>
                                                    <button class="btn btn-sm btn-outline-danger"><i class="mdi mdi-pencil" ></i></button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                              </div>
                              <div class="tab-pane fade" id="pills-vibes" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <table class="table" id="student-table" style="text-align: center">
                                    <thead>
                                        <tr>
                                          <th></th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($group->student as $item )
                                        <tr>
                                            <td style="text-align: left"> <i class="mdi mdi-account  text-primary"></i></td>
                                            <td>{{$item->studentFish}}</td>
                                            <td style="text-align: right">
                                              <form class="form-log" action="{{route('admin.student_log')}}" method="post" enctype="multipart/form-data" >
                                                @method('PATCH')
                                                @csrf
                                             <input name="student_id" type="hidden" value="{{$item->id}}">
                                             <input name="group_id" type="hidden" value="{{$group->id}}">
                                              <button type="submit" class="btn btn-light btn-sm">
                                                  <i class="mdi mdi-account-multiple-minus text-danger"></i>
                                              </button>
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
                    </div>
                  </div>
              </div>
            </div>
            <script>
              $('.form-log').submit(function(e){
                  e.preventDefault();
                  $.ajax({
                    url:$(this).attr('action'),
                    dataType:'JSON',
                    method:'PATCH',
                    data:$(this).serialize(),
                    success:function(responce){

                    },
                    error: function(){

                    }
                  });
              });
              $('form').submit(function(e){
                e.preventDefault();
                $.ajax({
                  url:$(this).attr('action'),
                  dataType:'JSON',
                  method:'PATCH',
                  data:$(this).serialize(),
                  success: function(response){
                    if(response.status){
                      $('#info-text').text('malumotlar yangilandi');
                      $('#info-text').prop('class','text-info');
                    }
                  },
                  error:function(xhr){
                    $('#info-text').text('xatolik ma`lumotlari to`g`ri to`ldirilganligiga ishonch hosil qiling !');
                      $('#info-text').prop('class','text-danger');
                    }
                });

              });
            </script>
            <script type="text/javascript" >
                     $('#tasdiqlash').click(function(){
                        var confirm=$('#tasdiqlash').attr('value');

                        if(confirm==0){
                            $('.confirm').prop('disabled',false);
                            $('#tasdiqlash').attr('value',1);
                        }
                        else{
                            $('.confirm').prop('disabled',true);
                            $('#tasdiqlash').attr('value',0);
                        }
                     });
            </script>
            <!-- content-wrapper ends -->

            <!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    @include('admin.layouts.footer')
