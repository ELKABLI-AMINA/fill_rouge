<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
{
    

    
    $reservation = Reservation::create([
        'user_id' => auth()->user()->id,
        'voyage_id' => $request->input('voyage_id'),
        'participants' => $request->input('quantity'),
        'price' => $request->input('price'),
        'Montant_total' => $request->input('total_price'),
        'reservation_date'=> now(),
        'status' =>'waiting'
    ]);

  
    return redirect()->back();
}



 
}
