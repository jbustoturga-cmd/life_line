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

                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID</th>
                            <th class="border border-gray-300 px-4 py-2">Usuario</th>
                            <th class="border border-gray-300 px-4 py-2">Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->username }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $usuario->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
