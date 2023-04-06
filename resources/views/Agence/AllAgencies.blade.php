@extends('master.layout')

    <!-- Section -->
    @section('title')
    AgenciesPage
    @endsection

    @section('content') 
       
      
    <div class="container">
        <div class="row justify-content-between mx-5 mt-5">
            @foreach ($agences as $agence)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('uploads/'.$agence->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $agence->name }}</h5>
                            <p class="card-text">{{ $agence->description }}</p>
                            <p class="card-text">{{ $agence->address }}</p>
                            <a href="{{ route('show.agence', ['slug'=>$agence->slug]) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center my-4">
            {{ $agences->links() }}
        </div>
    </div>


        
            
    @endsection