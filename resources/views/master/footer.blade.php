<div class="container-fluid bg-dark text-light footer pt-5 mt-5">
    {{-- <div class="container-fluid py-5"> --}}
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a href="" class="btn btn-link">About Us</a>
                <a href="" class="btn btn-link">Contact Us</a>
                <a href="" class="btn btn-link">Private Policy</a>
                <a href="" class="btn btn-link">Terms $ Condition</a>
                <a href="" class="btn btn-link">FAQ $ Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="bi bi-geo-alt me-3"></i> xxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                <p class="mb-2"><i class="bi bi-telephone-fill me-3"></i> xxxxxxxxxxxxxxxxxxxxxx</p>
                <p class="mb-2"><i class="bi bi-envelope me-3"></i>info@example</p>
                    {{-- social icon --}}
                    <div class="d-flex pt-2 ">
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="bi bi-linkedin"></i>
                        </a>

                    </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white  ">Gallery</h4>
                <div class="row  g-2 pt-2">
                    <div class="col-4">
                        <img src="{{asset('img/bali-tour-packages-4706037_960_720.jpg')}}" alt="" class="img-fluid img-footer bg-light p-1">
                    </div>
                    <div class="col-4">
                        <img src="{{asset('img/bali-tour-packages-4706037_960_720.jpg')}}" alt="" class="img-fluid img-footer bg-light p-1">
                    </div>
                    <div class="col-4">
                        <img src="{{asset('img/nord.jpg')}}" alt="" class="img-fluid  img-footer bg-light p-1">
                    </div>
                    <div class="col-4">
                        <img src="{{asset('img/agafay.jpg')}}" alt="" class="img-fluid img-footer bg-light p-1">
                    </div>
                    <div class="col-4">
                        <img src="{{asset('img/dakhla.jpg')}}" alt="" class="img-fluid img-footer bg-light p-1">
                    </div>
                    <div class="col-4">
                        <img src="{{asset('img/nord.jpg')}}" alt="" class="img-fluid img-footer bg-light p-1">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
               
                <p>Our agency is the undisputed leader in the field in Morocco, offering superior quality services and innovative solutions to meet the specific needs of each client.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                        
                    @if (auth()->check() && auth()->user()->hasAgence())
                        <button class="btn btn-success ">U Applied</button>
                    @else
                        <a href="{{ route('form.agence') }}" class="btn btn-primary btn-lg active mt-2" role="button" aria-pressed="true">Join Us</a>
                    @endif
                
                        

                        
                        
                </div>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a href="" class="border-bottom">Mystery Code</a> | All Right Reserved.</div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-menu">
                        <a href="" class="">Home</a>
                        <a href="" class="">Cookies</a>
                        <a href="" class="">Help</a>
                        <a href="" class="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
