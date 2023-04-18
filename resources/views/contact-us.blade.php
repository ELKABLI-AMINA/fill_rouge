@extends('master.layout')

    <!-- Section -->
    @section('title')
    Contact Us
    @endsection

    @section('content') 
   {{-- <div class="container">
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
   </div> --}}
   <div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-8 offset-2 mt-5">
            <div class="card">
               
                <div class="card-body">
                    
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
               
                    <form method="POST" action="{{ route('contact-store') }}">
              
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Subject:</strong>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>  
                            </div>
                        </div>
               
                        <div class="form-group text-center">
                            <button class="btn btn-success btn-submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


          
    @endsection
    
