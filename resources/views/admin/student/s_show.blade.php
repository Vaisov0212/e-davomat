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
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="border-bottom text-center pb-4">
                          <img src="{{asset('admin/images/user0.jpg')}}" alt="profile" class="img-lg rounded-circle mb-3" />
                          <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                          <div class="d-flex justify-content-between">
                            <button class="btn btn-gradient-success">Hire Me</button>
                            <button class="btn btn-gradient-success">Follow</button>
                          </div>
                        </div>
                        <div class="border-bottom py-4">
                          <p>Guruhlarda:</p>
                          <div>
                            @foreach ($student->s_groups as $group )
                            <label class="badge badge-outline-dark my-1">{{$group->g_name}}</label>
                            @endforeach
                          </div>
                        </div>
                        <div class="py-4">
                          <p class="clearfix">
                            <span class="float-start"> F.I.Sh: </span>
                            <span class="float-end text-dark"><b> {{$student->studentFish}}</b> </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Jinsi: </span>
                            <span class="float-end text-dark"> {{$student->genderType}} </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Tel: </span>
                            <span class="float-end text-dark">+998 {{" ".$student->tel}} </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Tug'ilgan sana: </span>
                            <span class="float-end text-dark">
                              <a >{{$student->st_sana->format('d-m-Y')}}</a>
                            </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> card id: </span>
                            <span class="float-end text-dark">
                              <a>{{$student->card_id}}</a>
                            </span>
                          </p>
                        </div>
                        <div class="d-grid gap-2">
                          <button class="btn btn-gradient-primary btn-block">Preview</button>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h3>{{$student->studentFish}}</h3>
                          </div>
                          <div>
                            <button class="btn btn-outline-secondary btn-icon">
                              <i class="mdi mdi-comment-processing"></i>
                            </button>
                            <button class="btn btn-gradient-primary">Request</button>
                          </div>
                        </div>
                        <div class="mt-4 py-2 border-top border-bottom">
                          <ul class="nav profile-navbar">
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="mdi mdi-account-outline"></i> Info </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="#">
                                <i class="mdi mdi-newspaper"></i> Feed </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="mdi mdi-calendar"></i> Agenda </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">
                                <i class="mdi mdi-attachment"></i> Resume </a>
                            </li>
                          </ul>
                        </div>
                        <div class="profile-feed">
                        <table class="table order-table">
                            <tbody>
                                <tr><th></th></tr>
                                <tr><th></th></tr>
                                <tr><th></th></tr>
                                <tr><th></th></tr>
                            </tbody>
                            <thead>
                                <tr><td></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td></tr>
                            </thead>
                        </table>
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p class="card-description text-dark">Yangi guruhga biriktrish </p>
                                <form  action="{{route('admin.add_student_group')}}" method="POST" enctype="multipart/form-data" >
                                  @csrf
                                <div class="form-group row">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="checkbox" id="check-add" value="0" class="form-check-input"> Rozilik bildirish </label>
                                        <input name="student_id" type="hidden" value="{{$student->id}}">
                                    </div>
                                  <div class="col">
                                    <label class="text-danger" >guruhni tanlang !</label>
                                    <div id="the-basics">
                                      <select name="group_id" class="typeahead form-select" disabled  type="text" placeholder="States of USA">
                                        @foreach ($groups_all as $group )
                                            <option value="{{$group->id}}">{{$group->g_name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <label> </label>
                                    <div id="bloodhound">
                                      <button type="submit"  disabled class="typeahead form-input btn btn-outline-info" type="text" >qo'shish</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                              @if (count($errors)>0)
                                <ul class="alert alert-danger">
                                    @foreach ($errors as $error )
                                       <li > {{$error}}</li>
                                    @endforeach
                                </ul>
                              @endif
                              @if (\Session::has('message'))
                              <div class="alert alert-warning">
                                <input id="alert-message" type="hidden" value="{{\Session::get('message')}}" >
                              </div>
                              @endif
                              @if (\Session::has('success'))
                              <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                              </div>
                              @endif
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

          <script>
            $(document).ready(function(){
             var message = $('#alert-message').attr('value');
                if(message!=null){
                    alert(message);
                }

            });
            // $('form').submit(function(e){}
            //     e.preventDefault();
            //     $.ajax(){
            //         url:$(this).attr('action'),
            //         dataType:'JSON',
            //         data:$(this).serialize(),
            //         success:function(response){

            //         }

            //     }
            // );
            $('#check-add').click(function(){
              var val=$('#check-add').attr('value');
                if(val==0){
                    $('.typeahead').prop('disabled',false);
                    $('#check-add'),atrr('value',1);
                }
                else{
                    $('.typeahead').prop('disabled',true);
                    $('#check-add'),atrr('value',0);
                }
            });
          </script>


            <!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    @include('admin.layouts.footer')
