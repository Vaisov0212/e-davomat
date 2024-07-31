@include('admin.layouts.header')
      <!-- partial:partials/_navbar.html -->
         @include('admin.layouts.navbar')
         <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
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
                        <span></span><a href="{{route('admin.groups.create')}}">guruh qo'shish </a><i class="mdi mdi-plus-circle  icon-sm text-primary align-middle"></i>
                    </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                @foreach ($groups as $item )
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <h3  class="font-weight-normal mb-3">{{$item->g_name}}<i class="mdi mdi-book-open-page-variant mdi-24px float-end"></i>
                        </h3>
                        <h6  class="card-text">{{$item->teacher->name}}</h6>
                        <h4 class="card-text">{{$item->g_money}}</h4>
                        <h5 class="card-text">
                        <i class="mdi mdi-account-multiple-outline text-light" aria-hidden="true"> 22 ta o'quvchi</i>
                        </h5>
                        <h5 class="card-text">
                        <a  href="{{route('admin.groups.show',$item->id)}}"  class="text-primary">  <i class="mdi mdi-18px mdi-eye text-light" aria-hidden="true"><b>batafsil</b></i></a>
                        </h5>
                    </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        <!-- content-wrapper ends -->
            <!-- content-wrapper ends -->
        @include('admin.layouts.footer')
