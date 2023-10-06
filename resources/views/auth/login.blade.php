@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="row justify-content-center">
                    <div class="col-md-6 my-5 py-5">
                        <h1 class="text-center">{{ __('Login') }}</h1>
                        <div class="card border-0 bg-transparent">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <i class="fa-solid fa-lg fa-envelope me-1 "></i>
                                        <label for="email"
                                               class="fs-5 mb-2 fw-medium">{{ __('Email Address') }}</label>

                                        <div class="">
                                            <input id="email" type="email"
                                                   class="fs-6 p-2 border-2 border-primary form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus
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
                                                   class="fs-6 p-2 border-2 border-primary form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required autocomplete="current-password"
                                                   placeholder="Type your password">

                                            @error('password')
                                            <span class="invalid-feedback fs-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="text fs-6 form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary fs-5 w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col">
                                            @if (Route::has('password.request'))
                                                <a class="w-100 m-0 p-0 fs-6 btn btn-link text-end text-decoration-none"
                                                   href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5 justify-content-center">
                        <div class="col-xl-6">
                            <p class="fs-6 text-center">Don't have an account? <a href="{{ route('register') }}"
                                                                                  class="d-block d-md-inline text-primary fw-semibold text-decoration-underline">Register
                                    Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-0 m-0 h-100">
                <div class="d-none d-xl-flex position-relative z-n1">
                    <div class="bg-image"></div>
                </div>
            </div>
        </div>

    </div>
@endsection
