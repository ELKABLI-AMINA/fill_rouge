@extends('master.layout')

@section('title')
  About Us
@endsection

@section('content')
<div class="container">
                <div class="form-group">
                                <label for="bank-name">Nom de la banque :</label>
                                <input type="text" id="bank-name" name="bank-name" required>
                              </div>
                              
                              <div class="form-group">
                                <label for="bank-account-number">Numéro de compte :</label>
                                <input type="text" id="bank-account-number" name="bank-account-number" required>
                              </div>
                              
                              <div class="form-group">
                                <label for="bank-routing-number">Numéro de routage :</label>
                                <input type="text" id="bank-routing-number" name="bank-routing-number" required>
                              </div>
                              
                              <div class="form-group">
                                <label for="bank-iban">IBAN :</label>
                                <input type="text" id="bank-iban" name="bank-iban" required>
                  </div>
                              
</div>
@endsection