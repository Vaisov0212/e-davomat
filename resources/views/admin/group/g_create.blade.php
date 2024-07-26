
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
              <h3 class="page-title">Guruh qo'shish</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.groups.index')}}">guruhlar</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Guruh qo'shish</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Guruh qo'shish</h4>
                    <p class="card-description">Yangi guruh uchun so'ralgan malumotlarni kiriting </p>
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

                    <form enctype="multipart/form-data" action="{{route('admin.groups.store')}}" method="POST"  class="forms-sample">
                        @method('POST')
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Guruh nomi:</label>
                        <input id="getUID"  name="name" type="text" class="form-control" placeholder="to'liq nom:">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Kurs Narhi</label>
                        <input name="money" type="text" class="form-control" id="exampleInputName1" placeholder="250 ming som:">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Mentor</label>
                        <select name="teacher"  class="form-select" id="exampleSelectGender">
                            @foreach ($teachers as $item )
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">yaratish</button>
                      <button type="reset" class="btn btn-danger">tozalash</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
          </div>

          <!-- content-wrapper ends -->
          @include('admin.layouts.footer')
