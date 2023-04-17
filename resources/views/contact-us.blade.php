@extends('master.layout')

    <!-- Section -->
    @section('title')
    HomePage
    @endsection

    @section('content') 
   <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                            Contact Us
                </div>
                <div class="card-body">
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success">
                        {{ Session::get('message_sent') }}

                    </div>
                    @endif
                    <form action="{{ route('contact-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" name="email" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">phone</label>
                            <input type="text" name="phone" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="title">Message</label>
                            <textarea type="text" name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                
            </div>

        </div>
    </div>
   </div>

          
    @endsection
    
