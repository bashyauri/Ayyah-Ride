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
    <div class="container">
        <h1 class="text-center my-5">Cab Booking</h1>
        <div class="card border-primary rounded-md">
            <div class="card-body">
              <h5 class="card-title">Cab Search</h5>
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from">Where from?</label>
                      <input type="text" class="form-control" id="city" placeholder="State">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to">Where to?</label>
                      <select class="form-control" id="destination">
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
                      <input type="date" class="form-control" id="departure">
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="passengers">Passengers</label>
                    <select class="form-control" id="passengers">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                  </div>

                </div>

                <button type="submit" class="btn btn-primary">Search</button>
              </form>
            </div>
          </div>




            <!-- Add more cards for additional cabs -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
