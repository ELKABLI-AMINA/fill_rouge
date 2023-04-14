
@extends('master.dashboard.layout')

@section('content')
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
                        <td> </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection