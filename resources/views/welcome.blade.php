@extends('master.layout')

    <!-- Section -->
    @section('title')
    HomePage
    @endsection

    @section('content') 
  
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
               
                 <img src="{{asset('img/beach-6517214_960_720.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-45 mt-25"><strong> Enjoy Your Vacation With Us </strong></h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quaerat, maiores dolor voluptas est dolorem pariatur at fugit? </p>
                            
                     </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/bali-tour-packages-4706037_960_720.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
              <h5><strong> Enjoy Your Vacation With Us </strong></h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil pariatur ratione asperiores esse doloremque, ullam cupiditate </p>
             
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/aa.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><strong> Enjoy Your Vacation With Us </strong></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At facilis, non omnis accusantium a ducimus maxime praesentium rem </p>
             
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- about section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 " style="min-height: 400px;">
                 <div class="position-relative h-100">
                    <img src="{{ asset('img/couple-3852277_960_720.jpg') }}" alt="" style="object-fit:cover;" class="img-fluid position-absolute w-100 h-100">
                 </div>   
                </div>
                <div class="col-lg-6">
                    
                    <h1 class="mb-4">Welcome to <span class="text-success">Backseat Surfing</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <a class="btn btn-md btn-success px-3" href="{{ route('about') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Destination section --}}
   
    <div class="container-xxl py-5">
        <section class="gallery ">
            <h1 class="text-center mb-5">Travelling Gallery</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/nord.jpg')}}" alt="">
                           <h4>Le Nord</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/hociema.jpg')}}" alt="">
                           <h4>Al Hociema</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/dakhla.jpg')}}" alt="">
                           <h4>dakhla</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/agafay.jpg')}}" alt="">
                           <h4>Agafay</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/hociema.jpg')}}" alt="">
                           <h4>Al Hociema</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/hociema.jpg')}}" alt="">
                           <h4>Al Hociema</h4>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
        
    </div>

    
    {{-- package --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                
                <h1 class="mb-5 fw-bold ">Packages</h1>
            </div>
            <div class="row g-4 ">
                @foreach ($voyages as $voyage )
                    <div class="col-lg-4 col-md-6">
                            <div class=" .package-item">
                            
                                    <div class="overflow-hidden">
                                        <img src="{{asset('uploads/'.$voyage->image)}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="d-flex border-bottom">
                                        <small class="flex-fill text-center border-end py-2">
                                            <i class="fa fa-map-marker-alt text-success me-2"></i> {{ $voyage->name }}
                                        </small>
                                        <small class="flex-fill text-center border-end py-2">
                                            <i class="bi bi-calendar  text-success me-2"></i> {{ $voyage->nb_jours }} days
                                        </small>
                                        <small class="flex-fill text-center border-end py-2">
                                            <i class="bi bi-person  text-success me-2"></i>{{ $voyage->nb_personne }} Pers
                                        </small>
                                    </div>
                                    <div class="text-center p-4">
                                                <h3 class="mb-0">{{ $voyage->prix }}.00 DH</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star text-success"></small>
                                                    <small class="fa fa-star text-success"></small>
                                                    <small class="fa fa-star text-success"></small>
                                                    <small class="fa fa-star text-success"></small>
                                                    <small class="fa fa-star text-success"></small>
                                                </div>
                                        
                                                <p class="fw-bold"></p>
                                                <div class="d-flex justify-content-center mb-2">
                                                    <a href="{{ route('readmore', ['slug' => $voyage->slug]) }}" class="btn btn-sm btn-success px-3" style="border-radius:30px;">Read More</a>


                                                </div>
                                    </div>
                            </div>
                    </div>
                @endforeach
            </div>
            
        </div>
        
    </div>
    {{-- avis --}}
    <section class="users-feedback">
        <h1 class="text-center mb-5">Users Review</h1>
       <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="user-review text-center">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita commodi officia distinctio, veritatis blanditiis unde nemo quibusdam ratione, fugit mollitia nobis enim, repudiandae iusto voluptas quaerat adipisci molestias possimus exercitationem.</p>
                   <h5>ELKABLI Amina</h5> 
                   <small>Benslimane</small>
                </div>
                <img src="{{asset('img/femme2.jpg')}}" alt="">
            
            </div>
            <div class="col-md-4">
                <div class="user-review text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita commodi officia distinctio, veritatis blanditiis unde nemo quibusdam ratione, fugit mollitia nobis enim, repudiandae iusto voluptas quaerat adipisci molestias possimus exercitationem.</p>
                    <h5>ELKABLI Amina</h5> 
                    <small>Benslimane</small>
                 </div>
                 <img src="{{asset('img/femme2.jpg')}}" alt="">
            </div>
            <div class="col-md-4">
                <div class="user-review text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita commodi officia distinctio, veritatis blanditiis unde nemo quibusdam ratione, fugit mollitia nobis enim, repudiandae iusto voluptas quaerat adipisci molestias possimus exercitationem.</p>
                    <h5>ELKABLI Amina</h5> 
                    <small>Benslimane</small>
                 </div>
                 <img src="{{asset('img/femme3.jpg')}}" alt="">
            </div>
        </div>
       </div>
    
      </section>
     {{-- booking Section --}}
    {{-- <div class="container-xxl py-5">
        <div class="container"  style='background: url({{asset('img/booking.jpg')}}); background-position: center center ;
        background-repeat: no-repeat;
        background-size: cover;'>
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class=" mb-4">Online Booking</h1>
                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae iste non nulla sint sunt quae qui, dolore hic architecto ex perferendis debitis ducimus cumque, laboriosam doloremque ipsam fuga repudiandae iure?</p>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad quas eveniet distinctio ullam temporibus mollitia veniam? Iusto quas perferendis unde repellat mollitia in sed nam deleniti explicabo reprehenderit, laudantium veritatis?</p>
                        <a href="" class="btn btn-outline-light py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form action="">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" name="" id="name" placeholder=" Your Name">
                                        <label for="name">Your Name</label>

                                    </div>

                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" name="" id="name" placeholder=" Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                            
                            
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" name="" id="email" placeholder=" Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                           
                          
                                <div class="col-md-6">
                                    <div class="form-floating" id="date3">
                                        <input type="email" class="form-control bg-transparent" name="" id="datetime">
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating" id="date3">
                                        <input type="text" class="form-control bg-transparent" id="datetime">
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="" id="selected1" class="form-select bg-transparent">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-floating">
                                        <textarea  class="form-control bg-transparent" placeholder="Special Request" name="" id="message" style="height: 100px;" ></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                            
                                 </div>
                                 <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">
                                        Book Now
                                    </button>
                                 </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

     </div>
   
 
  

   
   
 </div> --}}



    
@endsection

   