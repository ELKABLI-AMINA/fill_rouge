
@extends('master.Odashboard.layout')
@section('content')
 
<div class="container-fluid px-4">
    <div class="row g-3 my-2">
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
                    <p class="fs-5"></p>
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
    </div>
</div>
<div>
                   
    <a href="{{ route('create.voyage') }}" class="btn btn-success btn-lg active mt-5 ms-3" role="button" aria-pressed="true">Add Trip</a>
    
   
</div>

@endsection