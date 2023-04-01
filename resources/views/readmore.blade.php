@extends('master.layout')

@section('title')
  Read more
@endsection

@section('content')
<div class="container mt-5 ">
       <div class="row gap-10">
              <div class="col-md-7">
                     <h5>Rabat-Marrakech-Agafay-Rabat</h5>
                     <h5>3jours - 2nuits</h5>
                     <h4 class="text-success fw-2 mt-3">Jour1:Rabat-Marrakech</h4>
                     <p>06h00 Rassemblement du groupe devant l'agence xxx départ vers Marrakech. 06h00 Rassemblement du groupe devant l'agence xxx départ vers Marrakech.</p>
                     <div class="row justify-content:around">
                            <div class="col-md-8">
                                <p>
                                       Petit déjeuner au cours de la route . <br>
                                       Installation à votre l'hotel. <br>
                                       Déjeuner libre. <br>
                                       Départ pour une demi-journée de visite  <br>
                                       des monuments <span class="fw-3">Koutoubia, la Menara et la place Jamaa El Fna</span>   <br> 
                                       <span class="text-warning">Diner</span>  et nuitée à l'hotel.   
                                </p>
                            </div>
                            <div class="col-md-4 mb-5">
                                          <img src="{{ asset('img/agafay.jpg') }}"class="img-fluid " >
                            </div>

                     </div>
                     <h4 class="text-success fw-2 mt-5 mb-3">Jour2:Marrakech-Agafay</h4> 
                     <div class="row">
                            <div class="col-md-4 mb-5">
                                          <img src="{{ asset('img/agafay.jpg') }}"class="img-fluid " >
                            </div>
                            <div class="col-md-8">
                                          <p>
                                                 Départ pour Agafay . <br>
                                                 Installation au bivouac à Agafay. <br>
                                                 Déjeuner libre sur place. <br>
                                                 <span class="fw-3">En option</span>Ballade en quad  <br>
                                                 Ballade à dos de dromadaire pour assister au coucher du soleil. <br> 
                                                 <span class="text-warning">Diner</span>avec animation de la région. <br>
                                                 Nuitée au Bivouac.
                                          </p>
                            </div>
               

              

                            <h4 class="text-success fw-2 mt-5 mb-3">Jour3:Agafay-Rabat</h4> 
                            <p> <span class="text-warning"> Petit déjeuner</span> au Bivouac <br> <span class="fw-3">En option</span>Ballade en buggy.</p> 
                            <p class="mt-5">Déjeuner libre. <br> Retour à Rabat </p>
                            <h3 class="mt-3" style="text-decoration: underline">Tarifs:</h3>
                            <p style="bold">Tarif par personne en chambre double :1800 Dhs <br> Supplément logement en chanbre individuelle :950 Dhs</p>
                            <h3 class="mt-5" style="text-decoration: underline"> Le tarif comprend:</h3>
                            <ul>
                                          <li>1 nuit en hotel 4* en demi pension à Marrakech</li>
                                          <li>1 nuit en bivouac à Agafay en demi pension</li>
                                          <li>Ballade à dos de dromadaire</li>
                                          <li>Mise à disposition d'un mini bus Mercedes Sprinter Touristique avec chauffeur, carburant, frais d'autoroute <br> et de parking, ainsi que la Wifi à bord</li>
                            </ul>
                            <h3 class="mt-5" style="text-decoration: underline"> Le tarif ne comprend pas:</h3>
                            <ul>
                                          <li>Pourboires</li>
                                          <li>Les repas non mentionnés dans le programme</li>
                                          <li>Toutes dépenses à caractère personnel</li>
                                          
                            </ul>
                            <h3 class="mt-5" style="text-decoration: underline"> Notez bien:</h3>  
                            <p>les tarifs communiqués sont valables sous réserve de disponibilité, au moment de la confirmation</p>
                     </div>
              </div>
              <div  class="col-md-5 ">

                {{-- <div style="width:60%;margin:0 auto;" class="">
                     <div class="card  justify-content-center " style="width: 18rem;">
                            

                            <div class="card-body text-bg-primary" >
                            <h5 class="card-title">from <span class="fw-4">1800,00 DH</span></h5>

                            </div>
                     </div>
                     
                     <div class="card text-center " style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title text-primary">Date:</h5>
                            <p class="card-text  date"> 20-05-2023  </p>
                            </div>
                     </div>
                     
                     <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title text-primary">Adults</h5>
                            <p class="card-text"> Age +10 </p>
                            <button id="moins">-</button>
                            <span id="nombre">1</span>
                            <button id="plus">+</button>
                            </div>
                     </div>
                     <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title text-primary">Children</h5>
                            <p class="card-text"> Age 2-10 </p>
                            <button id="moins-enfants">-</button>
                            <span id="nombre-enfants">1</span>
                            <button id="plus-enfants">+</button>
                            </div>
                     </div>
                     <div class="card text-center " style="width: 18rem;">
                            <div class="card-body">
                            <button type="submi" class="btn btn-primary btn-lg">BOOK NOW</button>
                            </div>
                     </div>

                     </div>
                </div> --}}
                <form action="" method="POST">
                     @csrf
                     <div class="form-group">
                       <label for="destination">Destination:</label>
                       <input type="text" class="form-control" id="destination" name="destination">
                     </div>
                     <div class="form-group">
                       <label for="date">Date:</label>
                       <input type="date" class="form-control" id="date" name="date">
                     </div>
                     <div class="form-group">
                       <label for="nombre-adultes">Nombre d'adultes:</label>
                       <div class="input-group">
                         <div class="input-group-prepend">
                           <button type="button" class="btn btn-secondary" id="moins-adultes">-</button>
                         </div>
                         <input type="number" class="form-control" id="nombre-adultes" name="nombre_adultes" value="1">
                         <div class="input-group-append">
                           <button type="button" class="btn btn-secondary" id="plus-adultes">+</button>
                         </div>
                       </div>
                     </div>
                     <div class="form-group">
                       <label for="nombre-enfants">Nombre d'enfants:</label>
                       <div class="input-group">
                         <div class="input-group-prepend">
                           <button type="button" class="btn btn-secondary" id="moins-enfants">-</button>
                         </div>
                         <input type="number" class="form-control" id="nombre-enfants" name="nombre_enfants" value="0">
                         <div class="input-group-append">
                           <button type="button" class="btn btn-secondary" id="plus-enfants">+</button>
                         </div>
                       </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Réserver</button>
                   </form>
                   
              </div>
       </div>

