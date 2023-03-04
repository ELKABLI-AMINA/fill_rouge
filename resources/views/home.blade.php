<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <!-- google fonts -->
    <link rel="stylesheet" href="link rel="preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->

    <!-- Section -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
           <div class="container py-5">
                <div class="row justify-content-center py-5">
                  <div class="  col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="  display-3 text-white mb-3">Enjoy Your Vacation With Us</h1>
                        <P class="fs-4 text-white mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sapiente, qui quibusdam molestiae ad, aut ipsam inventore praesentium temporibus explicabo illum officia, nam cum totam neque ab quidem natus voluptates!</P>
                        <div class="position-relative w-75 mx-auto">
                            <!-- input box -->
                            <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5 " placeholder="Eg:Tanger">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top:7px;">Search</button>


                        </div>
                  </div>
                </div>
             </div>
        </div>
    </div>
    <!-- about section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" style="min-height: 400px;">
                 <div class="position-relative h-100">
                    <img src="{{ asset('img/bg-1.png') }}" alt="" style="object-fit:cover;" class="img-fluid position-absolute w-100 h-100">
                 </div>   
                </div>
                <div class="col-lg-6">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About us</h6>

                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
    <script src="main.js"></script>
</body>
</html>