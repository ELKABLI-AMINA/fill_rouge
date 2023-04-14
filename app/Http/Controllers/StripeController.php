<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 1000,
            'currency' => 'usd',
            'application_fee_amount' => 200,
        ], [
            'stripe_account' => '{{CONNECTED_STRIPE_ACCOUNT_ID}}',
        ]);
    }
}
