
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
              <h3 class="page-title">Yangi hodim qo'shish</h3>
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
                    <h4 class="card-title">Yangi Hodim Ma'lumotlari</h4>
                    <form class="form-sample" action="{{route('admin.teachers.store')}}" enctype="multipart/form-data" method="post" >
                        @csrf
                      <p class="card-description">So'ralgan ma'lumotlarni kiriting </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">F.I.Sh</label>
                            <div class="col-sm-9">
                              <input type="text" name="fish" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tel:</label>
                            <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">+998</span>
                                </div>
                                <input type="text" name="tel" class="form-control" placeholder="90 090 12 12" aria-label="Username" aria-describedby="basic-addon1" required>
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
                              <select name="gendr" class="form-select">
                                <option value="Erkak"class="form-select" >Erkak</option>
                                <option value="Ayol" class="form-select" >Ayol</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tug'ilgan sana</label>
                            <div class="col-sm-9">
                              <input type="date" name="sana" class="form-control" placeholder="kun/oy/yil" required />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Manzil</label>
                            <div class="col-sm-9">
                              <input type="text" name="addres" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">E-Mail</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" />
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("input");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Malumotni to'liq kiriting");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
</script>
          <!-- content-wrapper ends -->
          @include('admin.layouts.footer')
