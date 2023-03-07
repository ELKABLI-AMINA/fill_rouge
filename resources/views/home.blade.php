<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <!-- google fonts -->
    <link rel="stylesheet" href="link rel="preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->

    <!-- Section -->
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
     <a href="#" class="navbar-brand p-0">
       <h1 class="text-primary m-0"> <i class="fa fa-map-marked-alt me-3"></i>Travel Agency</h1>
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targer="#">
        <span class="fa fa-bars"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="" class="nav-item nav-link">Home</a>
            <a href="" class="nav-item nav-link">About</a>
            <a href="" class="nav-item nav-link">Services</a>
            <a href="" class="nav-item nav-link">Packages</a>
            <a href="" class="nav-item nav-link">Contact</a>
            <a href="" class="nav-item nav-link">Register</a>

        </div>
     </div>
        </nav>
    <div class="container-fluid position-relative p-0">
        <div style='background: url({{asset('img/amina.jpg')}}); background-position: center center ;
        background-repeat: no-repeat;
        background-size: cover;' class="container-fluid bg-primary py-5 mb-5 hero-header">
           <div class="container py-5">
                <div class="row justify-content-center py-5">
                  <div class="  col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="  display-3 text-white mb-3">Enjoy Your Vacation With Us</h1>
                        <P class="fs-4 text-white mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente, qui quibusdam molestiae ad, aut ipsam inventore praesentium temporibus explicabo illum officia, nam cum totam neque ab quidem natus voluptates!</P>
                        <div class="position-relative w-75 mx-auto">
                            <!-- input box -->
                            <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5 " placeholder="Eg:Tanger">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top:7px;">Search</button>


                        </div>
                  </div>
                </div>
             </div>
        </div>
    </div>
    <!-- about section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" style="min-height: 400px;">
                 <div class="position-relative h-100">
                    <img src="{{ asset('img/amina.jpg') }}" alt="" style="object-fit:cover;" class="img-fluid position-absolute w-100 h-100">
                 </div>   
                </div>
                <div class="col-lg-6">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Travel</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <div class="btn btn-primary py-3 px-5 mt-2"> Read More</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Destination section --}}
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class=".col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/about.jpg')}}" alt="" class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF </div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">MARRAKECH </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/Akchour.jpg')}}" alt=""  class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">14% OFF </div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">AKCHOUR </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/Merzouga.jpg')}}" alt=""  class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">14% OFF </div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">MERZOUGA </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                     <a href="" class="d-block position-relative h-100 overflow-hidden">
                    <img src="{{asset('img/tanger.jpg')}}" alt="" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover">
                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Tanger</div>
                </a></div>
            </div>
        </div>
    </div>
    {{-- package --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                   <div class=" .package-item">
                    <div class="overflow-hidden">
                        <img src="{{asset('img/tanger.jpg')}}" alt="" class="img-fluid">
                    </div>
                      <div class="d-flex border-bottom">
                         <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-map-marker-alt text-primary me-2"></i> Tanger
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-map-calender text-primary me-2"></i> 3 days
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-map-user text-primary me-2"></i> 2 Pers
                         </small>
                      </div>
                   </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
    <script src="main.js"></script>
</body>
</html>