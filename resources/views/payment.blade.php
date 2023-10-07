@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header">{{ __('Payment') }}</div>

                    <div class="card-body">
                        <p>Complete the payment before access this tool.</p>
                        <a class="fs-5 btn btn-primary" href="">Complete Payment</a>
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
