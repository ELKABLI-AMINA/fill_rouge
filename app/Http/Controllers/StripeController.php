<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function form()
    {
        return view('stripe.payment-form');
    }

    public function makePayment(Request $request)
    {
        $input = $request->all();
        $reservation = session()->get('reservation_id');
        \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
        $charge = \Stripe\Charge::create([
            'source' => env('STRIPE_KEY'),
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 7000,
            'currency' => 'usd',
        ]);
        if ($charge) {
            $reservation = Reservation::where('id', $reservation)->first();


            $reservation->update([
                'status' => 'Done'
            ]);
        }
    }
}
