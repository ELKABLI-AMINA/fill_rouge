
@extends('master.Odashboard.layout')
@section('content')

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
                            <th  scope="col" class="text-truncate">description</th>
                            <th scope="col">Address</th>
                            <th scope="col">logo</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voyages as $voyage)
                        <tr>
                           <td>{{$voyage->id}}</td>
                            <td>{{$voyage->name}}</td>
                            <td> {{$voyage->prix}}</td>
                            <td> {{$voyage->description}}</td>
                            <td> {{$voyage->image}}</td>
                            <td><div class="d-flex">
                                
                                <a href="{{ route('voyage.edit', ['slug' => $voyage->slug]) }}" class="btn btn-warning">Edit</a>
                                <form style="border: none" action="{{ route('voyage.delete', $voyage->slug) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">
                                        Supprimer
                                  </button>
                                   
                                </form>
                                
                                 
                             </div></td>
                             <td>
                                @if ($voyage->date_fin_reservation <= now())
                                    Expiré
                                @else
                                    Actif
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


</div>

@endsection