
@extends('master.layout')

<!-- Section -->
@section('title')
Register
@endsection

@section('content') 


<body>

 

        <div class="container d-flex justify-content-center align-items-center min-vh-100">
          <div class="row border rounded-5 p-3 bg-white shadow box-area">
                  <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: ">
                      <div class="featured-image mb-3">
                        <img src="https://cdn.pixabay.com/photo/2017/04/05/01/13/trip-2203682_960_720.jpg" class="img-fluid" style="width: 800px;">
                      </div>
                      <p class="text-dark fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                      <small class="text-dark text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced agents on this platform..</small>
                  </div> 
                    
                  <div class="col-md-6 right-box">
                      <div class="row align-items-center">
                            <div class="header-text mb-4">
                                <h2>Hello,Again</h2>
                                <p>We are happy to have you back.</p>
                            </div>
                          <form method="POST" action="{{ route('loginUser') }}">
                              @csrf
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                                </div>
                                <div class="input-group mb-1">
                                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                                </div>
                                <div class="input-group mb-5 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="formCheck">
                                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                                    </div>
                                    <div class="forgot">
                                        <small><a href="#">Forgot Password?</a></small>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                                </div>
                          </form>  
                            
                            <div class="row">
                                <small>Don't have account? <a href="{{ route('registerUser') }}">Sign Up</a></small>
                            </div>
                      </div>
                  </div> 

                  </div>
        </div>

</body>
@endsection