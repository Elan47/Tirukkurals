<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta property="og:title" content="Tirukkurals">
    <meta property="og:site_name" content="Tirukkurals">
    <meta property="og:url" content="http://localhost/vue-kurals/public">
    <meta property="og:description" content="All About Thirukkurals">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Tirukkurals</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
    <link rel="manifest" href="http://localhost/vue-kurals/manifest.webmanifest">
</head>

<body style="overflow:x-hidden ">


    <div id="app">

        <App></App>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
