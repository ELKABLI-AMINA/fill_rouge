@extends('master.layout')

    <!-- Section -->
    @section('title')
    Travel
    @endsection

    @section('content') 
    <div class="container-fluid position-relative pt-2">
        <div style='background: url({{asset('img/bg.jpg')}}); background-position: center center ;
        background-repeat: no-repeat;
        background-size: cover;' class="container-fluid bg-success py-5 mb-5 hero-header">
           <div class="container py-5">
                <div class="row justify-content-center py-5">
                  <div class="  col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="  display-3 text-white mb-3">Enjoy Your Vacation With Us</h1>
                        <P class="fs-4 text-white mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente, qui quibusdam molestiae ad, aut ipsam inventore praesentium temporibus explicabo illum officia, nam cum totam neque ab quidem natus voluptates!</P>
                        <div class="position-relative w-75 mx-auto">
                            <!-- input box -->
                            <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5 " placeholder="Eg:Tanger">
                            <button type="button" class="btn btn-success rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top:7px;">Search</button>
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
                <div class="col-lg-6 " style="min-height: 400px;">
                 <div class="position-relative h-100">
                    <img src="{{ asset('img/amina.jpg') }}" alt="" style="object-fit:cover;" class="img-fluid position-absolute w-100 h-100">
                 </div>   
                </div>
                <div class="col-lg-6">
                    <h6 class="section-title bg-white text-start text-success pe-3">About us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-success">Travel</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit possimus inventore ipsa facere qui, debitis maxime deserunt expedita ducimus cumque. Voluptates atque vitae corrupti numquam temporibus sint tenetur beatae quo. </p>
                    <div class="btn btn-success py-3 px-5 mt-2"> Read More</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Destination section --}}
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-success px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3 ">
                <div class=".col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/hociema.jpg')}}" alt="" class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF </div>
                                <div class="bg-white text-success fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">MARRAKECH </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/hociema.jpg')}}" alt=""  class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">14% OFF </div>
                                <div class="bg-white text-success fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">AKCHOUR </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="{{asset('img/hociema.jpg')}}" alt=""  class="fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">14% OFF </div>
                                <div class="bg-white text-success fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">MERZOUGA </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                     <a href="" class="d-block position-relative h-100 overflow-hidden">
                    <img src="{{asset('img/hociema.jpg')}}" alt="" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover">
                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                    <div class="bg-white text-success fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Tanger</div>
                </a></div>
            </div>
        </div>
    </div>
    {{-- package --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-success px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6">
                   <div class=" .package-item">
                    <div class="overflow-hidden">
                        <img src="{{asset('img/hociema.jpg')}}" alt="" class="img-fluid">
                    </div>
                      <div class="d-flex border-bottom">
                         <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-map-marker-alt text-success me-2"></i> AL HOCIEMA
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="bi bi-calendar  text-success me-2"></i> 4 days
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="bi bi-person  text-success me-2"></i>1 Pers
                         </small>
                      </div>
                      <div class="text-center p-4">
                        <h3 class="mb-0">2650.00 DH</h3>
                        <div class="mb-3">
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                        </div>
                        
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="" class="btn btn-sm btn-success px-3" style="border-radius:30px;">Read More</a>

                    </div>
                      </div>
                   </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" .package-item">
                     <div class="overflow-hidden">
                         <img src="{{asset('img/DAKHLA.jpg')}}" alt="" class="img-fluid">
                     </div>
                       <div class="d-flex border-bottom">
                          <small class="flex-fill text-center border-end py-2">
                             <i class="fa fa-map-marker-alt text-success me-2"></i> DAKHLA
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-calendar  text-success me-2"></i> 5 days
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-person  text-success me-2"></i>1 Pers
                          </small>
                       </div>
                       <div class="text-center p-4">
                         <h3 class="mb-0">5890.00 DH</h3>
                         <div class="mb-3">
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                         </div>
                         
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                     <div class="d-flex justify-content-center mb-2">
                         <a href="" class="btn btn-sm btn-success px-3" style="border-radius: 30px;">Read More</a>
 
                     </div>
                       </div>
                    </div>
 
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <div class=" .package-item">
                     <div class="overflow-hidden ">
                         <img src="{{asset('img/agafay.jpg')}}" alt="" class="img-fluid">
                     </div>
                       <div class="d-flex border-bottom">
                          <small class="flex-fill text-center border-end py-2">
                             <i class="fa fa-map-marker-alt text-success me-2"></i> MARRAKECH – AGAFAY
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-calendar  text-success me-2"></i> 3 days
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-person  text-success me-2"></i>1 Pers
                          </small>
                       </div>
                       <div class="text-center p-4">
                         <h3 class="mb-0">1800.00 DH</h3>
                         <div class="mb-3">
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                         </div>
                         
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                     <div class="d-flex justify-content-center mb-2">
                         <a href="" class="btn btn-sm btn-success px-3" style="border-radius: 30px;">Read More</a>

                     </div>
                       </div>
                    </div>
                 </div>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6">
                   <div class=" .package-item">
                    <div class="overflow-hidden">
                        <img src="{{asset('img/fnideq.jpg')}}" alt="" class="img-fluid">
                    </div>
                      <div class="d-flex border-bottom">
                         <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-map-marker-alt text-success me-2"></i> M’DIQ – TETOUAN – F’NIDEK
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="bi bi-calendar  text-success me-2"></i> 3 days
                         </small>
                         <small class="flex-fill text-center border-end py-2">
                            <i class="bi bi-person  text-success me-2"></i>1 Pers
                         </small>
                      </div>
                      <div class="text-center p-4">
                        <h3 class="mb-0">1900.00 DH</h3>
                        <div class="mb-3">
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                             <small class="fa fa-star text-success"></small>
                        </div>
                        
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="" class="btn btn-sm btn-success px-3" style="border-radius:30px;">Read More</a>

                    </div>
                      </div>
                   </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" .package-item">
                     <div class="overflow-hidden">
                         <img src="{{asset('img/nord.jpg')}}" alt="" class="img-fluid">
                     </div>
                       <div class="d-flex border-bottom">
                          <small class="flex-fill text-center border-end py-2">
                             <i class="fa fa-map-marker-alt text-success me-2"></i> ASSILAH – TANGER – CHEFCHAOUEN
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-calendar  text-success me-2"></i> 3 days
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-person  text-success me-2"></i>1 Pers
                          </small>
                       </div>
                       <div class="text-center p-4">
                         <h3 class="mb-0">1200.00 DH</h3>
                         <div class="mb-3">
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                         </div>
                         
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                     <div class="d-flex justify-content-center mb-2">
                         <a href="" class="btn btn-sm btn-success px-3" style="border-radius: 30px;">Read More</a>
 
                     </div>
                       </div>
                    </div>
 
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <div class=" .package-item">
                     <div class="overflow-hidden ">
                         <img src="{{asset('img/yaacoob.jpg')}}" alt="" class="img-fluid">
                     </div>
                       <div class="d-flex border-bottom">
                          <small class="flex-fill text-center border-end py-2">
                             <i class="fa fa-map-marker-alt text-success me-2"></i>WEEK-END IFRANE – FÈS – MOULAY YAACOUB
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-calendar  text-success me-2"></i> 3 days
                          </small>
                          <small class="flex-fill text-center border-end py-2">
                             <i class="bi bi-person  text-success me-2"></i>1 Pers
                          </small>
                       </div>
                       <div class="text-center p-4">
                         <h3 class="mb-0">950.00 DH</h3>
                         <div class="mb-3">
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                              <small class="fa fa-star text-success"></small>
                         </div>
                         
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident expedita possimus saepe quisquam officia minima non eius laudantium iusto. Id ipsum cum blanditiis ea, enim officia illo omnis in?</p>
                     <div class="d-flex justify-content-center mb-2">
                         <a href="" class="btn btn-sm btn-success px-3" style="border-radius: 30px;">Read More</a>

                     </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
        
    </div>
     {{-- booking Section --}}
     <div class="container-xxl py-5">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae iste non nulla sint sunt quae qui, dolore hic architecto ex perferendis debitis ducimus cumque, laboriosam doloremque ipsam fuga repudiandae iure?</p>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad quas eveniet distinctio ullam temporibus mollitia veniam? Iusto quas perferendis unde repellat mollitia in sed nam deleniti explicabo reprehenderit, laudantium veritatis?</p>
                        <a href="" class="btn btn-outline-light py-3 px-5 mt-2">Read More</a>
                    </div>

                </div>

            </div>

        </div>

     </div>


    
@endsection

   