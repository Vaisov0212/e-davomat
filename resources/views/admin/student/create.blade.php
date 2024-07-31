
<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.balde.php',$Write);
?>

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
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('admin.studentImport_index')}}"><img src="{{asset('admin/images/excel1.png')}}" style=" width:22px"></a></li>
                  <li class="breadcrumb-item" ><a href="{{route('admin.studentImport_index')}}" >Import</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
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
                          <p class="card-description">So'ralgan ma'lumotlarni kiriting </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">F.I.Sh</label>
                                <div class="col-sm-9">
                                  <input type="text" name="studentName" class="form-control" required/>
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
                                    <input type="text" name="tel" class="form-control text-dark" placeholder="90 090 12 12" aria-label="Username" aria-describedby="basic-addon1" required>
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
                                  <select name="genderType" class="form-select">
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
                                  <input type="date" name="t_sana" class="form-control" placeholder="kun/oy/yil" required />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gurux nomi</label>
                                <div class="col-sm-9">
                                    <select name="group_name"  class="form-select" id="exampleSelectGender">
                                        @foreach ($groups as $group )
                                        <option value="{{$group->id}}">{{$group->g_name}}</option>
                                        @endforeach
                                    </select>
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Card ID</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="card_id" class="form-control" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Boshqa</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="studentGroup" class="form-control" />
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
