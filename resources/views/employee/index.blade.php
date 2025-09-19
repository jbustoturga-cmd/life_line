<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h1>Listado de Empleados</h1>

                <table border="1" cellpadding="5" cellspacing="0" style="width:100%; margin-top:10px;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>ID Género</th>
                            <th>Fecha Nacimiento</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>ID Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $emp)
                            <tr>
                                <td>{{ $emp->id_usuario }}</td>
                                <td>{{ $emp->nombre }}</td>
                                <td>{{ $emp->apellido }}</td>
                                <td>{{ $emp->id_genero }}</td>
                                <td>{{ $emp->fecha_nacimiento }}</td>
                                <td>{{ $emp->correo_electronico }}</td>
                                <td>{{ $emp->telefono }}</td>
                                <td>{{ $emp->id_rol }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
