
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
    <title> Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
               <i class="bi bi-globe-central-south-asia me-2"></i>Backseat Surfing</div>
            <div class="list-group list-group-flush my-3 "  >
                <a href="dashboard" class="list-group-item list-group-item-action fw-bold">
                    <i  class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action  fw-bold">
                    <i class="bi bi-airplane-fill me-2"></i>Tour Packages</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold">
                    <i class="bi bi-person-fill me-2"></i>Manage Users</a>
                <a href="Mbooking" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Manage Booking</a>
                <a href="MEnquiries" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Manage Enquiries</a>
                <a href="#" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-gift me-2"></i>Manage Pages</a>
                <a href="MIssues" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Manage Issues</a>
                 <a href="{{ route('demande.agence') }}" class="list-group-item list-group-item-action fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Demandes</a>        
               
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class=" bg-light" id="page-content-wrapper">
            <nav style="display:flex" class=" d-flex justify-between   bg-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                

                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <a href="{{ route('dashboard') }}">
                                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                    </a>
                                </div>
                
                                <!-- Navigation Links -->
                                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-nav-link>
                                </div> --}}
                            </div>
                
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>
                
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                
                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Responsive Navigation Menu -->
                    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </div>
                
                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                
                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>
                
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white  shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Booking</p>
                            </div>
                            <i class="bi bi-journal-text fs-1 primary-text border rounded-full secondary-bg p-3" style="color: #009d63"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4</h3>
                                <p class="fs-5">Users</p>
                            </div>
                            <i
                             class="bi bi-person fs-1 primary-text border rounded-full secondary-bg p-3" style="color: #009d63"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">38</h3>
                                <p class="fs-5">Enquiries</p>
                            </div>
                            <i class="bi bi-chat-square-text fs-1 primary-text border rounded-full secondary-bg p-3" style="color: #009d63"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">Total Packages</p>
                            </div>
                            <i class="bi bi-airplane  fs-1 primary-text border rounded-full secondary-bg p-3" style="color: #009d63"></i>
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
