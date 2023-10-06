@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <div class="card border-light p-0 p-md-3">
                            <div class="card-body">
                                <div class="d-flex">
                                    <a href="{{route('home')}}"
                                       class="d-inline-block text-decoration-none text-dark my-auto">
                                        <i class="fa-solid fa-2xl fa-arrow-left me-2 my-auto"></i>
                                    </a>
                                    <h2 class="d-inline-block mb-0 ms-2 my-auto">Account Settings </h2>
                                    <div class="d-inline-flex ms-auto">
                                        <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                           class="text-decoration-none">
                                            <button class="btn btn-danger fs-5 fw-medium">
                                                <i class="fa-solid fa-right-from-bracket me-2 ms-2"></i>Logout
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="{{route('updateUser')}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="my-3 ">
                                                <i class="fa-solid fa-lg fa-envelope me-1 "></i>
                                                <label for="emailInput"
                                                       class="form-label fs-5 fw-medium">Email</label>
                                                <input name="email" type="email"
                                                       class="form-control fs-5 border-2 border-primary"
                                                       id="emailInput"
                                                       aria-describedby="emailHelp" value="{{Auth::user()->email}}">
                                            </div>

                                            <div class="my-3">
                                                <i class="fa-solid fa-lg fa-user me-1"></i>
                                                <label for="nameInput" class="form-label fs-5 fw-medium">Name</label>
                                                <input name="name" type="text"
                                                       class="form-control fs-5 border-2 border-primary"
                                                       id="nameInput"
                                                       aria-describedby="emailHelp" value="{{Auth::user()->name}}">
                                            </div>

                                            <div class="my-3">
                                                <i class="fa-solid fa-lg fa-user-tie me-1"></i>
                                                <label for="occupationInput"
                                                       class="form-label fs-5 fw-medium">Occupation</label>
                                                <input name="occupation" type="text"
                                                       class="form-control fs-5 border-2 border-primary"
                                                       id="occupationInput"
                                                       aria-describedby="emailHelp"
                                                       value="{{Auth::user()->occupation}}">
                                            </div>

                                            <button type="submit" class="btn btn-primary w-100 fs-5 mt-3">Submit
                                                changes
                                            </button>
                                        </form>

                                        <a href="{{ route('password.request') }}"
                                           class="text-decoration-none">
                                            <button class="btn btn-danger w-100 fs-5 mt-4 fw-medium">
                                                Change password
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
