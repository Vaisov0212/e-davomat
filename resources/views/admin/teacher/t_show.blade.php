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
                    <li class="breadcrumb-item"><a href="#">Xodim ma'lumotlari</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Xodim ma'lumotlari</h4>
                        <div class="row">
                          <div class="col-md-10 mx-auto">
                            <ul class="nav nav-pills nav-pills-custom" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true"> Guruhlar </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false"> Guruhlar </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false"> xodim malumotlari </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-vibes" role="tab" aria-controls="pills-contact" aria-selected="false"> login </a>
                              </li>

                            </ul>
                            <div class="tab-content tab-content-custom-pill" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab">
                                      <table class="table table-scroll">
                                        <thead>
                                          <tr>
                                            <th>F.I.Sh</th>
                                            <th>{{$teacher->t_fish}}</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($teacher->group as $item )
                                              <tr>
                                                <td><a><b>Kurs nomi:</b></a></td>
                                                <td><a class="text-primary" href="{{route('admin.groups.show',$item->id)}}" ><b>{{$item->g_name}}</b></a></td>
                                              </tr>


                                            @endforeach

                                        </tbody>
                                      </table>

                              </div>
                              <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="media">
                                  <img class="me-3 w-25 rounded" src="../../../assets/images/samples/300X300/10.jpg" alt="sample image" />
                                  <div class="media-body">
                                    <p> I'm thinking two circus clowns dancing. You? Finding a needle in a haystack isn't hard when every straw is computerized. Tell him time is of the essence. Somehow, I doubt that. You have a good heart, Dexter. </p>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-contact-tab">

                                  <img class="me-3 w-25 rounded" src="{{asset('admin/images/samples/300x300/14.jpg')}}" alt="sample image" />
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>F.I.Sh</th>
                                            <th>{{$teacher->t_fish}}</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Gendr</td>
                                            <td><b>{{$teacher->t_gendr}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>Tug'ilgan sana:</td>
                                            <td><b>{{$teacher->t_sana}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>Yaratilgan:</td>
                                            <td><b>{{$teacher->created_at->format('Y-m-d')}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>Tel:</td>
                                            <td><b>+998 {{$teacher->t_tel}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>E-mail:</td>
                                            @if ($teacher->t_email=="")
                                            <td>-</td>
                                            @endif
                                            <td><b>{{$teacher->t_email}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>Manzil:</td>
                                                @if ($teacher->t_addres=="")
                                                <td>-</td>
                                                @endif
                                            <td><b>{{$teacher->t_addres}}</b></td>
                                          </tr>
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




            <!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    @include('admin.layouts.footer')
