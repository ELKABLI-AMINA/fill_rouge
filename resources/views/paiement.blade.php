@extends('master.layout')

@section('title')
  Paiement
@endsection

@section('content')
   
<div class="">
  
  

                <div class="bg-success text-white  mt-3 px-2 " style="border-radius: 2px; height: 40px;">Payer votre réservation</div>
                <form action="" class="mt-3" method="POST">
                  <div>
                      <a href="{{ route('viresement') }}"  class="btn btn-success text-start text-white text-bold paiement mt-2">Versement bancaire</a>
                  </div>
                  <div>
                      <a href="{{ route('espece') }}"  class="btn btn-success text-start paiement mt-2">2-Espèce</a>
                  </div>
                
             
                <div id="payment-script" class="d-none">
                  <script
                    src="https://checkout.stripe.com/checkout.js"
                    
                    class="stripe-button hidden"
                    data-key="pk_test_51MwBHhEN0ITF1muGvBmeMZKMtgiSjYjUbzacUFU2TXmsJ50QzGR80QXDcj8HSpKUCG6r7NAWlp6YZYu617M1FuA000oWmw9lO3"
                    data-name="Trip"
                    data-description="Enjoy Your Trip"
                    data-amount="{{ session()->get('total')  }}"
                    data-image="https://www.webappfix.com/storage/app/public/site-setting/SRBx2hTgEOaHdozWVR3hgPb3LTdEw9NwajD05FL2.png" 
                    data-currency="usd"
                    data-label="Make Payment">
                              
                  </script>               
                </div>
                <button class="btn btn-success" onclick="document.querySelector('#payment-script button').click();">Make Payment</button>
               
              
 <div
                
        
              

@endsection