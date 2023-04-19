

@extends('master.dashboard.layout')
@section('content')
<div class="container-fluid px-4">
                <div class="row g-3 my-2">
                   
                    <div class="col-md-4 ">
                      <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header text-center ">Total Agencies</div>
                        <div class="card-body">
                          <p class="card-text">{{ $totalAgences }}</p>
                        </div>
                      </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                          <div class="card-header text-center">Total Voyages</div>
                          <div class="card-body">
                            <p class="card-text">{{ $totalVoyages }}</p>
                          </div>
                        </div>
                      </div>  

                    <div class="col-md-4">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                          <div class="card-header text-center">Total Reservation</div>
                          <div class="card-body">
                            <p class="card-text">{{$totalReservation }}</</p>
                          </div>
                        </div>
                      </div> 

                   
                </div>
            </div>
@endsection
