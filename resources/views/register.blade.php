@extends('master.layout')
@section('title')
Register
@endsection

@section('content') 

<section class="h-100 ">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                      <div class="card card-registration my-4">
                        <div class="row g-0">
                          <div class="col-xl-6 d-none d-xl-block">
                            <img class="h-100 w-100" src="{{asset('../img/bg.jpg')}}"
                              alt="Sample photo" class="img-fluid"
                              style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                          </div>
                          <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                              <h3 class="mb-5 text-uppercase text-center">Bladi registration form</h3>
              
                              <div class="row">
                                <div class="col-md-6 mb-4">
                                  <div class="form-outline">
                                    <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1m">First name</label>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                  <div class="form-outline">
                                    <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n">Last name</label>
                                  </div>
                                </div>
                              </div>
              
                             
              
                              <div class="form-outline mb-4">
                                <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example8">Address</label>
                              </div>
              
                              <div class="form-outline mb-4">
                                <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example8">Email</label>
                              </div>
                              <div class="row">
                                <div class="col-md-6 mb-4">
                                  <div class="form-outline">
                                    <input type="password" id="form3Example1m" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1m">Password</label>
                                  </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                  <div class="form-outline">
                                    <input type="password" id="form3Example1n" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n">confirm password</label>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex justify-content-end pt-3">
                              
                                <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                              </div>
              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
               
@endsection