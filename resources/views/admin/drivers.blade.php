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
              <p class="card-title">Advanced Table</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table  class="display expandable-table" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile No</th>
                          <th>Bvn</th>
                          <th>Driver License</th>
                          <th>Plate number</th>
                          <th>Number of Seats</th>
                          <th>Approve</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($drivers as $index => $driver)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$driver->name}}</td>
                            <td>{{$driver->email}}</td>
                            <td>{{$driver->mobile_no}}</td>
                            <td>{{$driver->driverDetails->bvn_no}}</td>
                            <td>{{$driver->driverDetails->driver_license_no}}</td>
                            <td>{{$driver->driverDetails->plate_no}}</td>
                            <td>{{$driver->driverDetails->no_of_seats}}</td>
                            <td><input type="checkbox"  class="recommend-checkbox" data-driver-id="{{ $driver->driverDetails->admin_id }}" name="approve"></td>

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
