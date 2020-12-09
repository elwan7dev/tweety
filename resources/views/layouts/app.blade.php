<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tweety') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- header section --}}
        <section class="px-8 py-4 mb-4">
            <header class="container mx-auto">
                <h1>
                    <img src="/images/logo.svg" alt="tweety">
                </h1>
            </header>
        </section>

        {{-- main content --}}
        <section class="px-16 mb-2">
            <main class="container mx-auto">
                {{-- Content wrapper --}}
                <div class="lg:flex lg:justify-between">
                    {{-- sidebar --}}
                    <div class="lg:w-32 ml-4">
                        @include('_sidebar-links')
                    </div>

                    {{-- feeds --}}
                    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>

                    {{-- friends-list --}}
                    <div class="lg:w-1/6">
                        @include('_friends-list')
                    </div>
                </div>
            </main>
        </section>

    </div>
</body>
</html>
