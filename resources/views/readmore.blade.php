@extends('master.layout')

    @section('title')
    ReadMore
    @endsection

    @section('content') 
       
         <div class="row container mx-auto ">
                <div class="col-md-12">
                        <div class="row">
                                 <div class="col-md-9  " >
                                    <div class="row ">
                                         <div class="col-md-9 " >
                                                  

                                                   <div style="width:33rem;  ">
                                                
                                                     <div class="card-body h-100  " >
                                                        <div>{{!! $voyage->description!!}}</div>
                                                      </div>
                                                
                                                  </div> 
                                           </div  >    
                                              <div class="col-md-3 mt-5 bg-light h-50 "  >

                                                            <div class="text-center "  >
                                                          <span class="">Temps Restant</span>
                                                         

                                                          </div>
                                                            <div class=" d-flex justify-content-center align-items-center fw-bold my-3">
                                                                  <div class="d-flex flex-column">
                                                                    <span id="jours_restants" class="days fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>

                                                                  </div>
                                                                  <div class="d-flex flex-column">
                                                                    <span id="heures_restantes" class="hours fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                 
                                                                  </div>
                                                                    <div class="d-flex flex-column">
                                                                      <span id="minutes_restantes" class="minutes fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                    
                                                                    </div>
                                                                      <div class="d-flex flex-column">
                                                                        <span id="secondes_restantes" class="seconds fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                     
                                                                    </div>
                                                              </div>
                                                              {{-- <p>Il reste {{ $placesRestantes }} places disponibles pour ce voyage.</p> --}}
                                                              <div class="card bg-success" >
                                                                <div class="card-body text-center">
                                                                  <h5 class="card-title text-white">{{ $voyage->prix }}:00DH</h5>
                                                                  <a href="{{ route('soumettre.commande', $voyage->id) }}"  id="bouton_reservation" class="btn btn-success rounded-pill border-5 border-white mt-4 ">Je reserve</a>
                                                                </div>
                                          
                                                              </div>
                                                           
                                                              <div class="card bg-success mt-4" >
                                                                <div class="card-body text-center">
                                                                
                                                                  <a href="{{ route('vote', $voyage->id) }}"  id="bouton_reservation" class="btn btn-success rounded-pill border-5 border-white " >Write Review</a>
                                                                </div>
                                          
                                                              </div>                   
                                          </div>      
                                     </div> 
                                  </div>
                                    

                                    <div  class="col-md-3 mt-5 ">
                                        <div class="card text-white  mb-3" style="max-width: 18rem;">
                                          
                                          <div class="card-body">
                                            <img class="card-img-top border-0" src="{{ asset('img/IMG-20230405-WA0000.jpg') }}" alt="">
                                          </div>
                                        </div>
                                        <div class="card text-white mb-3" style="max-width: 18rem;">
                                       
                                          <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('img/IMG-20230405-WA0001.jpg') }}" alt="">
                                          </div>
                                        </div>
                                        <div class="card text-white  mb-3" style="max-width: 18rem;">
                                          
                                          <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('img/IMG-20230405-WA0002.jpg') }}" alt="">
                                          </div>
                                        </div>
                                        <div class="card text-white mb-3" style="max-width: 18rem;">
                                          
                                          <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('img/IMG-20230405-WA0005.jpg') }}" alt="">
                                          </div>
                                        </div>
                                        <div class="card text-white mb-3" style="max-width: 18rem;">
                                          
                                          <div class="card-body">
                                            <img class="card-img-top" src="{{ asset('img/IMG-20230405-WA0004.jpg') }}" alt="">
                                          </div>
                                        </div>
                                        <div class="card text-white  mb-3" style="max-width: 18rem;">
                                          <img class="card-img-top" src="{{ asset('img/IMG-20230405-WA0006.jpg') }}" alt="">
                                          <div class="card-body">
                      
                                          </div>
                                        </div>
                                        
                                        
                                      </div>           
                      </div> 
                                 
                </div>
         </div> 
         
   
   
         <script>
          const dateFinReservation = new Date("{{ $voyage->date_fin_reservation }}");
          function updateTimeRemaining() {
            const tempsRestant = dateFinReservation - new Date();
            if (tempsRestant > 0) {
              const jours = Math.floor(tempsRestant / (1000 * 60 * 60 * 24));
              const heures = Math.floor((tempsRestant % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              const minutes = Math.floor((tempsRestant % (1000 * 60 * 60)) / (1000 * 60));
              const secondes = Math.floor((tempsRestant % (1000 * 60)) / 1000);
              document.getElementById('jours_restants').innerText = jours;
              document.getElementById('heures_restantes').innerText = heures;
              document.getElementById('minutes_restantes').innerText = minutes;
              document.getElementById('secondes_restantes').innerText = secondes;


            } else {
               document.getElementById('jours_restants').innerText = '0';
                document.getElementById('heures_restantes').innerText = '0';
                document.getElementById('minutes_restantes').innerText = '0';
                document.getElementById('secondes_restantes').innerText = '0';
              
              clearInterval(counter);


            }
          }
          // Appel initial de la fonction pour mettre à jour le temps restant
          updateTimeRemaining();
          // Appel périodique de la fonction toutes les secondes
          const counter = setInterval(updateTimeRemaining, 1000);
              </script>
   
    @endsection