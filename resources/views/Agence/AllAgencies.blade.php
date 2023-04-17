
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


  