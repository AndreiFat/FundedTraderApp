<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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

</head>
<body>

<div class="container position-relative" style="height: 100vh; overflow: hidden">
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
    <div class="my-3 d-flex justify-content-end">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}"
                   class="fs-5 text-decoration-none text-dark-emphasis nav-buttons">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="fs-5 text-decoration-none text-dark-emphasis me-3 nav-buttons">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="fs-5 text-decoration-none text-dark-emphasis nav-buttons">Register</a>
                @endif
            @endauth
        @endif
    </div>

    <div class="row pb-2 pt-0 justify-content-center position-absolute top-50 start-50 translate-middle w-100 px-3">
        <a class="navbar-brand text-center" href="{{ url('/') }}">
            <img src="{{asset('/assets/verticalLogo.png')}}" height="250px" alt="">
        </a>
        <div class="col text-center">
            <div class="centered-div">
                <p class="fs-1 fw-bold principle lh-sm text-center">The best way to organize your tradings.</p>
                <p class="fs-2 text-muted lh-sm text-center m-0">We know... Tradings may be difficult, let's get
                    you
                    started in this way.</p>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <a class="fs-4 px-5 py-2 my-4 btn btn-primary"
                       href="{{ route('register') }}">{{ __('Join us') }}</a>
                </div>
            </div>
            <div class="row p-4 maincard border-0 rounded-3">
                <div class="col-4 text-center">
                    <p class="fs-1 m-0 cardNumbers fw-medium" id="happyTraders">5,000</p>
                    <p class="fs-4 pt-0 m-0" style="color: #157277">Happy Traders</p>
                </div>
                <div class="col-4 text-center">
                    <p class="fs-1 m-0 cardNumbers fw-medium" id="precision">100%</p>
                    <p class="fs-4 pt-0 m-0" style="color: #157277">Precision</p>
                </div>
                <div class="col-4 text-center">
                    <p class="fs-1 m-0 cardNumbers fw-medium" id="savings">60%</p>
                    <p class="fs-4 pt-0 m-0" style="color: #157277">Savings</p>
                </div>
            </div>
        </div>
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
    animateCount(precision, 100, 500, true);
    animateCount(savings, 60, 500, true);
</script>


{{--    Bootstrap 5.3 CDN--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

{{--Font Awesome ICONS--}}
<script src="https://kit.fontawesome.com/8d27e204d1.js" crossorigin="anonymous"></script>
</body>
</html>
