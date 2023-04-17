@extends('master.layout')

@section('title')
Editer Votre Voyage
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
                <form action="{{ route('voyage.update', ['slug'=>$voyage->slug]) }}" method="post" enctype="multipart/form-data">

                 @csrf
                 @method('PUT')
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" name="name" value="{{ $voyage->name }}"class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control tinymce text-truncate" name="description"  id="description" rows="3">{{ $voyage->description }}</textarea>
                      </div>
                      <div class="form-group mt-2 ">
                          <label for="exampleFormControlInput1">Image</label>
                           <input type="file" name="image" value="{{ $voyage->image }}" class="form-control" id="exampleFormControlInput1">
                       </div>
                       <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_depart</label>
                        <input type="date" name="date_depart" value="{{ $voyage->date_depart}}" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_arrive</label>
                        <input type="date" name="date_arrive" value="{{ $voyage->date_arrive}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_depart</label>
                        <input type="date" name="date_depart" value="{{ $voyage->date_depart}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_jours</label>
                        <input type="number" name="nb_jours" value="{{ $voyage->nb_jours}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_limite_reservation</label>
                        <input type="number" name="nb_limite_reservation" value="{{ $voyage->nb_limite_reservation}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">date_fin_reservation</label>
                        <input type="date" name="date_fin_reservation"  value="{{ $voyage->date_fin_reservation}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_jours</label>
                        <input type="number" name="nb_jours" value="{{ $voyage->nb_jours}}" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">nb_personne</label>
                        <input type="number" name="nb_personne" value="{{ $voyage->nb_personne}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group mt-2 ">
                        <label for="exampleFormControlInput1">prix</label>
                        <input type="number" name="prix" value="{{ $voyage->prix}}"  class="form-control" id="exampleFormControlInput1">
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Valider</button>
             </form>                                                    
         </div>
                        <div class="col-md-6 ">
                            <img src="{{ asset('img/trip-2203682_960_720.jpg') }}"class="img-fluid " >
                        </div>
       </div>
   </div>         
@endsection