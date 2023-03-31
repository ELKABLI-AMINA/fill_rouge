

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <title> Demande</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
               <i class="bi bi-globe-central-south-asia me-2"></i>Backseat Surfing</div>
            <div class="list-group list-group-flush my-3 "  >
                <a href="#" class="list-group-item list-group-item-action fw-bold">
                    <i  class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action  fw-bold">
                   <i class="bi bi-airplane  me-2"></i>Tour Packages</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold">
                    <i class="bi bi-person me-2"></i>Manage Users</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Manage Booking</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Manage Enquiries</a>
                 <a href="{{ route('demande.agence') }}" class="list-group-item list-group-item-action fw-bold"><i
                                class="fas fa-comment-dots me-2"></i>Demandes</a>   
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="bg-light" id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light  bg-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-success">Dashboard</h2>
                </div>

               
            </nav>

            <div class="container-fluid px-4">
                

                <div class="row my-5">
                    <h3 class=" mb-4 bg-white ">Demandes</h3>
                    <div class="col table-responsive">
                        <table class="table bg-white rounded shadow-sm  table-hover ">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">logo</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($demandes as $demande)
                                <tr>
                                   <td>{{$demande->id}}</td>
                                    <td>{{$demande->name}}</td>
                                    <td>{{$demande->description}}</td>
                                    <td> {{$demande->address}}</td>
                                    <td> {{$demande->logo}}</td>
                                    <td>{{
                                                $demande->status==0 ? 'Pending'
                                                : ( $demande->status==1 ? 'Accepted' : 'Rejected')

                                }}</td>
                                    <td></td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
