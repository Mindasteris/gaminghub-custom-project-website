<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <!-- Scripts -->
    @vite('resources/js/app.js')

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="icon" href="{{ asset('img/gh-logo.png') }}">
</head>
<body>
    @include('includes.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('includes.footer')
</body>
</html>