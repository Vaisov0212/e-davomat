@include('admin.layouts.header')
      <!-- partial:partials/_navbar.html -->
         @include('admin.layouts.navbar')
         <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
    {{--  --}}



      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                      <span></span><a href="#">guruh qo'shish </a><i class="mdi mdi-plus-circle  icon-sm text-primary align-middle"></i>
                    </li>
                  </ul>
                </nav>
            </div>
          <div class="row">
            {{-- start card --}}

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-start">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-end">
                      <p class="mb-0 text-right">250 ming</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"> 1 A Ingiliz tili </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account-multiple-outline text-primary" aria-hidden="true"></i> 22 ta o'quvchi
                  </p>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account text-primary" aria-hidden="true"></i> Teacher: Vaisov Azamat
                  </p>
                </div>
              </div>
            </div>
            {{-- end card !  --}}

          </div>
        </div>

        <!-- content-wrapper ends -->




          <!-- content-wrapper ends -->
@include('admin.layouts.footer')
