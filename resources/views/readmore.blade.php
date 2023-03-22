@extends('master.layout')

@section('title')
  Read more
@endsection

@section('content')
<div class="container ">
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

 
@endsection