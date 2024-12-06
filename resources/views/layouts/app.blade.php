<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>@yield('title')</title>
    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Soft UI CSS -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
<!--     <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> -->
    <!-- Di dalam <head> -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body class="bg-gray-50 font-sans text-base antialiased text-slate-500">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Area Konten Utama -->
    <main class="xl:ml-68.5 transition-all duration-200 relative h-full max-h-screen rounded-xl" id="content">
        @yield('content')
    </main>

    <!-- Script -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
    <script src="https://buttons.github.io/buttons.js" async defer></script>
    <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>
</body>
</body>
</html>
