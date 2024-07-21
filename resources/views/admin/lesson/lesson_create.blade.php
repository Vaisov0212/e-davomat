
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
              <h3 class="page-title">Yangi dars qo'shish</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.groups.index')}}">hodimlar</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Yangi hodim</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    @if(count($errors)>0)
                    <div class="alert alert-danger" >
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(\Session::has('success'))
                    <div class="alert alert-success" >
                        <p>{{\Session::get('success')}}</p>
                    </div>
                    @endif

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Yangi dars Ma'lumotlari</h4>
                    <form class="form-sample" action="{{route('admin.lessons.store')}}" enctype="multipart/form-data" method="post" >
                        @csrf
                      <p class="card-description">So'ralgan ma'lumotlarni kiriting </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Dars Sanasi:</label>
                            <div class="col-sm-9">
                              <input type="date" name="lesson_data" class="form-control"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Boshlash vaqti:</label>
                            <div class="col-sm-9">
                            <div class="input-group">
                                <input type="time" name="lesson_time" class="form-control"  required/>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"  required >Gender</label>
                            <div class="col-sm-9">
                              <select name="group_id" class="form-select">
                                @foreach ($groups as $group )
                                <option value="{{$group->id}}"class="form-select" >{{$group->g_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2">Saqlash</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>

          <!-- content-wrapper ends -->
          @include('admin.layouts.footer')
