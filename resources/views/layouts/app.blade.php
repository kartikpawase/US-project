<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Guardian Health USA — Pharmaceutical & Nutraceutical Contract Manufacturing')</title>

    <!-- Google Fonts Preconnect & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24..48,400..700,0..1,-50..200" />

    <!-- Vite Assets (Bootstrap, Fonts, CSS & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header & Navigation -->
    @include('components.header')

    <!-- Main Content Area -->
    <main id="app-content" class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Coming Soon Modal Component -->
    @include('components.coming-soon')

    @stack('scripts')
</body>
</html>
