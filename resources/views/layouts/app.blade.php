<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title') | {{ $appSettings->app_name ?? config('app.name') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('images/REKA-INTERNATIONAL-SERVICES_ICON.webp') }}">

        {{-- Bricolage Grotesque Fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- Styles / Scripts --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>
    <body>
        <div class="antialiased">
            @include('layouts.partials.navbar')

            @yield('content')

            @include('layouts.partials.footer')

            @include('layouts.partials.back-to-top')
        </div>

        @stack('scripts')
    </body>
</html>
