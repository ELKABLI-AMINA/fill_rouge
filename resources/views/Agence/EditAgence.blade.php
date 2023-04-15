@extends('master.layout')

@section('title')
Modifier Votre Agence
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
              <form action="{{ route('Agence.update', $agence->slug) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" value="{{ $agence->name }}" name="name" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                        <label for="exampleFormControlSelect1">City</label>
                        <select class="form-control" name="ville_id" id="ville_id">
                          <option selected disabled value=""></option>
                          @foreach($villes as $ville)
                              <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                          @endforeach
                      </select>
                        
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" name="address" value="{{ $agence->address }}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{ $agence->description }}</textarea>
                      </div>
                      <div class="form-group mt-2 ">
                                      <label for="exampleFormControlInput1">Logo</label>
                                      <input type="file" name="logo" value="{{ $agence->logo }}"  class="form-control" id="exampleFormControlInput1">
                                    </div>
                      <button type="submit" class="btn btn-primary mt-3">Valider</button>
             </form>                                                    
         </div>
                        <div class="col-md-6">
                            <img src="{{ asset('img/trip-2203682_960_720.jpg') }}"class="img-fluid " >
                        </div>
       </div>
   </div>         
@endsection
