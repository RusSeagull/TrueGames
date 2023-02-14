<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                        <a href="/public" class="header-link logo-link">True games</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="header-menu disp-sm-none">
                        <ul class="header-nav">
                            <li class="header-item">
                                <a href="/public/catalog" class="header-link">Каталог</a>
                            </li>
                            <li class="header-item">
                                <a href="/public/cart" class="header-link">Корзина</a>
                            </li>
                            <li class="header-item">
                                <a href="/public/contact" class="header-link">Контакты</a>
                            </li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                            <li class="header-item disp-sm-flex">
                                <a href="/public/catalog" class="header-link">Каталог</a>
                            </li>
                            <li class="header-item disp-sm-flex">
                                <a href="/public/cart" class="header-link">Корзина</a>
                            </li>
                            <li class="header-item disp-sm-flex">
                                <a href="/public/contact" class="header-link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                <div class="container">
                        <a href="/public" class="header-link logo-link">True games</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="header-menu">
                        <ul class="header-nav">
                            <li class="header-item">
                                <a href="/public/catalog" class="header-link">Каталог</a>
                            </li>
                            <li class="header-item">
                                <a href="/public/cart" class="header-link">Корзина</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="map">
            <img src="/public/img/map.jpg" alt="" class="img-fluid">
        </div>
    </footer>

</body>
</html>
