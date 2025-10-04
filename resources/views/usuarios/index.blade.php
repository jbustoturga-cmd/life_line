<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#2e3a75] leading-tight">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>

    <!-- Contenedor principal con fondo -->
    <div class="relative py-6 min-h-screen">
        <!-- Fondo decorativo -->
        <div class="absolute inset-0 z-0" 
             style="background: url('{{ asset('images/img101.jpg') }}') no-repeat center center; background-size: cover; opacity:0.2;">
        </div>

        <!-- Contenido encima del fondo -->
        <div class="relative z-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-95 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl mb-4 text-[#2e3a75] font-bold">Usuarios Registrados</h1>

                @if (session('ok'))
                    <p class="text-green-600 font-bold">{{ session('ok') }}</p>
                @endif

                <a href="{{ route('usuarios.create') }}" 
                   class="btn-action add mb-4 inline-block">Nuevo Usuario</a>

                <div class="overflow-x-auto">
                    <table id="usuarios" class="display w-full rounded-lg shadow-md" style="width:100%">
                        <thead class="bg-[#1a2c54] text-white">
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
                        <tbody class="divide-y divide-gray-200">
                            @foreach($usuarios as $usuario)
                            <tr class="hover:bg-[#f4f4fc] transition-colors duration-200">
                                <td>{{ $usuario->id_usuario }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->apellido }}</td>
                                <td>{{ $usuario->correo_electronico }}</td>
                                <td>{{ $usuario->telefono }}</td>
                                <td>{{ $usuario->role->rol_nombre ?? 'Sin rol' }}</td>
                                <td class="flex justify-center gap-2 py-2">
                                    <a href="{{ route('usuarios.edit', $usuario) }}" class="btn-action edit">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" onsubmit="return confirm('¿Eliminar usuario?');" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action delete">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------- Estilos ---------------- -->
    <style>
        /* Botones */
        .btn-action {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: bold;
            font-size: 0.9rem;
            color: #fff;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-action.add {
            background: #28a745;
            box-shadow: 0 4px 12px rgba(40,167,69,0.2);
        }
        .btn-action.add:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(40,167,69,0.3);
        }

        .btn-action.edit {
            background: #3c51a0;
            box-shadow: 0 4px 12px rgba(60,81,160,0.2);
        }
        .btn-action.edit:hover {
            background: #2e3a75;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(60,81,160,0.3);
        }

        .btn-action.delete {
            background: #d9534f;
            box-shadow: 0 4px 12px rgba(217,83,79,0.2);
        }
        .btn-action.delete:hover {
            background: #c9302c;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217,83,79,0.3);
        }

        /* Hover filas */
        tbody tr:hover {
            background-color: #f4f4fc;
        }
    </style>

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
