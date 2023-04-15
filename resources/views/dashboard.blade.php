

@extends('master.dashboard.layout')
@section('content')
<div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total Agencies</h3>
                                <p class="fs-5">{{ $totalAgences }}</p>
                            </div>
                        
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total Voyages</h3>
                                <p class="fs-5">{{ $totalVoyages }}</p>
                            </div>
                            {{-- icon --}}
                         </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total Reservation</h3>
                                <p class="fs-5">{{$totalReservation }}</p>
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
@endsection
