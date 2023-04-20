@extends('master.layout')

    <!-- Section -->
    @section('title')
                Paiement
    @endsection

    @section('content') 
   
   <div class="container">
                <h3 class="text-success mt-3">"Nous proposons plusieurs options de paiement sécurisées pour votre confort."</h3>
                <div class="payment-links">
                                <a href="{{ route('addmoney.paymentstripe') }}" class="card-link">Payer par carte bancaire</a>
                                <a href="{{ route('espece') }}" class="cash-link">Payer en espèces</a>
                                <a href="#" class="bank-link">Payer par virement bancaire</a>
                </div>
                              
                              


   </div>
            
            
          
    @endsection