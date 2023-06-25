@extends('admin.layout.layout')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">

            </div>

          </div>
        </div>
      </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card p-2">
            <div class="card-body">
              <h4 class="card-title">Cab Information</h4>
              @if(Session::has('error_message'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> {{Session::get('error_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              @if(Session::has('success_message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{Session::get('success_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

              @if ($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              @endif

        </div>

            <form class="forms-sample" action = "{{url('admin/store-cab')}}" method = "POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="admin_name">Brand Name</label>
                    <input type="text" name="brand" value="" class="form-control" placeholder="Brand Name" required>
                  </div>
                <div class="form-group">
                    <label for="vendor_address">Model</label>
                    <input type="text" name="model" value="" class="form-control" id="plate_number" placeholder="Model" required>
                </div>
                <div class="form-group">
                <label for="vendor_city">vin</label>
                <input type="text" name="vin" value="" class="form-control"  placeholder="Vehicle Inspection Number" required>
                </div>
                <div class="form-group">
                    <label for="vendor_state">Registration No</label>
                    <input type="text" name="registration_no" value="" class="form-control" id="registration_no" placeholder="Enter Bvn number" required>
                </div>
                <div class="form-group">
                    <label for="vendor_state">Vehicle Type</label>
                    <input type="text" name="chassis_number" value="" class="form-control" id="bvn_no" placeholder="e.g SUV,Sedan" required>
                </div>
                <div class="form-group">
                    <label for="vendor_state">Number of Seats</label>
                    <input type="number" name="no_of_seats" value="" class="form-control" id="bvn_no"  required>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>


    </div>


    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
  </div>
  @endsection
