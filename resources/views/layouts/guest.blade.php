<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Life Line – @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Group 22.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        body {
            background: linear-gradient(135deg, #e2e7fa 40%, #c9d2f6 100%);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        header img {
            width: 48px;
            height: 48px;
        }

        header h1 {
            font-size: 28px;
            color: #2e3a75;
            font-weight: bold;
        }

        main {
            width: 100%;
            max-width: 480px;
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('images/Group 22.png') }}" alt="Life Line Logo">
        <h1>Life Line</h1>
    </header>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
