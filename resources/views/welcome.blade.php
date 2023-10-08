<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Funded Trader Money Management App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <link rel="icon" type="image/x-icon" href={{asset('/assets/favicon.png')}}>
    <!-- Fonts -->
    {{--    Bootstrap 5.3 CDN--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{--    FONT IMPORT--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/futura-pt" rel="stylesheet">

    {{--    CSS IMPORT--}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/welcome.css')}}">
</head>
<body>

<div class="container">
    <ul class="background z-n1">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="my-2 py-4 d-flex justify-content-end">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}"
                   class="fs-4 text-decoration-none text-dark-emphasis nav-buttons me-3">Dashboard</a>
                @if(auth()->user()->paid_service ==0 )
                <a href="{{ url('/payment') }}"
                   class="fs-4 text-decoration-none text-dark-emphasis nav-buttons">Payment</a>
                @endif
            @else
                <a href="{{ route('login') }}"
                   class="fs-4 text-decoration-none text-dark-emphasis me-3 nav-buttons">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="fs-4 text-decoration-none text-dark-emphasis nav-buttons">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <div class="row pb-2 pt-0 justify-content-center">
        <a class="navbar-brand text-center my-4 mb-sm-0" href="{{ url('/') }}">
            <img src="{{asset('/assets/verticalLogo.png')}}" height="150px" alt="">
        </a>
        <div class="col text-center">
            <div class="centered-div">
                <p class="fs-1 fw-bold principle lh-sm text-center">Pass and Keep Your Funded Trader Accounts</p>
                <p class="fs-2 text-muted lh-sm text-center m-0">Money Management is Your Key To Success and
                    Consistency!</p>
            </div>
            <div class="row justify-content-center align-items-center mb-0 mb-md-5">
                <div class="col">
                    <a class="fs-4 px-5 py-2 my-4 btn btn-primary"
                       href="{{ route('payment') }}">{{ __('Get Started') }}</a>
                </div>
            </div>
            {{--            <div class="row p-4 maincard border-0 rounded-3 mx-4 mx-sm-0">--}}
            {{--                <div class="col-md-4 mb-3 mb-sm-0 text-center">--}}
            {{--                    <p class="fs-1 m-0 cardNumbers fw-medium" id="happyTraders">5,000</p>--}}
            {{--                    <p class="fs-4 pt-0 m-0" style="color: var(--maincard-text)">Happy Traders</p>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-4 mb-3 mb-sm-0 text-center">--}}
            {{--                    <p class="fs-1 m-0 cardNumbers fw-medium" id="precision">100%</p>--}}
            {{--                    <p class="fs-4 pt-0 m-0" style="color: var(--maincard-text)">Precision</p>--}}
            {{--                </div>--}}
            {{--                <div class="col-md-4 mb-3 mb-sm-0 text-center">--}}
            {{--                    <p class="fs-1 m-0 cardNumbers fw-medium" id="savings">60%</p>--}}
            {{--                    <p class="fs-4 pt-0 m-0" style="color: var(--maincard-text)">Savings</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        <footer class="mt-5 pt-5">
            <p class="fs-3 text-center fw-medium">For support please email us</p>
            <div class="d-flex justify-content-center px-2">
                <p class="fs-4 text-center fw-bold bg-primary text-white py-2 px-5 rounded-3">info@fundedtraderapp.com</p>
            </div>
        </footer>
    </div>
</div>


<script>
    function animateCount(element, target, duration, addPercent) {
        let start = 0;
        const increment = Math.floor(target - start) / duration;

        function updateCount() {
            start += increment;
            element.innerText = parseInt(start.toFixed(1)) + (addPercent ? "%" : "k");
            if (start < target) {
                requestAnimationFrame(updateCount);
            }
        }

        updateCount();
    }

    const happyTraders = document.getElementById('happyTraders');
    const precision = document.getElementById('precision');
    const savings = document.getElementById('savings');

    animateCount(happyTraders, 5, 500, false);
    animateCount(precision, 100, 350, true);
    animateCount(savings, 60, 350, true);
</script>


{{--    Bootstrap 5.3 CDN--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

{{--Font Awesome ICONS--}}
<script src="https://kit.fontawesome.com/8d27e204d1.js" crossorigin="anonymous"></script>
</body>
</html>
