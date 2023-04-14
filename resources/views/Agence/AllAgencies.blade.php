{{-- @extends('master.layout')

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


        
            
    @endsection --}}
    @extends('master.dashboard.layout')

    @section('content')

    <div class="container-fluid px-4">
                

        <div class="row my-5">
            <h3 class=" mb-4 bg-white ">Agences</h3>
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
                        @foreach ($agences as $agence)
                        <tr>
                           <td>{{$agence->id}}</td>
                            <td>{{$agence->name}}</td>
                            <td>{{ Str::limit($agence->description, 50) }}</td>
                            <td> {{$agence->address}}</td>
                            <td> {{$agence->logo}}</td>
                         
                            <td>
                            <div class="d-flex bottom  ">
                              

                                    <form action="{{ route('Agence.delete', $agence->slug) }}" method="POST" class="border-0 " style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  "><i class="bi bi-trash"></i> Supprimer</button>
                                    </form>

                                 </td>
                            </div>     
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>

@endsection


  