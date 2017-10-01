<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @yield('styles')
</head>
<body>
    <div class="loader_overlay">
        <div class="loader">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <div id="app">
        @include('partials.header')
        <div class="wrapper">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</body>
<script src="{{ URL::to('js/app.js') }}"></script>
@yield('scripts')
</html>