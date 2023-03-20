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
 <div class="container mt-5" style=" max-width: 960px;margin: 0 auto; ">
  <h1 class="h1 text-center mb-4">À propos de nous</h1>
  <div class="row">
    <div class="col-md-6">
      <h3 class="h3 text-center mb-3 ">Notre histoire</h3>
      <p>Nous sommes une agence de voyage fondée en 2005 avec pour objectif de proposer des voyages inoubliables à nos clients. Depuis, nous avons su gagner la confiance de nombreux voyageurs grâce à notre expertise et notre engagement à offrir des services de qualité.</p>
      <p>Notre équipe est composée de professionnels passionnés et expérimentés qui mettent tout en œuvre pour que chaque voyage soit une expérience unique et inoubliable. Nous travaillons en étroite collaboration avec nos partenaires pour vous offrir les meilleurs tarifs et les meilleures prestations.</p>
    </div>
    <div class="col-md-6">
      <h3 class="h3 mb-3">Nos valeurs</h3>
      <ul>
        <li>Excellence</li>
        <li>Professionnalisme</li>
        <li>Respect</li>
        <li>Engagement</li>
        <li>Innovation</li>
      </ul>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h3 class="h3 mb-3 text-center">Notre mission</h3>
      <p>Notre mission est de vous offrir des voyages sur mesure qui répondent à vos attentes et à vos envies. Nous mettons tout en œuvre pour vous offrir une expérience de voyage unique et inoubliable en vous proposant des destinations d'exception, des activités originales et des hébergements de qualité.</p>
    </div>
    <div class="col-md-6">
      <h3 class="h3 mb-3">Nos engagements</h3>
      <ul>
        <li>Respect de l'environnement</li>
        <li>Respect des cultures et des populations locales</li>
        <li>Transparence et éthique</li>
        <li>Satisfaction client</li>
        <li>Amélioration continue de nos services</li>
      </ul>
    </div>
  </div>
 </div>






@endsection