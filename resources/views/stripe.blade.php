@extends('master.layout')

@section('title')
  Paiement
@endsection

@section('content')

<div class="container">
  <div class="row">

     <div class="col-md-12">
       {{-- <div class="card">
             BackSeat Surfing
       </div> --}}
       <div class="card-body">
         @if(Session::has('error'))
         <font color="red">{{ Session::get('error') }}</font>
         @endif
         <form class="form-horizontal" id="payment-form" role="form" action="{{ route('addmoney.stripe') }}" method="post">
           @csrf
           <div class="mb-3">
             <label class="form-label">Numéro de carte</label>
             <input autocomplete="off" class="form-control card-number" size="20" type="text" name="card_no" id="">
           </div>
           <div class="row g-3 align-items-center">
             <div class="col-auto">
               <label class="form-label">CVV</label>
               <input autocomplete="off" class="form-control card-cvc"  placeholder="ex. 311" size="4" type="text" name="cvvNumber" >
             </div>
             <div class="col-auto">
               <label class="form-label" >Expiration</label>
               <input  class="form-control card-expiry-month"  placeholder="MM" size="4" type="text" name="ccExpiryMonth" >
             </div>  
             <div class="col-auto">
               <label class="form-label" >Année</label>
               <input  class="form-control card-expiry-year"  placeholder="AAAA" size="4" type="text" name="ccExpiryYear" >
               <input  class="form-control card-expiry-year"  placeholder="AAAA" size="4" type="hidden" name="amount" value="300" >
             </div>  
           </div>
           <div class="mb-3" style="padding-top:20px; ">
             <h5 class="total">Total :</h5>
           </div>
           <div class="mb-3">
              <button class="form-control btn btn-success submit-button" type="submit">Payer</button>
           </div>
        </form>
      </div>
    </div>
 </div>
</div>



@endsection