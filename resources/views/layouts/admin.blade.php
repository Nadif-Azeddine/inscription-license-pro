<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Inscription LP 2024') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="icon" href="{{ URL('/images/logo.png') }}" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ URL('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL('/css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL('/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="{{ URL('/assets/vendor/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ URL('/assets/vendor/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ URL('/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" href="{{URL('/assets/css/main.css')}}" type="text/css">
    <!-- Scripts -->
    <script src="{{ URL('/js/popper/popper.js') }}" defer></script>
    <script src="{{ URL('/js/jquery.js') }}"></script>
    <script src="{{ URL('/js/bootstrap.min.js') }}"></script>
    <!-- Scripts -->
</head>

<body>

    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
{{-- core --}}
<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/bundles/c3.bundle.js"></script>
<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<script src="../assets/js/theme.js"></script>
<script src="../assets/js/pages/index.js"></script>
<script src="../assets/js/pages/todo-js.js"></script>
@yield('scripts')

</html>
