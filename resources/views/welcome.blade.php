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
                   class="fs-4 text-decoration-none text-dark-emphasis nav-buttons me-4">Dashboard</a>
                @if(auth()->user()->paid_service ==0 )
                    <a href="{{ url('/payment') }}"
                       class="fs-4 text-decoration-none text-dark-emphasis nav-buttons me-4">Buy Now</a>
                @endif
                <a href="#faq_section"
                   class="fs-4 text-decoration-none text-dark-emphasis me-4 nav-buttons ">FAQs</a>
                <a href="#free-book"
                   class="fs-4 text-decoration-none text-dark-emphasis me-4 nav-buttons">Get Free Book</a>
            @else
                <a href="{{ route('login') }}"
                   class="fs-4 text-decoration-none text-dark-emphasis me-4 nav-buttons">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="fs-4 text-decoration-none text-dark-emphasis nav-buttons me-4 ">Register</a>
                @endif
                <a href="#faq_section"
                   class="fs-4 text-decoration-none text-dark-emphasis me-4 nav-buttons ">FAQs</a>
                <a href="#free-book"
                   class="fs-4 text-decoration-none text-dark-emphasis me-4 nav-buttons">Get Free Book</a>
            @endauth
        @endif
    </div>

    <div class="row pt-0 justify-content-center">
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
                    <a class="fs-4 px-5 pt-2 mt-4 btn btn-primary"
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
    </div>

</div>
{{--<p class="fs-3 text-center fw-medium text-white">For support please email us at info@fundedtraderapp.com</p>--}}

<div class="container py-2 py-xl-5">
    <div class="row py-3 justify-content-center">
        <div class="col col-xl-8 p-0">
            <div class="video-section" style="height: 50vh">
                <iframe class="" width="100%" height="100%"
                        src="https://www.youtube.com/embed/dDdjWYYsu8M?si=xMGi59NEmwJ8XSSG"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="faq_section" class="container pb-3">
    <div class="row py-5">
        <div class="col">
            <p class="mb-2 fs-1 fw-bold text-center faq">FAQs</p>
            <div class="accordion fs-4 accordion-flush bg-transparent" id="accordionFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What makes the FTA tool so useful?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            It’s ease of use in back testing, and creating hypothetical Money Management models. The
                            newer trader who is trying to pass a prop firm evaluation will find it to be simple,
                            fast
                            and intuitive. It can be used it on your desktop computer or smartphone.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Does FTA give trade entry or exit signals?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            The Funded Trader App does NOT generate trade entry or exit signals, but takes the all
                            important step of helping you assess the right stop loss and take profit levels, after
                            your
                            entry signals put you in the trade.
                            <br>
                            FTA believes that every trader should decide upon a trading methodology based on their
                            account size, risk tolerance and preferred trading style.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Does FTA Guarantee that I will pass my funded trader challenge, evaluation, trial,
                            audition,
                            etc.?

                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Success in trading ultimately depends on your ability to execute your strategy. Obeying
                            your
                            stop losses and take profit orders is your responsibility, since we can’t influence
                            that, we
                            can’t offer guarantees.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How can this App help me pass and keep my prop accounts?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            <text class="fw-medium">The FTA tool can help you calculate your:</text>
                            <ul class="list-group list-group-flush px-2">
                                <li class="list-group-item">Stop loss levels
                                </li>
                                <li class="list-group-item">Take profit levels
                                </li>
                                <li class="list-group-item">Risk per trade (in dollars and percentage) and Profit
                                    per
                                    trade based on your parameters
                                </li>
                                <li class="list-group-item">Prudent position sizing</li>
                                <li class="list-group-item">Historical and hypothetical win rate in the context of
                                    your
                                    risk/take profit levels
                                </li>
                                <li class="list-group-item">Number of consecutive losing trades away you are from
                                    losing
                                    your prop trial or funded account
                                </li>
                                <li class="list-group-item">Risk to reward ratios, and estimate which money
                                    management
                                    plan would result in a positive or negative P&L based on your inputs
                                </li>
                            </ul>
                            <br>
                            <p class="px-2">
                                <text>
                                    It can also assist you with back testing your trading strategy and/or
                                    performance,
                                    to
                                    identify potential areas for improvement moving forward.
                                </text>
                                <br>
                                <br>
                                <text>When you understand those parameters, your awareness and emphasis on
                                    money management
                                    increases. We believe that leads to a more confident, decisive trader.
                                </text>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Why is Money Management important?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Money Management encompasses every facet of your trading, and ignoring it is the leading
                            cause of trader failure. Charles Schwab and TD Ameritrade have done studies indicating
                            that <strong>85%</strong> of traders fail due to lack of money management. Other studies
                            suggest that
                            poor ‘risk management’ (an integral part of money management) accounts for a
                            <strong>90%+</strong>
                            failure rate.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Is $6.99 an ongoing subscription?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            No. The cost for the App is $6.99, which is a One-Time cost. There are no additional or
                            ongoing fees.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fs-3 p-4 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Do yo have a tutorial or videos?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            We have video tutorials on YouTube, and a <strong>FREE</strong> Money Management book on
                            Amazon “Money
                            Management for The Funded Trader - How To Pass & Keep Your Funded Trader Accounts”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 bg-dark">

    <div class="container-fluid p-0 bg-white" id="free-book">
        <div class="container">
            <iframe id="JotFormIFrame-230847032503650" title="Download Your Free e-book"
                    onload="window.parent.scrollTo(0,0)" allowtransparency="true" allowfullscreen="true"
                    allow="geolocation; microphone; camera" src="https://form.jotform.com/230847032503650"
                    frameborder="0" style="min-width:100%;max-width:100%;height:539px;border:none;"
                    scrolling="no">

            </iframe>
        </div>
    </div>
