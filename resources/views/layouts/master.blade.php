<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai Headlines | @section('title') index page @show</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <div class="container">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
        <script src="/js/main.js"></script>
</body>
</html>
