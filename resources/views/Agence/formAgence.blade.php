@extends('master.layout')

@section('title')
Créer Votre Agence
@endsection

@section('content') 
 <div class="container mt-5">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
      
  </div>
@endif
@if (session()->has('success'))
      <div class="alert alert-success">
       {{ session()->get('success') }}
       </div> 
       @endif
  <div class="row">
       <div class="col-md-6">
              <form action="" method="post" enctype="multipart/form-data">
                 @csrf
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                       

                        <label for="exampleFormControlSelect1">City</label>
                          <select class="form-control" name="city" id="exampleFormControlSelect1">
                          <option>Casablanca</option>
                          <option>Rabat</option>
                          <option>Fes</option>
                          <option>Marrakech</option>
                          <option>5</option>
                        </select> 
                        
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="form-group mt-2 ">
                                      <label for="exampleFormControlInput1">Logo</label>
                                      <input type="file" name="logo" class="form-control" id="exampleFormControlInput1">
                                    </div>
                      <button type="submit" class="btn btn-primary mt-3">Valider</button>
             </form>                                                    
         </div>
                        <div class="col-md-6">
                            <img src="{{ asset('img/agafay.jpg') }}"class="img-fluid " >
                        </div>
       </div>
   </div>         
@endsection
