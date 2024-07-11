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
                        <p class="card-description"> Add class <code>.nav-pills-custom</code> and <code>.tab-content-custom-pill</code> to <code>.nav-pills</code> and <code>.tab-content</code>
                        </p>
                        <div class="row">
                          <div class="col-md-10 mx-auto">
                            <ul class="nav nav-pills nav-pills-custom" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true"> Health </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false"> Career </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false"> Music </a>
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
                                <div class="d-flex mb-4">
                                  <img src="{{asset('admin/images/samples/300x300/12.jpg')}}" class="w-25 h-100 rounded" alt="sample image" />
                                </div>

                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>F.I.Sh</th>
                                            <th>{{$student->studentFish}}</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student->s_groups as $item )
                                              <tr>
                                                <td><b>Kurs nomi:</b></td>
                                                <td><b>{{$item->g_name}}</b></td>
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
                                <div class="media">
                                  <img class="me-3 w-25 rounded" src="{{asset('admin/images/samples/300x300/14.jpg')}}" alt="sample image" />
                                  <div class="media-body">
                                    <table class="table">
                                        <thead>
                                          {{-- <tr>
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
                                            <td><b>{{$teacher->created_at}}</b></td>
                                          </tr>
                                          <tr>
                                            <td>Tel:</td>
                                            <td><b>{{$teacher->t_tel}}</b></td>
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
 --}}


                                        </tbody>
                                      </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="pills-vibes" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="media">
                                  <img class="me-3 w-25 rounded" src="../../../assets/images/samples/300x300/15.jpg" alt="sample image" />
                                  <div class="media-body">
                                    <p> This man is a knight in shining armor. I feel like a jigsaw puzzle missing a piece. And I'm not even sure what the picture should be. Somehow, I doubt that. You have a good heart, Dexter. Keep your mind limber. </p>
                                  </div>
                                </div>
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




            <!-- content-wrapper ends -->
    <!-- content-wrapper ends -->
    @include('admin.layouts.footer')
