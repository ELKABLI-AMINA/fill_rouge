@extends('master.layout')

@section('title')
  About Us
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
      <img src="{{asset('img/bg.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fs-45 mt-25"><strong> Enjoy Your Vacation With Us </strong></h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste quaerat, maiores dolor voluptas est dolorem pariatur at fugit? </p>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/bg1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block ">
        <h5><strong> Enjoy Your Vacation With Us </strong></h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil pariatur ratione asperiores esse doloremque, ullam cupiditate </p>
       
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/bg3.jpg')}}" class="d-block w-100" alt="...">
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
<div class="container mt-5" >
  <h1 class="h1 text-center mb-4">À propos de nous</h1>
  <div class="row">
    <div class="col-md-6">
      <h3 class="h3 mb-3 ">« BACKSEAT SURFING Travel est une agence de voyage opérant dans le tourisme et ayant pour spécialité l’organisation des voyages à l’échelle nationale .</h3>
      <p>Nous sommes une agence de voyage fondée en 2023 avec pour objectif de proposer des voyages inoubliables à nos clients. Depuis, nous avons su gagner la confiance de nombreux voyageurs grâce à notre expertise et notre engagement à offrir des services de qualité.</p>
      <p>Notre équipe est composée de professionnels passionnés et expérimentés qui mettent tout en œuvre pour que chaque voyage soit une expérience unique et inoubliable. Nous travaillons en étroite collaboration avec nos partenaires pour vous offrir les meilleurs tarifs et les meilleures prestations.</p>
    
      <h3 class="h3 mb-3">« Nos engagements vers vos »</h3>
      <ul>
        <li>Hébergement Choisis avec soins</li>
        <li>Trajets préparés soigneusement </li>
        <li>Programme en pension complète</li>
        <li>Meilleurs Offres avec Meilleurs prix</li>
        <li>Suivi</li>
        <li>Annulation gratuite (Avant 72h)</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h3 class="h3 mb-3 ">« C’est notre spécialité … laissez-vous aller dans la musique des sons humains et bercer par sa diversité »</h3>
      <p >Montagne, forêt, sable, ciel, mer et soleil seront tous au rendez-vous afin de vous garantir un maximum de détente et de bien-être loin des tracas du quotidien.</p>
      <p>Car votre bonheur à long terme peut dépendre de votre capacité à créer un récit positif de votre vie, rejoignez la famille Yanis Travel et façonnez votre identité. Faites-vous plein de bons souvenirs et rechargez vos batteries d’énergie positive !.</p>
    
      <h3 class="h3 mb-3">« Votre service est notre honneur »</h3>
      <ul>
        <li>Service client à votre écoute</li>
        <li>Assistance 24H/24</li>
        <li>Accompagnement durant le voyage</li>
        
      </ul>
    </div>
  </div>
  
</div>






@endsection