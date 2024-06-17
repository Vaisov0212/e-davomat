
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
                  <li class="breadcrumb-item"><a href="#">guruhlar</a></li>
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
                                @foreach ($errors->all as $error )
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

                    <form enctype="multipart/form-data" action="{{route('admin.student.store')}}" method="POST"  class="forms-sample">
                        @method('POST')
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Guruh nomi:</label>
                        <input id="getUID"  name="card_id" type="text" class="form-control" placeholder="to'liq nom:">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Kurs Narhi</label>
                        <input name="studentName" type="text" class="form-control" id="exampleInputName1" placeholder="250 ming som:">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Mentor</label>
                        <select name="genderType"  class="form-select" id="exampleSelectGender">
                          <option value="Ayol">Ayol</option>
                          <option value="Erkak">Erkak</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Rasm</label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Sinf:</label>
                        <input name="studentGroup" type="text" class="form-control" id="exampleInputName1" placeholder="Sinf:">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
          </div>

          <!-- content-wrapper ends -->
          @include('admin.layouts.footer')
