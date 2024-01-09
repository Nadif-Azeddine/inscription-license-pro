<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __("Inscription LP 2024") }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="icon" href="{{ URL('/images/logo.png') }}" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ URL('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL('/css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL('/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ URL('/js/popper/popper.js') }}" defer></script>
    <script src="{{ URL('/js/jquery.js') }}"></script>
    <script src="{{ URL('/js/bootstrap.min.js') }}"></script>
    <!-- Scripts -->
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white border">
            <div class="px-2 px-sm-4 col-12  d-flex justify-content-between align-items-center">
                <a class="navbar-brand text-3xl fw-500" href="{{ url('/') }}">
                    {{ __('License Pro') }}
                </a>

                <div class="d-flex align-items-center ">
                    <div class="dropdown" style="">
                        <button class="" type="button" id="triggerId" data-bs-toggle="dropdown"> <i
                                class="fa-solid fa-earth-africa fs-5 mt-2"></i> </button>
                        <div class="dropdown-menu shadow-sm end-0" style="left: unset" aria-labelledby="triggerId">
                            <ul class="m-0 p-0">
                                <li class="dropdown-item col-12"><i class="fa fa-language me-2"
                                        aria-hidden="true"></i>English</li>
                                <li class="dropdown-item col-12"><i class="fa fa-language me-2"
                                        aria-hidden="true"></i>French</li>
                                <li class="dropdown-item col-12"><i class="fa fa-language me-2"
                                        aria-hidden="true"></i>Arabic</li>
                            </ul>
                        </div>
                    </div>
                    @auth
                    <div class="avatar mx-2" style="background: url('/images/person.jpg')">
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button type="submit"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                        </form>
                    @endauth
                </div>

            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
@yield('scripts')

</html>
