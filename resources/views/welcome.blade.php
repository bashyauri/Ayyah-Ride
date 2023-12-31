<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles can be added here */
    </style>
</head>
<body>
    <div class="container ">
        <h1 class="text-center my-5">Cab Booking</h1>
        <div class="card border-primary rounded-md mb-5">
            <div class="card-body">
              <h5 class="card-title">Cab Search</h5>
              <form id="search-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from">Where from?</label>
                      <select class="form-control" name="from" id="from" required>
                        <option value="">---State---</option>
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to">Where to?</label>
                      <select class="form-control" name="to" id="to" required>
                        <option value="">--State---</option>
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
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="departure">Date</label>
                      <input type="date" class="form-control" name="departure" id="departure">
                    </div>
                  </div>


                </div>

                <button  class="btn btn-primary" id="search-btn">Search</button>
              </form>
            </div>
        </div>
        <div id="result">





    </div>



        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="{{ url('admin/js/ajax/search-cabs.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
