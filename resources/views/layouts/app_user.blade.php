<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Winnicode Career')</title>
    <link rel="icon" type="image/png" href="https://winnicode.com/mazer/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 m-0">
    @include('partials.navbar_user') <!-- Navbar -->

    <main>
        @yield('content') <!-- Content Section -->
    </main>

    @include('partials.footer_user') <!-- Footer -->

    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/show.js') }}" defer></script>
</body>
</html>
