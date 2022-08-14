<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

        {{-- CSS For admin --}}
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Nucleo Icons -->
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Main Styling -->
        <link href="/assets/css/argon-dashboard-tailwind.css?v=1.0.0" rel="stylesheet" />
        {{-- end CSS for admin --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="/assets/css/animate.css" />
        
        
        <link rel="stylesheet" href="/assets/css/tailwind.css" />

        <!-- ==== WOW JS ==== -->
        <script src="/assets/js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>

        {{-- jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <!-- ====== All Scripts -->
    <script src="/assets/js/main.js"></script>

    {{-- script for admin --}}
    <!-- plugin for scrollbar  -->
  <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="/assets/js/argon-dashboard-tailwind.js?v=1.0.0" async></script>
  {{-- end script for admin --}}
    </body>
</html>
