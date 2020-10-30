@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2><strong class="font d-flex justify-content-center">Welcome {{ $user_name->name }}!</strong></h2>
                    <h6><p class="font-italic d-flex justify-content-center">What you gonna change today?</p></h6>

                    <div class="row">
                        <div class="col text-center">
                            <button class="btn btn-light " onclick="window.location='{{ url("/materials") }}'">
                                <img src="images\Material.png" width="48" height="48" alt="measurment">
                            </button>
                                <div>
                                    <span class="font d-flex justify-content-center font-weight-bold">
                                        Materials
                                    </span>
                                </div>
                        </div>

                        <div class="col text-center">
                            <button class="btn btn-light" onclick="window.location='{{ url("/barcode") }}'">
                                <img src="images\pos_terminal_40px.png" width="48" height="48" alt="calendar">
                            </button>
                                <div>
                                    <span class="font d-flex justify-content-center font-weight-bold">Orders</span>
                                </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <button class="btn btn-light " onclick="window.location='{{ url("") }}'">
                                <img src="images\database_50px.png" width="50" height="50" alt="measurment">
                            </button>
                                <div>
                                    <span class="font d-flex justify-content-center font-weight-bold">
                                        Data
                                    </span>
                                </div>
                        </div>

                        <div class="col text-center">
                            <button class="btn btn-light" onclick="window.location='{{ url("/materials/create") }}'">
                                <img src="images\add_new_50px.png" width="50" height="50" alt="calendar">
                            </button>
                                <div>
                                    <span class="font d-flex justify-content-center font-weight-bold">Add material</span>
                                </div>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-body text-center">
                          <h5 class="card-title">Material Data</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>

                <div class="row mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                          <h5 class="card-title">Need to Order</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>

        </div>
    </div>
</div>
@endsection
