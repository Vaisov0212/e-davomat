@include('admin.layouts.header')
      <!-- partial:partials/_navbar.html -->
         @include('admin.layouts.navbar')
         <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
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
                          <img src="../../../assets/images/faces/face12.jpg" alt="profile" class="img-lg rounded-circle mb-3" />
                          <p>Bureau Oberhaeuser is a design bureau focused on Information- and Interface Design. </p>
                          <div class="d-flex justify-content-between">
                            <button class="btn btn-gradient-success">Hire Me</button>
                            <button class="btn btn-gradient-success">Follow</button>
                          </div>
                        </div>
                        <div class="border-bottom py-4">
                          <p>Skills</p>
                          <div>
                            <label class="badge badge-outline-dark my-1">Chalk</label>
                            <label class="badge badge-outline-dark my-1">Hand lettering</label>
                            <label class="badge badge-outline-dark my-1">Information Design</label>
                            <label class="badge badge-outline-dark my-1">Graphic Design</label>
                            <label class="badge badge-outline-dark my-1">Web Design</label>
                          </div>
                        </div>
                        <div class="border-bottom py-4">
                          <div class="d-flex mb-3">
                            <div class="progress progress-md flex-grow">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="55" style="width: 55%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="progress progress-md flex-grow">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="75" style="width: 75%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                        <div class="py-4">
                          <p class="clearfix">
                            <span class="float-start"> Status </span>
                            <span class="float-end text-muted"> Active </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Phone </span>
                            <span class="float-end text-muted"> 006 3435 22 </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Mail </span>
                            <span class="float-end text-muted"> Jacod@testmail.com </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Facebook </span>
                            <span class="float-end text-muted">
                              <a href="#">David Grey</a>
                            </span>
                          </p>
                          <p class="clearfix">
                            <span class="float-start"> Twitter </span>
                            <span class="float-end text-muted">
                              <a href="#">@davidgrey</a>
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
                            <h3>David Grey. H</h3>
                            <div class="d-flex align-items-center">
                              <h5 class="mb-0 me-2 text-muted">Canada</h5>
                              <select id="profile-rating" name="rating" autocomplete="off">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
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
                          <div class="d-flex align-items-start profile-feed-item">
                            <img src="../../../assets/images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle" />
                            <div class="ms-4">
                              <h6> Mason Beck <small class="ms-4 text-muted"><i class="mdi mdi-clock me-1"></i>10 hours</small>
                              </h6>
                              <p> There is no better advertisement campaign that is low cost and also successful at the same time. </p>
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star me-1"></i>4 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-comment me-1"></i>11 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="d-flex align-items-start profile-feed-item">
                            <img src="../../../assets/images/faces/face16.jpg" alt="profile" class="img-sm rounded-circle" />
                            <div class="ms-4">
                              <h6> Willie Stanley <small class="ms-4 text-muted"><i class="mdi mdi-clock me-1"></i>10 hours</small>
                              </h6>
                              <img src="../../../assets/images/samples/1280x768/12.jpg" alt="sample" class="rounded mw-100" />
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star me-1"></i>4 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-comment me-1"></i>11 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="d-flex align-items-start profile-feed-item">
                            <img src="../../../assets/images/faces/face19.jpg" alt="profile" class="img-sm rounded-circle" />
                            <div class="ms-4">
                              <h6> Dylan Silva <small class="ms-4 text-muted"><i class="mdi mdi-clock me-1"></i>10 hours</small>
                              </h6>
                              <p> When I first got into the online advertising business, I was looking for the magical combination that would put my website into the top search engine rankings </p>
                              <img src="../../../assets/images/samples/1280x768/5.jpg" alt="sample" class="rounded mw-100" />
                              <p class="small text-muted mt-2 mb-0">
                                <span>
                                  <i class="mdi mdi-star me-1"></i>4 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-comment me-1"></i>11 </span>
                                <span class="ms-2">
                                  <i class="mdi mdi-reply"></i>
                                </span>
                              </p>
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
          @include('admin.layouts.footer')
