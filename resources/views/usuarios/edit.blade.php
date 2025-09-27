<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-6">

                <form method="POST" action="{{ route('usuarios.update', $usuario->id_usuario) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-bold">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Apellido</label>
                        <input type="text" name="apellido" value="{{ old('apellido', $usuario->apellido) }}" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Correo</label>
                        <input type="email" name="correo_electronico" value="{{ old('correo_electronico', $usuario->correo_electronico) }}" class="w-full border rounded p-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Teléfono</label>
                        <input type="text" name="telefono" value="{{ old('telefono', $usuario->telefono) }}" class="w-full border rounded p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Rol</label>
                        <select name="id_rol" class="w-full border rounded p-2">
                            <option value="">-- Seleccionar rol --</option>
                            @foreach($roles as $rol)
                                <option value="{{ $rol->id_rol }}" {{ $usuario->id_rol == $rol->id_rol ? 'selected' : '' }}>
                                    {{ $rol->rol_nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('usuarios.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancelar</a>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
