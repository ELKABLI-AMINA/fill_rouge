
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
                <div style="padding-top: 56px" class="featured-image mb-3">
                  <img src="https://cdn.pixabay.com/photo/2017/04/05/01/13/trip-2203682_960_720.jpg" class="img-fluid" style="width: 800px;">
                </div>
                <p class="text-dark fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-dark text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced agents on this platform..</small>
            </div> 
              
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    
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

</body>
@endsection

