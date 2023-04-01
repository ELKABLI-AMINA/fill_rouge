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
                <div class="row">
                                <div class="col-md-6">
                                                <form action="{{ route('Agence.edit', $agence->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group mt-2">
                                                                    <label for="exampleFormControlInput1">Name</label>
                                                                    <input type="text" name="name" class="form-control" value="{{ $agence->name }}" id="exampleFormControlInput1" value="{{ $agence->name }}">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="exampleFormControlSelect1">City</label>
                                                                    <select class="form-control" value="{{ $agence->city }}"  name="city" id="exampleFormControlSelect1">
                                                                        <option>Casablanca</option>
                                                                        <option>Rabat</option>
                                                                        <option>Fes</option>
                                                                        <option>Marrakech</option>
                                                                        <option>5</option>
                                                                    </select> 
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="exampleFormControlInput1">Address</label>
                                                                    <input type="text" name="address" value="{{ $agence->Address }}"  class="form-control" id="exampleFormControlInput1" value="{{ $agence->address }}">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="exampleFormControlTextarea1">Description</label>
                                                                    <textarea class="form-control" value="{{ $agence->Description }}"  name="description" id="exampleFormControlTextarea1" rows="3">{{ $agence->description }}</textarea>
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="exampleFormControlInput1">Logo</label>
                                                                    <input type="file" name="logo" value="{{ $agence->logo }}"  class="form-control" id="exampleFormControlInput1">
                                                                </div>
                                                                <a href="{{ route(Agence.edit) }}" class="btn btn-warning mt-3">Modifier</a>
                                                            </form>
                                                            
                                                              
                                </div>

                                <div class="col-md-6">
                                                <img src="{{ asset('img/agafay.jpg') }}"class="img-fluid " >
                                              </div>
                </div>
</div>         
@endsection
