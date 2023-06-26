<!DOCTYPE html>
  <html lang="en">
     <head>
        <title>Remita Checkout Sample</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <style type="text/css">
           .button {background-color: #1CA78B;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer;  border-radius: 4px;}
           input {  max-width: 30%;}
        </style>
     </head>
     <body>
        <div class="container mt-3">
            <div class="col-md-12 grid-margin stretch-card">

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
           <h2>Payment</h2>

          <form action="{{ route('payment.make') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-floating mb-3 mt-3">
                 <input type="text" class="form-control" id="js-firstName" placeholder="Enter First Name" name="firstName">
                 <label for="email">First Name</label>
              </div>
              <div class="form-floating mb-3 mt-3">
                 <input type="text" class="form-control" id="js-lastName" placeholder="Enter Last Name" name="lastName">
                 <label for="email">Last Name</label>
              </div>
              <div class="form-floating mb-3 mt-3">
                 <input type="text" class="form-control" id="js-email" placeholder="Enter Email" name="email">
                 <label for="email">Email</label>
              </div>
              <div class="form-floating mt-3 mb-3">
                <input type="text" class="form-control" id="js-narration"  name="payerPhone"
               placeholder="Pickup point">
                <label for="pwd">Phone</label>
             </div>
              <div class="form-floating mt-3 mb-3">
                <input type="text" class="form-control" id="js-narration"  name="meeting_point"
               placeholder="Pickup point">
                <label for="pwd">Pick up Address</label>
             </div>

              <div class="form-floating mt-3 mb-3">
                 <input type="text" class="form-control" id="js-narration"  name="description"
                  value="Travel Fees from {{$trip->city}} to {{$trip->destination}}" @readonly(true)>
                 <label for="pwd">Narration</label>
              </div>
              <div class="form-floating mt-3 mb-3">
                 <input type="text" class="form-control" id="js-amount" placeholder="Enter Amount" name="amount" value="{{$trip->amount}}" readonly>
                 <label for="pwd">Amount(N)</label>
              </div>
              <input type="hidden" name="cab_id" value="{{$trip->cab_id}}"/>
              <input type="submit"  value="Pay" button class="button"/>
           </form>
        </div>

     </body>
  </html>

