@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4 p-3">
                    <div class="">{{ __('Payment') }}</div>

                    <div class="card-body">
                        <p>One-Time Payment of $6.99 For Use on Desktop or Smartphone</p>
                        <a class="fs-5 btn btn-primary" href="">BUY NOW</a>
                        @error('error') is-invalid @enderror
                        @error('error')
                        <span class="invalid-feedback fs-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
