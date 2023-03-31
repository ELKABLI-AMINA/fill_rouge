
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <a class="navbar-brand text-uppercase font-weight-bold  text-success ms-5" href="#">Backseat Surfing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto me-5 ">
          <li class="nav-item">
            <a class="nav-link text-success" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="#">Packages</a>
          </li>
          @if(! Auth::check())
          <li class="nav-item">
            <a class="nav-link text-success" href="">Register</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="btn btn-success" href="#">Réserver maintenant</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
