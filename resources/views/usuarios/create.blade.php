<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700">Nombre</label>
                        <input type="text" name="nombre" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Apellido</label>
                        <input type="text" name="apellido" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Correo electrónico</label>
                        <input type="email" name="correo_electronico" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Teléfono</label>
                        <input type="text" name="telefono" class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Género</label>
                        <select name="id_genero" class="w-full border-gray-300 rounded">
                            @foreach($generos as $genero)
                                <option value="{{ $genero->id_genero }}">{{ $genero->genero }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Rol</label>
                        <select name="id_rol" class="w-full border-gray-300 rounded">
                            @foreach($roles as $rol)
                                <option value="{{ $rol->id_rol }}">{{ $rol->rol_nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('usuarios.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Cancelar</a>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
