<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title></title>
</head>

<body>
    <div class="d-flex bg-light" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">BACKSEAT SURFING</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ route('owner') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ route('/') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                         class="bi bi-house-check-fill me-2"></i>Home</a>        
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-pencil me-2"></i>Manage Store</a>
               
              
            </div>
            
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-success">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{ auth()->user()->name }}

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">mes voyages</p>
                            </div>
                        
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Réservé</p>
                            </div>
                            {{-- icon --}}
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Voyage_payé</p>
                            </div>
                          
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Voyagé_</p>
                            </div>
                            {{-- icon --}}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                   
                <div class="bg-light" id="page-content-wrapper">
                              
                                <div class="container-fluid px-4">
                                    
                    
                                    <div class="row my-5">
                                        <h3 class=" mb-4 bg-white ">Voyage</h3>
                                        <div class="col table-responsive">
                                            <table class="table bg-white rounded shadow-sm  table-hover ">
                                                <thead class="bg-dark text-white">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">name</th>
                                                        <th scope="col">description</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">logo</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($voyages as $voyage)
                                                    <tr>
                                                       <td>{{$voyage->id}}</td>
                                                        <td>{{$voyage->name}}</td>
                                                        {{-- <td>{{$voyage->description}}</td> --}}
                                                        <td> {{$voyage->prix}}</td>
                                                        <td> </td>
                                                        <td> {{$voyage->image}}</td>
                                                        <td><div class="d-flex">
                                                            
                                                            <a href="{{ route('voyage.edit', ['slug' => $voyage->slug]) }}" class="btn btn-warning">Edit</a>
                                                            <form style="border: none" action="{{ route('voyage.delete', $voyage->slug) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                               
                                                            </form>
                                                            <button class="btn btn-danger" type="submit">
                                                                Supprimer
                                                          </button>
                                                             
                                                         </div></td>
                                                       
                                                        
                                                       
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                   
                  
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>