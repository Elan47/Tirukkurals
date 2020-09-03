<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Laravel</title>
    {{-- Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script>
        window.laravel = {csrfToken : {{'csrf_token()'}}};
    </script> --}}
    <!-- Styles -->
    {{-- <style>
        html,
        body {
            background-color: black;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> --}}
</head>

<body style="overflow:x-hidden ">
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
    </div>
    @endif

    </div> --}}

    {{-- <div class="container">
        <div class="content"> --}}
    {{-- <div class="title m-b-md">
                {{-- Laravel --}}
    {{-- </div> --}}
    <div id="app">
        <App></App>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>

    <script src="https://cdnjs.com/libraries/bodymovin" type="text/javascript"></script>
    <script>
        var animation = bodymovin.loadAnimation({
        container: document.getElementById("lottie"), // Required
        path:"https://maxst.icons8.com/vue-static/landings/animated-icons/icons/searching/searching.json", // Required
        renderer: "svg/canvas/html", // Required
        loop: true, // Optional
        autoplay: true, // Optional
        name: "search icon", // Name for future reference. Optional.
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
