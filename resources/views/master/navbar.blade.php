
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <a class="navbar-brand text-uppercase font-weight-bold  text-success ms-5" href="{{ route('/') }}">Backseat Surfing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto me-5 ">
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('contact') }}">Contact</a>
          </li>
          @if (Auth::check() && Auth::user()->role == 1)
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('owner') }}">Dash-Owner</a>
          </li>
          @endif
          @if (Auth::check() && Auth::user()->role == 0)
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('owner') }}">Dash-Admin</a>
          </li>
          @endif
          @if(! Auth::check())
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-success" href="{{ route('login') }}">Login</a>
          </li>
          @endif
          
          
          
        </ul>
      </div>
    </div>
  </nav>
  
