@extends('master.layout')

@section('title')
  Read more
@endsection

@section('content')
<div class="container mt-5 ">
       <div class="row gap-10">
             <div class="col-md-9">
                <div class="d-flex">
                    <button type="button" class="btn btn-primary btn-lg btn-block w-50">Détail</button>
                    <button type="button" class="btn btn-warning btn-lg btn-block w-50">L'offre comprend</button>
                </div>
                <H4 class="mt-3">Détail</H4>
                <h3 class="mt-1 text-warning" style="text-decoration: underline">  Jour de départ:</h3>
                <ul style="list-style:circle">
                  <li>Départ de Tanger devant L'Agence AjiNsafro</li>
                  <li>Départ de Rabat devant la gare Rabat Ville.</li>
                  <li>Départ de Casablanca devant la gare Casa Voyageurs.

                  </li>
                </ul>
                <h3 class="mt-1 text-warning" style="text-decoration: underline">  Jour 01:</h3>
                <ul style="list-style:circle">
                  <li>Arrivée à Bin El Ouidane.</li>
                  <li> Petit déjeuner libre.</li>
                  <li>Pause pour apprécier  la superbe nature du lac, un lieu reculé où le calme règne entre l’eau cristalline au coeur des montagnes.</li>
                  <li>Balade libre en bateau pour admirer ce fabuleux <span class="text-danger"> ( En option ) </span></li>
                  <li>Départ vers les cascades d’Ouzoud en profitant du paysage admirable tout au long du chemin.</li>
                  <li>Descendre pour apprécier les magnifiques chutes d'eau.</li>
                  <li>Découverte du cascade par radeau <span class="text-danger">( En option ) </span></li>
                  <li>Déjeuner <span class="text-danger">( Non inclus ) </span>  dans un restaurant qui se trouve face à un paysage panoramique.</li>
                  <li>Départ vers Marrakech.</li>
                  <li>Arrivée et Installation à l’hôtel 4* ( Moment de détente, douche… ) </li>
                  <li>Dîner <span class="text-primary">( Inclus ) </span> à l'hôtel. </li>
                  <li>Nuitée à l'hôtel.</li>
                </ul>
                <h3 class="mt-1 text-warning" style="text-decoration: underline">  Jour 02:</h3>
                <ul style="list-style:circle">
                  <li>Petit déjeuner complet<span class="text-primary">( Inclus ) </span> à l'hôtel. </li>
                  <li>Visite de la Koutoubia & Jemaa el-Fnaa, ..</li>
                  <li>Départ vers les Terres D'amanar.</li>
                  <li>Arrivée et Une activité libre au choix, tyrolienne ou Accro Park <span class="text-danger"> ( En option ) </span>  www.terresdamanar.com</li>
                  <li> Déjeuner libre </li>
                  <li> Retour vers Casablanca et Rabat.  </li>
                </ul>
                <h3 class="mt-1 text-primary" style="text-decoration: underline"> L'offre comprend</h3>
                <ul style="list-style:none" >
                  <li> <span class="text-primary">&#x2713;</span>Transport touristique climatisé. </li>
                  <li><span class="text-primary">&#x2713;</span>L’hébergement à l’hôtel 4* en chambre double ou triple.  </li>
                  <li><span class="text-primary">&#x2713;</span>Dîner du Samedi.</li>
                  <li><span class="text-primary">&#x2713;</span>Petit déjeuner du dimanche.</li>
                  <li><span class="text-primary">&#x2713;</span>Visite guidée.</li>
                  <li><span class="text-primary">&#x2713;</span>Assurance du transport. </li>
                  
                </ul>
                <h3 class="mt-1 text-danger" style="text-decoration: underline"> Les Options</h3>
                <ul style="list-style:none"  >
                  <li> <span class="text-danger">&cross;</span> Supplément Single : <span text-danger>+250 MAD</span>/Nuits .</li>
                  <li><span class="text-danger">&cross;</span> Bateau Bine El ouidane : <span text-danger>+25 MAD</span>/Personne . </li>
                  <li><span class="text-danger">&cross;</span>Terre D’amanar : <span text-danger>+125 MAD</span>/Personne .</li>
                  
                  
                </ul>
            </div>      
                <div  class="col-md-3 ">
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

@endsection


     