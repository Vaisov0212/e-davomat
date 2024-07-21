{{$title='jadval'}}
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
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-energy" role="tab" aria-controls="pills-contact" aria-selected="false"> Energy </a>
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
                                        <td><b>{{$group->teacher->t_fish}}</b></td>
                                     </tr>
                                  </tbody>
                                  </table>


                              </div>
                              <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="tab-pane fade show active" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab">

                                <form enctype="multipart/form-data" action="{{route('admin.groups.store')}}" method="POST"  class="forms-sample">
                                    @method('POST')
                                    @csrf
                                  <div class="form-group">
                                    <label for="exampleInputName1">Guruh nomi:</label>
                                    <input id="getUID" value="{{$group->g_name}}"  name="name" type="text" class="form-control" placeholder="to'liq nom:">

                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputName1">Kurs Narhi</label>
                                    <input name="money" value="{{$group->g_money}}" type="text" class="form-control" id="exampleInputName1" placeholder="250 ming som:">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleSelectGender">Mentor</label>
                                    <select name="teacher" value="{{$group->teacher->t_fish}}"  class="form-select" id="exampleSelectGender">
                                        {{-- @foreach ($teachers as $item )
                                        <option value="{{$item->id}}">{{$item->t_fish}}</option>
                                        @endforeach --}}
                                    </select>
                                  </div>
                                  <button type="submit" class="btn btn-gradient-primary me-2">yaratish</button>
                                  <button type="reset" class="btn btn-danger">tozalash</button>
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
                                            <td style="text-align: right"> <a  class="btn btn-light btn-sm">
                                                <i class="mdi mdi-eye text-primary"></i>
                                            </a>
                                                <a  class="btn btn-light btn-sm">
                                                    <i class="mdi mdi-account-multiple-minus text-danger"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                    </table>


                              </div>
                              <div class="tab-pane fade" id="pills-energy" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="media">
                                  <img class="me-3 w-25 rounded" src="../../../assets/images/samples/300x300/11.jpg" alt="sample image" />
                                  <div class="media-body">
                                    <p> Finding a needle in a haystack isn't hard when every straw is computerized. You're a killer. I catch killers. I will not kill my sister. I will not kill my sister. I will not kill my sister. Rorschach would say you have a hard time relating to others. </p>
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

            {{-- <script type="text/javascript" >
            $.(function(){
                var $table=$('#order-listing').DataTable({
                    processing:true,
                    serverSide:true,
                    ajax:{
                        url : "{{route('admin.groups.show',1)}}"
                    },
                    columns:[
                        {data:'id',name:'id'},
                    ]
                });
            });
            </script> --}}
            <!-- content-wrapper ends -->

            <!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    @include('admin.layouts.footer')
