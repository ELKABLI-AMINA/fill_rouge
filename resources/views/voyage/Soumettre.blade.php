@extends('master.layout')

@section('title')
  Soumettre la Commande
@endsection

@section('content')

<div class="container">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="bg-success text-white mt-3 " style="border-radius: 2px; height: 40px; ">1-Soumettre la Commande</div>

              
              

                <form class="mt-5" method="POST" action="">
                                @csrf

                                <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">

                                <div class="form-group">
                                <label for="quantity">Quantité:</label>
                                <input type="number" name="quantity" id="quantity" min="1" max="30" onchange="calculateTotal()">
                                </div>

                                <div class="form-group">
                                <label for="price">Prix unitaire:</label>
                                <input type="text" name="price" id="price" value="{{ $voyage->prix }}" readonly>
                                </div>

                                <div class="form-group">
                                <label for="total_price">Montant total:</label>
                                <input type="text" name="total_price" id="total_price" readonly>
                                </div>
                                                  
                       {{-- <a href="{{ route('VerificationCommande') }}" class="btn btn-success btn-lg active mt-2" role="button" aria-pressed="true">Réserver</a> --}}
                                <button type="submit" class="btn btn-success"><a href="{{ route('paiement') }}" class="btn btn-success btn-lg active mt-2" role="button" aria-pressed="true">Réserver</a></button>
                </form>

               
</div>
  



<script>
function calculateTotal() {
    var quantity = document.getElementById("quantity").value;
    var price = document.getElementById("price").value;
    var total = quantity * price;
    document.getElementById("total_price").value = total;
}
</script>



@endsection