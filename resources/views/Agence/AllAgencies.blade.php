@extends('master.layout')

    <!-- Section -->
    @section('title')
    AgenciesPage
    @endsection

    @section('content') 
  
         <div class="row my-5 ">
                <div class="col-md-8">
                       
                        <div class="row">
                                @foreach ($agences as $agence )
                                 <div class="col-md-4 mb-2">
                                                <div class="card h-100 " style="width: 18rem;">
                                                                <img src="{{asset('uploads/'.$agence['logo'])   }}" class="card-img-top" alt="...">
                                                                <div class="card-body">
                                                                <h5 class="card-title">{{ $agence['name'] }}</h5>
                                                                <p class="card-text">{{ $agence['description'] }}</p>
                                                                <p class="card-text">{{ $agence['address'] }}</p>
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
         </div> 
            
    @endsection