</div>
<footer class="py-5 footer-background text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 mb-3 mb-xl-0">
                <div class="d-flex">
                    <a class="navbar-brand text-center mb-sm-0 " href="{{ url('/') }}">
                        <img class="rounded-4 p-2 bg-white" src="{{asset('/assets/favicon.png')}}" height="92"
                             alt="">
                    </a>
                    <p class="ms-4 my-auto fs-4 text-white">
                        © Copyright 2023 <br> FUNDED TRADER APP
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-3 mb-xl-0">
                <p class="fw-medium fs-4 text-white">
                    SOCIAL LINKS
                </p>
                <a class="text-white"
                   href="https://www.facebook.com/profile.php?id=100079580580704">
                    <i
                        class="fa-brands fa-2x fa-facebook"></i></a>
                <a class="ms-4 text-white" href="https://www.twitter.com/FundedTraderApp">
                    <i
                        class="fa-brands fa-2x fa-x-twitter"></i></a>
                <a class="ms-4 text-white" href="https://www.tiktok.com/@fundedtraderapp">
                    <i class="fa-brands fa-2x fa-tiktok"></i></a>
                <a class="ms-4 text-white"
                   href="https://www.youtube.com/channel/UCTCGZt5SwNtocvuE7YwtEgQ">
                    <i class="fa-brands fa-2x fa-youtube"></i></a>
                <a class="ms-4 text-white"
                   href="https://form.jotform.com/230847032503650">
                    <i class="fa-solid fa-2x fa-book"></i></a>
            </div>
            <div class="col-12 col-xl-4">
                <p class="fs-4 mb-1 fw-medium">
                    SUPPORT
                </p>
                <p class="fs-4">Email us at info@fundedtraderapp.com</p>
            </div>
        </div>
    </div>
</footer>
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

<script type="text/javascript"> var ifr = document.getElementById("JotFormIFrame-230847032503650");
    if (ifr) {
        var src = ifr.src;
        var iframeParams = [];
        if (window.location.href && window.location.href.indexOf("?") > -1) {
            iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
        }
        if (src && src.indexOf("?") > -1) {
            iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
            src = src.substr(0, src.indexOf("?"))
        }
        iframeParams.push("isIframeEmbed=1");
        ifr.src = src + "?" + iframeParams.join('&');
    }
    window.handleIFrameMessage = function (e) {
        if (typeof e.data === 'object') {
            return;
        }
        var args = e.data.split(":");
        if (args.length > 2) {
            iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]);
        } else {
            iframe = document.getElementById("JotFormIFrame");
        }
        if (!iframe) {
            return;
        }
        switch (args[0]) {
            case "scrollIntoView":
                iframe.scrollIntoView();
                break;
            case "setHeight":
                iframe.style.height = args[1] + "px";
                if (!isNaN(args[1]) && parseInt(iframe.style.minHeight) > parseInt(args[1])) {
                    iframe.style.minHeight = args[1] + "px";
                }
                break;
            case "collapseErrorPage":
                if (iframe.clientHeight > window.innerHeight) {
                    iframe.style.height = window.innerHeight + "px";
                }
                break;
            case "reloadPage":
                window.location.reload();
                break;
            case "loadScript":
                if (!window.isPermitted(e.origin, ['jotform.com', 'jotform.pro'])) {
                    break;
                }
                var src = args[1];
                if (args.length > 3) {
                    src = args[1] + ':' + args[2];
                }
                var script = document.createElement('script');
                script.src = src;
                script.type = 'text/javascript';
                document.body.appendChild(script);
                break;
            case "exitFullscreen":
                if (window.document.exitFullscreen) window.document.exitFullscreen(); else if (window.document.mozCancelFullScreen) window.document.mozCancelFullScreen(); else if (window.document.mozCancelFullscreen) window.document.mozCancelFullScreen(); else if (window.document.webkitExitFullscreen) window.document.webkitExitFullscreen(); else if (window.document.msExitFullscreen) window.document.msExitFullscreen();
                break;
        }
        var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
        if (isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
            var urls = {"docurl": encodeURIComponent(document.URL), "referrer": encodeURIComponent(document.referrer)};
            iframe.contentWindow.postMessage(JSON.stringify({"type": "urls", "value": urls}), "*");
        }
    };
    window.isPermitted = function (originUrl, whitelisted_domains) {
        var url = document.createElement('a');
        url.href = originUrl;
        var hostname = url.hostname;
        var result = false;
        if (typeof hostname !== 'undefined') {
            whitelisted_domains.forEach(function (element) {
                if (hostname.slice((-1 * element.length - 1)) === '.'.concat(element) || hostname === element) {
                    result = true;
                }
            });
            return result;
        }
    };
    if (window.addEventListener) {
        window.addEventListener("message", handleIFrameMessage, false);
    } else if (window.attachEvent) {
        window.attachEvent("onmessage", handleIFrameMessage);
    } </script>


{{--    Bootstrap 5.3 CDN--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

{{--Font Awesome ICONS--}}
<script src="https://kit.fontawesome.com/8d27e204d1.js" crossorigin="anonymous"></script>
</body>
</html>
