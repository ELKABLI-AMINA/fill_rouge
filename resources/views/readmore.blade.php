@extends('master.layout')
{{-- @dd($voyage) --}}
    <!-- Section -->
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
                                                                    {{-- <span >Jours</span> --}}
                                                                  </div>
                                                                  <div class="d-flex flex-column">
                                                                    <span id="heures_restantes" class="hours fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                    {{-- <span >Heures</span> --}}
                                                                  </div>
                                                                    <div class="d-flex flex-column">
                                                                      <span id="minutes_restantes" class="minutes fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                      {{-- <span >Min</span> --}}
                                                                    </div>
                                                                      <div class="d-flex flex-column">
                                                                        <span id="secondes_restantes" class="seconds fs-5 d-inline-block mx-2 text-center line-height-50 text-white bg-dark" style="width: 40px; height: 40px;"></span>
                                                                        {{-- <span >Sec</span> --}}
                                                                    </div>
                                                              </div>
                                                              <div class="card bg-success" >
                                                                <div class="card-body text-center">
                                                                  <h5 class="card-title text-white">{{ $voyage->prix }}:00DH</h5>
                                                                  <a href="{{ route('soumettre.commande', $voyage->id) }}"  id="bouton_reservation" class="btn btn-success rounded-pill border-5 border-white mt-4 ">Je reserve</a>
                                                                </div>
                                          
                                                              </div>
                                                              <div class="text-center mt-3"><span class="text-success">Valeur:</span>{{ $voyage->prix }}:00dh</div>
                                                              <div class="text-center "><span class="text-success">Remise:</span>30%</div>
                                                              <div class="text-center "><span class="text-success">Economie:</span>300:00dh</div>
                                                              
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
    document.getElementById('bouton_reservation').style.display = 'block';

  } else {
    // Arrêter le chronomètre lorsque le temps est écoulé
    clearInterval(counter);
    document.getElementById('bouton_reservation').style.display = 'none';

  }
}

// Appel initial de la fonction pour mettre à jour le temps restant
updateTimeRemaining();

// Appel périodique de la fonction toutes les secondes
const counter = setInterval(updateTimeRemaining, 1000);





    </script> 
         
    @endsection