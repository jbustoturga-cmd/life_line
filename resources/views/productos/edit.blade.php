<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4 text-blue-600">Editar Producto</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="unidades_disponibles" class="block font-semibold mb-1">Unidades disponibles</label>
                <input type="number" name="unidades_disponibles" id="unidades_disponibles" value="{{ old('unidades_disponibles', $producto->unidades_disponibles) }}" class="w-full border rounded p-2" min="0" required>
            </div>

            <div class="mb-4">
                <label for="precio" class="block font-semibold mb-1">Precio</label>
                <input type="number" name="precio" id="precio" value="{{ old('precio', $producto->precio) }}" class="w-full border rounded p-2" min="0" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block font-semibold mb-1">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label for="caracteristicas" class="block font-semibold mb-1">Características</label>
                <textarea name="caracteristicas" id="caracteristicas" class="w-full border rounded p-2" rows="3">{{ old('caracteristicas', $producto->caracteristicas) }}</textarea>
            </div>

            <div class="flex items-center gap-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
                <a href="{{ route('productos.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
