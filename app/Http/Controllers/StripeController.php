<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;



class StripeController extends Controller
{
   
    
        public function paymentStripe()
        {
            return view('stripe');
        }
     
        public function postPaymentStripe(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'card_no' => 'required',
                'ccExpiryMonth' => 'required',
                'ccExpiryYear' => 'required',
                'cvvNumber' => 'required',
                // 'amount' => 'required',
            ]);
     
            $input = $request->except('_token');
     
            if ($validator->passes()) { 
                $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));
                 
                try {
                    $token = $stripe->tokens()->create([
                        'card' => [
                            'number' => $request->get('card_no'),
                            'exp_month' => $request->get('ccExpiryMonth'),
                            'exp_year' => $request->get('ccExpiryYear'),
                            'cvc' => $request->get('cvvNumber'),
                        ],
                    ]);
     
                    if (!isset($token['id'])) {
                        return redirect()->route('stripe.add.money');
                    }
                     
                    $charge = $stripe->charges()->create([
                        'card' => $token['id'],
                        'currency' => 'USD',
                        'amount' => 200.49,
                        'description' => 'wallet',
                    ]);
                     
                    if($charge['status'] == 'succeeded') {
                       
                        return redirect()->route('confirm-paiment');
                    } else {
                        return redirect()->route('addmoney.paymentstripe')->with('error','Money not add in wallet!');
                    }
                } catch (Exception $e) {
                    return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
                } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                    return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
                } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                    return redirect()->route('addmoney.paymentstripe')->with('error',$e->getMessage());
                }
            }
        }

        public function ShowPaiement()
        {
            return view('paiement');
        }
    
    
}
