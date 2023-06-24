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
        <div id="result">


        @if (!empty($cabs))

        @foreach ($cabs as $cab)
        <div class="card mb-4">
            <img src="cab1.jpg" class="card-img-top" alt="Cab 1">
            <div class="card-body">
                <h5 class="card-title">Car Brand:{{$cab->cab->brand}}</h5>
                <p class="card-text">Destination: {{$cab->destination}}</p>
                <p class="card-text">Date: {{ \Carbon\Carbon::parse($cab->date)->format('M d, Y') }}</p>
                <p class="card-text">Departure: {{ \Carbon\Carbon::parse($cab->time)->format('g:i A') }}</p>
                <p class="card-text">Seats Available{{$cab->cab->no_of_seats}}</p>
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>

        @endforeach

        @endif

    </div>



        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="{{ url('admin/js/ajax/search-cabs.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
