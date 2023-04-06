
@extends('master.layout')

<!-- Section -->
@section('title')
Register
@endsection

@section('content') 

<div class="container">
  
  <div class="row justify-content-center ">
                
              <div class="col-md-6 ">
                <div class="card  ">
                  <div class="card-header  ">Create Account</div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('registerUser') }}">
                      @csrf
          
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"  required autofocus>
                      </div>
          
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"  required>
                      </div>
          
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                      </div>
          
                      <div class="form-group">
                        <label for="phone_number">Phone_Number</label>
                        <input type="tel" name="phone_number" id="phone_number" class="form-control"  required>
                      </div>
          
                      <button type="submit" class="btn btn-primary btn-block">Valider</button>
                    </form>
                  </div>
                </div>
              </div>
    </div>
</div>
@endsection

