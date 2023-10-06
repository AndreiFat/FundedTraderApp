@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="text-center mb-0">{{ __('Register') }}</h1>
                        <div class="card border-0 bg-transparent">
                            <div class="card-body pt-0">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <i class="fa-solid fa-lg fa-user me-1"></i>
                                        <label for="name"
                                               class="fs-5 mb-2 fw-medium">{{ __('Name') }}</label>

                                        <div class="">
                                            <input id="name" type="text"
                                                   class="fs-6  border-2 border-primary form-control @error('name') is-invalid @enderror"
                                                   name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus
                                                   placeholder="John Doe">

                                            @error('name')
                                            <span class="invalid-feedback fs-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <i class="fa-solid fa-lg fa-user-tie me-1"></i>
                                        <label for="name"
                                               class="fs-5 mb-2 fw-medium">{{ __('Occupation') }}</label>

                                        <div class="">
                                            <input id="name" type="text"
                                                   class="fs-6 border-2 border-primary form-control @error('occupation') is-invalid @enderror"
                                                   name="occupation"
                                                   value="{{ old('occupation') }}" required autocomplete="occupation"
                                                   placeholder="Student"
                                                   autofocus>

                                            @error('occupation')
                                            <span class="invalid-feedback fs-6" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <i class="fa-solid fa-lg fa-envelope me-1 "></i>
                                        <label for="email"
                                               class="fs-5 mb-2 fw-medium">{{ __('Email Address') }}</label>

                                        <div class="">
                                            <input id="email" type="email"
                                                   class="fs-6 border-2 border-primary form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   placeholder="email@domain.com">

                                            @error('email')
                                            <span class="invalid-feedback fs-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <i class="fa-solid fa-lg me-1 fa-lock"></i>
                                        <label for="password"
                                               class="fs-5 mb-2 fw-medium">{{ __('Password') }}</label>

                                        <div class="">
                                            <input id="password" type="password"
                                                   class="fs-6 border-2 border-primary form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required autocomplete="new-password"
                                                   placeholder="Your Password Here">

                                            @error('password')
                                            <span class="invalid-feedback fs-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <i class="fa-solid fa-lg me-1 fa-lock"></i>
                                        <label for="password-confirm"
                                               class="fs-5 mb-2 fw-medium">{{ __('Confirm Password') }}</label>

                                        <div class="">
                                            <input id="password-confirm" type="password"
                                                   class="fs-6 border-2 border-primary form-control"
                                                   name="password_confirmation" required autocomplete="new-password"
                                                   placeholder="Confirm Your Password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col">
                                            <button type="submit" class="fs-5 w-100 btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 justify-content-center">
                        <div class="col-xl-6">
                            <p class="fs-6 text-center">Already have an account? <a href="{{ route('login') }}"
                                                                                    class="d-block d-md-inline text-primary fw-semibold text-decoration-underline">Login
                                    Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-0 m-0">
                <div class="d-none d-xl-flex position-relative z-n1">
                    <div class="bg-image"></div>
                </div>
            </div>
        </div>

    </div>
@endsection
