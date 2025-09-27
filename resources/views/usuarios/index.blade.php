<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl mb-4">Usuarios Registrados</h1>

                @if (session('ok'))
                    <p class="text-green-600 font-bold">{{ session('ok') }}</p>
                @endif

                <a href="{{ route('usuarios.create') }}" 
                   class="px-4 py-2 bg-green-600 text-white rounded mb-4 inline-block">Nuevo Usuario</a>

                {{-- Tabla con DataTables --}}
                <table id="usuarios" class="display w-full" style="width:100%">
                    <thead class="bg-gray-200">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id_usuario }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>{{ $usuario->correo_electronico }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->role->rol_nombre ?? 'Sin rol' }}</td>
                            <td class="flex gap-2">
                                <a href="{{ route('usuarios.edit', $usuario) }}" 
                                   class="px-2 py-1 bg-amber-300 text-black rounded">Editar</a>
                                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('¿Eliminar usuario?')"
                                            class="px-2 py-1 bg-amber-300 text-black rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- 🔹 CSS de DataTables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    {{-- 🔹 JS de DataTables y extensiones --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    {{-- 🔹 Inicialización DataTables --}}
    <script>
        $(function() {
            $('#usuarios').DataTable({
                pageLength: 10,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>
