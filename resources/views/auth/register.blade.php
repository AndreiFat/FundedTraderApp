@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="row h-25">
                    <div class="col"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h1 class="text-center">{{ __('Register') }}</h1>
                        <div class="card border-0">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name"
                                               class="fs-5 mb-2">{{ __('Name') }}</label>

                                        <div class="">
                                            <input id="name" type="text"
                                                   class="fs-6 p-3 border-2 border-primary form-control @error('name') is-invalid @enderror"
                                                   name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus
                                                   placeholder="John Doe">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name"
                                               class="fs-5 mb-2">{{ __('Occupation') }}</label>

                                        <div class="">
                                            <input id="name" type="text"
                                                   class="fs-6 p-3 border-2 border-primary form-control @error('occupation') is-invalid @enderror"
                                                   name="occupation"
                                                   value="{{ old('occupation') }}" required autocomplete="occupation"
                                                   placeholder="Student"
                                                   autofocus>

                                            @error('occupation')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email"
                                               class="fs-5 mb-2">{{ __('Email Address') }}</label>

                                        <div class="">
                                            <input id="email" type="email"
                                                   class="fs-6 p-3 border-2 border-primary form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   placeholder="email@domain.com">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password"
                                               class="fs-5 mb-2">{{ __('Password') }}</label>

                                        <div class="">
                                            <input id="password" type="password"
                                                   class="fs-6 p-3 border-2 border-primary form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required autocomplete="new-password"
                                                   placeholder="Your Password Here">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="password-confirm"
                                               class="fs-5 mb-2">{{ __('Confirm Password') }}</label>

                                        <div class="">
                                            <input id="password-confirm" type="password"
                                                   class="fs-6 p-3 border-2 border-primary form-control"
                                                   name="password_confirmation" required autocomplete="new-password"
                                                   placeholder="Confirm Your Password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col">
                                            <button type="submit" class="fs-5 py-2 w-100 btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5 justify-content-center">
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
