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

        \Stripe\Stripe::setApiKey('sk_test_51MwBHhEN0ITF1muGPKf3WDh31j4hZzHzPO1AEQNATsdWrVsoKNmP4gEwBl5YUC4UKDSTUXMt8aZ9h64MRGtox4k900xJo2oxad');
        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'description' => "10 cucumbers from Roger's Farm",
            'amount' => 7000,
            'currency' => 'usd',
        ]);
    }
}
