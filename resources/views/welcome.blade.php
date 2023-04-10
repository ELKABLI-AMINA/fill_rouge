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
               
                 <img src="{{asset('img/2c775re-1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block mb-5">
                        <h5 class="fs-45 mt-25"><strong> Enjoy Your Vacation With Us </strong></h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quaerat, maiores dolor voluptas est dolorem pariatur at fugit? </p>
                            
                     </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/Life-in-Istanbul-is-Istanbul-a-good-place-to-live-work-and-study-new4.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-5">
              <h5><strong> Enjoy Your Vacation With Us </strong></h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil pariatur ratione asperiores esse doloremque, ullam cupiditate </p>
             
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/aa.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-5">
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
   
    <div class="container-xxl  ">
        <section class="gallery ">
            <h1 class="text-center mb-5">Travelling Gallery</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/week-end-amsterdam-fleurs.jpg')}}" alt="">
                           <h4>Amsterdam</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/tanger-maroc.jpg.1920x0_q85.jpg')}}" alt="">
                           <h4>Tanger</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/manhattan-1674404_960_720.jpg')}}" alt="">
                           <h4>New York</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/shutterstockRF_394067971.jpg')}}" alt="">
                           <h4>Istanbul</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/arch-6356637_960_720.jpg')}}" alt="">
                           <h4>Paris</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-box">
                           <img src="{{asset('img/morocco-2746495_960_720.jpg')}}" alt="">
                           <h4>Marrakech</h4>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>
        
    </div>

    
    {{-- package --}}
    <div class="container-xxl py-3 ">
        <div class="container">
            <div class="text-center" >
                <h1 class=" fw-bold ">Best tour Package offers for You</h1>
            </div>
            <div class="row g-4 ">
                @foreach ($voyages as $voyage )
                    <div class="col-lg-4 col-md-6 mt-5">
                            <div class=" .package-item">
                            
                                    <div class="gallery-boxx">
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
            @foreach ($ratings as $rating )
            <div class="col-md-4">
                <div class="user-review text-center">
                   <p>{{!! $rating->comment !!}}</p>
                   <h5>{{ $rating->user_name }}</h5> 
                
                </div>
              
            
            </div>
            @endforeach
        </div>
       </div>
    
      </section>   
@endsection

   