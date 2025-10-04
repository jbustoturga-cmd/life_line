<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - Life Line</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<header class="bg-blue-600 text-white p-4 shadow">
    <h1 class="text-2xl font-bold">Life Line - Agregar Producto</h1>
</header>

<main class="p-6 max-w-4xl mx-auto">
    <div class="bg-white p-6 rounded shadow-md">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="unidades_disponibles" class="block font-semibold mb-1 text-gray-700">Unidades disponibles</label>
                <input type="number" name="unidades_disponibles" id="unidades_disponibles"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       min="0" value="{{ old('unidades_disponibles') }}" required>
                @error('unidades_disponibles')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="precio" class="block font-semibold mb-1 text-gray-700">Precio</label>
                <input type="number" name="precio" id="precio"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       min="0" step="0.01" value="{{ old('precio') }}" required>
                @error('precio')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block font-semibold mb-1 text-gray-700">Descripción</label>
                <input type="text" name="descripcion" id="descripcion"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       value="{{ old('descripcion') }}" required>
                @error('descripcion')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="caracteristicas" class="block font-semibold mb-1 text-gray-700">Características</label>
                <textarea name="caracteristicas" id="caracteristicas" rows="4"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('caracteristicas') }}</textarea>
                @error('caracteristicas')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Agregar Producto</button>
                <a href="{{ route('productos.index') }}"
                   class="bg-gray-400 text-white px-5 py-2 rounded hover:bg-gray-500">Cancelar</a>
            </div>
        </form>
    </div>
</main>

<footer class="bg-blue-600 text-white p-4 mt-6 text-center">
    &copy; {{ date('Y') }} Life Line
</footer>

</body>
</html>