<script>
       // Récupérer les éléments HTML
       var nombreElement = document.querySelector('#nombre');
       var moinsButton = document.querySelector('#moins');
       var plusButton = document.querySelector('#plus');
       
       // Définir une fonction pour incrémenter le nombre
       function incrementerNombre() {
         var nombre = parseInt(nombreElement.textContent);
         nombre++;
         nombreElement.textContent = nombre;
       }
       
       // Définir une fonction pour décrémenter le nombre
       function decrementerNombre() {
         var nombre = parseInt(nombreElement.textContent);
         if (nombre > 1) {
           nombre--;
           nombreElement.textContent = nombre;
         }
       }
       
       // Ajouter un écouteur d'événement pour le clic sur le bouton 'moins'
       moinsButton.addEventListener('click', decrementerNombre);
       
       // Ajouter un écouteur d'événement pour le clic sur le bouton 'plus'
       plusButton.addEventListener('click', incrementerNombre);
       



       var nombreElement = document.querySelector('#nombre-enfants');
       var moinsButtonC = document.querySelector('#moins-enfants');
       var plusButtonC = document.querySelector('#plus-enfants');
       
       // Définir une fonction pour incrémenter le nombre
       function incrementerNombre() {
         var nombre = parseInt(nombreElement.textContent);
         nombre++;
         nombreElement.textContent = nombre;
       }
       
       // Définir une fonction pour décrémenter le nombre
       function decrementerNombre() {
         var nombre = parseInt(nombreElement.textContent);
         if (nombre > 1) {
           nombre--;
           nombreElement.textContent = nombre;
         }
       }
       
       // Ajouter un écouteur d'événement pour le clic sur le bouton 'moins'
       moinsButtonC.addEventListener('click', decrementerNombre);
       
       // Ajouter un écouteur d'événement pour le clic sur le bouton 'plus'
       plusButtonC.addEventListener('click', incrementerNombre);


       </script>
@endsection


     