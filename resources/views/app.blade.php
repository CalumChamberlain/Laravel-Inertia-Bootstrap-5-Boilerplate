<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="apple-touch-icon" href="{{ asset('icons/apple-touch-icon-iphone-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-touch-icon-ipad-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-touch-icon-iphone-retina-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-touch-icon-ipad-retina-152x152.png') }}">

        <!-- Scripts -->
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
