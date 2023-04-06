
@extends('master.layout')

<!-- Section -->
@section('title')
Register
@endsection

@section('content') 

<div class="container">
  
  <div class="row justify-content-center ">
                
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">Sign In</div>
            <div class="card-body">
              <form method="POST" action="{{ route('loginUser') }}">
                @csrf
    
                
    
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>
    
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
    
               
    
                <button type="submit" class="btn btn-primary btn-block">Valider</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection