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
                <div class="bg-primary text-white  " style="border-radius: 2px; height: 40px; ">1-Soumettre la Commande</div>

                <h2>{{ $voyage->name }}</h2>
              

                <form method="POST" action="">
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

                                <button type="submit" class="btn btn-primary">Réserver</button>
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