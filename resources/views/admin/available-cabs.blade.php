@extends('admin.layout.layout')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Settings</h3>
            </div>
            <div class="col-12 col-xl-4">
             <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">January - March</a>
                  <a class="dropdown-item" href="#">March - June</a>
                  <a class="dropdown-item" href="#">June - August</a>
                  <a class="dropdown-item" href="#">August - November</a>
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Available Cabs</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table  class="display expandable-table" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Car Name</th>
                          <th>Chassis</th>
                          <th>Registration No</th>
                          <th>Number of Seats</th>


                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($availableCabs as $index => $availableCab)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$availableCab->cab->brand.' '.$availableCab->cab->model}}</td>
                             <td>{{$availableCab->cab->chassis_number}}</td>
                            <td>{{$availableCab->cab->registration_no}}</td>
                            <td>{{$availableCab->cab->no_of_seats}}</td>

                            <td><a class= "btn btn-info" href="{{url('admin/cab/'.$availableCab->cab->id.'/schedule-trip')}}">View</a></td>

                        </tr>
                        @empty
                        <p>No record found</p>
                        @endforelse
                      </tbody>
                  </table>
                  </div>
                </div>
              </div>
              </div>
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
