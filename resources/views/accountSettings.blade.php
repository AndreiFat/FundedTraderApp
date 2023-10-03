@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <a href="{{route('home')}}"
                                       class="d-inline-block text-decoration-none text-dark my-auto">
                                        <i class="fa-solid fa-2xl fa-arrow-left me-2"></i>
                                    </a>
                                    <h2 class="d-inline-block mb-0">Account Settings </h2>
                                </div>

                                <div class="row fs-2">{{ Auth::user()->name }}</div>
                                <div class="row fs-2"> {{ Auth::user()->occupation }}</div>

                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
