
@extends('master.Odashboard.layout')
@section('content')
 
<div class="container-fluid px-4">
    {{-- <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">Total Trips</h3>
                    <p class="fs-5">{{ $totalVoyages }}</p>
                </div>
            
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">Total Reservation</h3>
                    <p class="fs-5">{{  $totlaReservation }}</p>
                </div>
         
             </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3899</h3>
                    <p class="fs-5">Delivery</p>
                </div>
              
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%25</h3>
                    <p class="fs-5">Increase</p>
                </div>
                
            </div>
        </div>
    </div> --}}
    <div class="row g-3 my-2">
                   
        <div class="col-md-3 ">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header text-center ">Total Trips</div>
            <div class="card-body">
              <p class="card-text">{{ $totalVoyages }}</p>
            </div>
          </div>
        </div>  
        <div class="col-md-3">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Total Reservation</div>
              <div class="card-body">
                <p class="card-text">{{  $totalReservation }}</p>
              </div>
            </div>
          </div>  

        <div class="col-md-3">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Reservation Payante</div>
              <div class="card-body">
                <p class="card-text">{{ $ReservationPayante }}</p>
              </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
              <div class="card-header text-center">Profit</div>
              <div class="card-body">
                <p class="card-text">{{ $profit }}:00DH</p>
              </div>
            </div>
        </div> 

       
    </div>

</div>
<div>
                   
    <a href="{{ route('create.voyage') }}" class="btn btn-success btn-lg active mt-5 ms-3" role="button" aria-pressed="true">Add Trip</a>
    
   
</div>

@endsection