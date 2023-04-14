@extends('master.layout')

    <!-- Section -->
    @section('title')
    Show-Agence
    @endsection

    @section('content') 
  
         <div class="row my-5 ">
                <div class="col-md-12">
                        <div class="row">
                                 <div class="col-md-12 mb-2" >
                                      <div class="card m-auto" style="width:33rem">
                                                <img src="{{ asset('uploads/'.$agence['logo']) }}" class="card-img-top" alt="...">
                                                <div class="card-body h-100">
                                                <h5 class="card-title">{{ $agence['name'] }}</h5>
                                                <p class="card-text">{{ $agence['description'] }}</p>
                                                <p class="card-text">{{ $agence['address'] }}</p>
                                                </div>
                                                {{-- @if(auth()->user()->id == $agence->user_id) --}}
                                                <div >
                                                                {{-- <a style="display: inline-block;width:100px;height:40px" href="{{ route('Agence.edit', $agence->slug) }}" class="btn btn-warning ">Modifier</a>   --}}
                                                                <form style="border: none;height:40px" action="{{ route('Agence.delete', $agence->slug) }}" method="POST" >
                                                                @csrf
                                                                @method('DELETE')
                                                                
                                                                <button style="display: inline-block;width:100px" class="btn btn-danger   " type="submit">
                                                                                Supprimer
                                                                </button>
                                                                </form>  
                                                </div>
                                                {{-- @endif --}}
                                      </div> 
                                      
                                      
                                      
                                
                                 </div>              
                      </div> 
                                 
                </div>
         </div> 
         
      
            
    @endsection