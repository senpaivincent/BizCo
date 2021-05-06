@extends('layouts.master')

@section('content')
<!-- id = "13 forms" -->

<div class="container-fluid">

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
  @endif


  <!-- Section: Edit Account -->
  <section class="section">
    <!-- First row -->
    <div class="row">

      <!-- First column Parent-->
      <div class="col-lg-4 mb-4">

        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
          </div>
          <!-- Card image -->

          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-15.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

            <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
            <div class="row flex-center">
              <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button><br>
              <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
            </div>
          </div>
          <!-- Card content -->

        </div>
        <!-- Card -->

      </div>
      <!-- First column Parent-->

      <!-- Second column Parent-->
      <div class="col-lg-8 mb-4">

        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Edit Account</h5>
          </div>
          <!-- Card image -->

          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">

            @foreach ($usa as $users)
              <h1 hidden>{{ $users->id }}</h1>
            <!-- Edit Form -->
            <form id="userForm" action="{{ route('profile.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')

              <!-- First row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <select class="browser-default custom-select" name="role" form="userForm">
                      @if($users->role == null)
                        <option value="" disabled selected>Account Type</option>
                      @else
                        <option value="" disabled selected>{{ $users->role }}</option>
                      @endif
                      <option value="Business Owner">Business Owner</option>
                      <option value="Distributor">Distributor</option>
                      <option value="Shareholder">Shareholder</option>
                      <option value="Reseller">Reseller</option>
                    </select>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <!-- EMAIL -->
                    <input type="email" name="email" id="form1" class="form-control validate" value="{{ $users->email }}">
                    <label for="form1" data-error="Invalid">Email</label>
                  </div>
                </div>
              </div>
              <!-- First row child-->

              <!-- Second row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <!-- NAME -->
                    <input type="text" name="name" id="form2" class="form-control validate" pattern="[a-zA-Z]+" value="{{ $users->name }}" required>
                    <label for="form2" data-error="Invalid">Name</label>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <!-- NICKNAME -->
                    <input type="text" name="nickname" id="form3" class="form-control validate" pattern="[a-zA-Z]+" value="{{ $users->nickname }}">
                    <label for="form3" data-error="Invalid">Nickname</label>
                  </div>
                </div>
              </div>
              <!-- Second row child-->

              <!-- Third row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="tel" name="phone" pattern="[0-9]{10}" id="form4" class="form-control validate" value="{{ $users->phone }}" required>
                    <label for="form4" data-error="Invalid">Phone Number (63+)</label>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="tel" name="telephone" pattern="[0-9]{3}-[0-9]{4}" id="form5" class="form-control validate" value="{{ $users->telephone }}">
                    <label for="form5" data-error="Invalid">Telephone Number (xxx-xxxx)</label>
                  </div>
                </div>
              </div>
              <!-- Third row child-->

              <!-- Fourth row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <textarea type="text" name="about" id="form6" class="md-textarea form-control" rows="3">{{ $users->about }}</textarea>
                    <label for="form6">About me</label>
                  </div>
                </div>
              </div>
              <!-- Fourth row child-->

              <!-- Fifth row child-->
              <div class="row">
                <div class="col-md-12 text-center my-4">
                  <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                </div>
              </div>
              <!-- Fifth row child-->

            </form>
            @endforeach
            <!-- Edit Form -->

          </div>
          <!-- Card content -->

          {{-- <!-- Card content -->
          <div class="card-body card-body-cascade text-center">
            @foreach ($usa as $users)
              <h1>{{ $users->id }}</h1>
            @endforeach
            <!-- Edit Form -->
            <form id="userForm" action="{{ route('profile.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')

              <!-- Second row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <!-- NAME -->
                    <input type="text" name="name" class="form-control validate" value="{{ $users->name }}" required>
                    <label for="form2" data-error="Invalid">Name</label>
                  </div>
                </div>
                
              </div>
              <!-- Second row child-->

              <!-- Fifth row child-->
              <div class="row">
                <div class="col-md-12 text-center my-4">
                  <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                </div>
              </div>
              <!-- Fifth row child-->

            </form>
            <!-- Edit Form -->

          </div>
          <!-- Card content --> --}}

        </div>
        <!-- Card -->

      </div>
      <!-- Second column Parent -->

      <!-- Third column Parent-->
      <div class="col-lg-8 mb-4 ml-auto">

        <!-- Card -->
        <div class="card card-cascade narrower">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header mdb-color lighten-3">
            <h5 class="mb-0 font-weight-bold">Edit Business Profile</h5>
          </div>
          <!-- Card image -->

          <!-- Card content -->
          <div class="card-body card-body-cascade text-center">

            <!-- Edit Form -->
            <form>

              <!-- First row child-->
              <div class="row">

                <!-- First column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="form7" class="form-control validate" value="">
                    <label for="form7" data-error="wrong" data-success="right">Company/Organization Name</label>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="form8" class="form-control validate">
                    <label for="form8" data-error="wrong" data-success="right">Business Address (Optional)</label>
                  </div>
                </div>
              </div>
              <!-- First row child-->

              <!-- Second row child-->
              <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form9" class="form-control validate">
                    <label for="form9" data-error="wrong" data-success="right">Business Phone #</label>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="10" class="form-control validate">
                    <label for="form10" data-error="wrong" data-success="right">Fax Number #</label>
                  </div>
                </div>
              </div>
              <!-- Second row child-->

              <!-- Third row child-->
              <div class="row">

                <!-- First column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="tel" pattern="[0-9-() ]*" id="form11" class="form-control validate">
                    <label for="form11">After-Hours Phone (After-Hours Phone is answered when business is closed)</label>
                  </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="email" id="form12" class="form-control validate">
                    <label for="form12" data-error="wrong" data-success="right">Email Address</label>
                  </div>
                </div>

                <!-- Third Column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="form13" class="form-control validate">
                    <label for="form13" data-error="wrong" data-success="right">Website Address</label>
                  </div>
                </div>
              </div>
              <!-- Third row child-->

              <!-- Fourth row child-->
              <div class="row">

                <!-- First column -->
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="form13" class="md-textarea form-control">
                    <label for="form13">Mailing Address (Optional)</label>
                  </div>
                </div>
              </div>
              <!-- Fourth row child-->

              <!-- Fifth row child-->
              <div class="row">
                <div class="col-md-12 text-center my-4">
                  <input type="submit" value="Update Business Profile" class="btn btn-info btn-rounded">
                </div>
              </div>
              <!-- Fifth row child-->

            </form>
            <!-- Edit Form -->

          </div>
          <!-- Card content -->

        </div>
        <!-- Card -->

      </div>
      <!-- Third column Parent-->

    </div>
    <!-- First row -->

  </section>
  <!-- Section: Edit Account -->

</div>

@endsection
