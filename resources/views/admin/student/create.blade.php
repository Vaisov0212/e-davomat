
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
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function(){
                         $("#getUID").load("UIDContainer.balde.php");
                        setInterval(function() {
                            $("#getUID").load("UIDContainer.balde.php");
                        }, 500);
                    });
                </script>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
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
                        <label for="exampleInputName1">Card ID</label>
                        <input id="getUID"  name="card_id" type="text" class="form-control" placeholder="id">
                        {{-- <textarea style="width: 200px" name="id" id="getUID" placeholder="PleaseD" rows="1" cols="1" required></textarea> --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">F.I.Sh</label>
                        <input name="studentName" type="text" class="form-control" id="exampleInputName1" placeholder="To'liq ism familya">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Jinsi</label>
                        <select name="genderType"  class="form-select" id="exampleSelectGender">
                          <option value="Ayol">Ayol</option>
                          <option value="Erkak">Erkak</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Guruh nomi</label>
                        <select name="group_name"  class="form-select" id="exampleSelectGender">
                            @foreach ($groups as $group )
                            <option value="{{$group->id}}">{{$group->g_name}}</option>
                            @endforeach

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Guruh:</label>
                        <input name="studentGroup" type="text" class="form-control" id="exampleInputName1" placeholder="Guruh:">
                      </div><div class="form-group">
                        <label for="exampleInputName1">Tug'ilgan sana:</label>
                        <input name="t_sana" type="date" class="form-control" id="exampleInputName1" placeholder="t_sana:">
                      </div>

                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

          </div>
          <!-- content-wrapper ends -->
          @include('admin.layouts.footer')
