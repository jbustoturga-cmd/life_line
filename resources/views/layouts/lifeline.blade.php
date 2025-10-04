<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Line - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4 shadow">
        <h1 class="text-2xl font-bold">Life Line</h1>
    </header>

    <!-- Main content -->
    <main class="p-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white p-4 mt-6 text-center">
        &copy; {{ date('Y') }} Life Line
    </footer>

    @stack('scripts')
</body>
</html>
