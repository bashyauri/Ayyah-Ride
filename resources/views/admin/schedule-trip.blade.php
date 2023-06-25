@extends('admin.layout.layout')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Schedule Trip </h4>
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

        <form class="forms-sample" action="{{ url('admin/'.$cab->id.'/schedule-trip') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-row p-2">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="city">Departure</label>
                        <select class="form-control" name="from" id="from">
                            <option value="">--from---</option>
                            <option value="Abuja">Abuja(FCT)</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Zamfara">Zamfara</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Jigawa">Jigawa</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="city">Destination</label>
                        <select class="form-control" name="to" id="to">
                            <option value="">--to---</option>
                            <option value="Abuja">Abuja(FCT)</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Zamfara">Zamfara</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Jigawa">Jigawa</option>
                          </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="amount">Fee</label>
                        <input type="text" name="amount" value="" class="form-control" id="amount" placeholder="Amount" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" name="time" value="" class="form-control" id="time" placeholder="Time" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="destination">Date</label>
                        <input type="date" name="destination"  class="form-control" id="destination" placeholder="Destination" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Update</button>
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
