@extends('master.layout')

@section('title')
Créer Votre Voyage
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
       <div class="col-md-8">
              <form action="" method="post" enctype="multipart/form-data">
                 @csrf
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                      </div>
                      <div class="form-group mt-2 ">
                          <label for="exampleFormControlInput1">Image</label>
                           <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
                       </div>
                       <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_depart</label>
                        <input type="date" name="date_depart" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_arrive</label>
                        <input type="date" name="date_arrive" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_jours</label>
                        <input type="number" name="nb_jours" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_limite_reservation</label>
                        <input type="number" name="nb_limite_reservation" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_personne</label>
                        <input type="number" name="nb_personne" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">prix par personne</label>
                        <input type="number" name="prix" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Valider</button>
             </form>                                                    
         </div>
                        <div class="col-md-4 ">
                            <img src="{{ asset('img/voyage.jpg') }}"class="img-fluid " >
                        </div>
       </div>
   </div> 
   
   
@endsection