
@extends('master.dashboard.layout')

@section('content')

<div class="container-fluid px-4">
            


    <div class="row my-5">
        <h3 class=" mb-4 bg-white ">Messages</h3>
        <div class="col table-responsive">
            <table id="example" class="table bg-white rounded shadow-sm  table-hover ">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">message</th>
                       
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                       <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td> {{$message->phone}}</td>
                        <td> {{$message->message}}</td>
                     
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>



@endsection


