<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4 text-blue-600">Productos</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('productos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">Agregar Producto</a>

        <table id="productosTable" class="min-w-full border rounded">
            <thead class="bg-blue-100 text-blue-800">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Unidades</th>
                    <th class="px-4 py-2 border">Precio</th>
                    <th class="px-4 py-2 border">Descripción</th>
                    <th class="px-4 py-2 border">Características</th>
                    <th class="px-4 py-2 border">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr class="hover:bg-blue-50">
                        <td class="border px-4 py-2">{{ $producto->id_producto }}</td>
                        <td class="border px-4 py-2">{{ $producto->unidades_disponibles }}</td>
                        <td class="border px-4 py-2">${{ number_format($producto->precio, 0, ',', '.') }}</td>
                        <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                        <td class="border px-4 py-2">{{ $producto->caracteristicas }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('productos.edit', $producto->id_producto) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Eliminar este producto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline ml-2">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productosTable').DataTable({
                pageLength: 5,
                language: {
                    search: "Buscar:",
                    lengthMenu: "Mostrar _MENU_ registros",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ productos",
                    paginate: {
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                }
            });
        });
    </script>
</x-app-layout>
