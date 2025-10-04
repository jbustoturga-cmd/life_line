<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <!-- Contenedor principal con fondo -->
    <div class="relative min-h-screen flex items-center justify-center">
        <!-- Fondo con degradado -->
        <div class="absolute inset-0 z-0" 
             style="background: linear-gradient(to bottom, rgba(26,44,84,0.7), rgba(60,81,160,0.7)), url('{{ asset('images/img101.jpg') }}') center/cover no-repeat;">
        </div>

        <!-- Contenedor del formulario -->
        <div class="relative z-10 w-full max-w-3xl p-8 bg-white bg-opacity-90 rounded-2xl shadow-2xl">
            <h1 class="text-3xl font-bold text-[#1a2c54] text-center mb-8">Editar Usuario</h1>

            <form method="POST" action="{{ route('usuarios.update', $usuario->id_usuario) }}">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}"
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-[#3c51a0] focus:ring focus:ring-[#3c51a0]/30 transition" required>
                    </div>

                    <!-- Apellido -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">Apellido</label>
                        <input type="text" name="apellido" value="{{ old('apellido', $usuario->apellido) }}"
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-[#3c51a0] focus:ring focus:ring-[#3c51a0]/30 transition">
                    </div>

                    <!-- Correo -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">Correo</label>
                        <input type="email" name="correo_electronico" value="{{ old('correo_electronico', $usuario->correo_electronico) }}"
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-[#3c51a0] focus:ring focus:ring-[#3c51a0]/30 transition" required>
                    </div>

                    <!-- Teléfono -->
                    <div>
                        <label class="block font-semibold text-gray-700 mb-2">Teléfono</label>
                        <input type="text" name="telefono" value="{{ old('telefono', $usuario->telefono) }}"
                               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-[#3c51a0] focus:ring focus:ring-[#3c51a0]/30 transition">
                    </div>

                    <!-- Rol -->
                    <div class="md:col-span-2">
                        <label class="block font-semibold text-gray-700 mb-2">Rol</label>
                        <select name="id_rol"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-[#3c51a0] focus:ring focus:ring-[#3c51a0]/30 transition">
                            <option value="">-- Seleccionar rol --</option>
                            @foreach($roles as $rol)
                                <option value="{{ $rol->id_rol }}" {{ $usuario->id_rol == $rol->id_rol ? 'selected' : '' }}>
                                    {{ $rol->rol_nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Botones -->
                <div class="flex justify-end gap-4 mt-8">
                    <a href="{{ route('usuarios.index') }}" class="btn-action cancel">Cancelar</a>
                    <button type="submit" class="btn-action save">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- ---------------- Estilos ---------------- -->
    <style>
        /* Botones */
        .btn-action {
            padding: 0.5rem 1.5rem;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.95rem;
            color: #fff;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-action.save {
            background: linear-gradient(135deg, #3c51a0, #1a2c54);
            box-shadow: 0 6px 16px rgba(60,81,160,0.3);
        }
        .btn-action.save:hover {
            background: linear-gradient(135deg, #1a2c54, #3c51a0);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(60,81,160,0.5);
        }

        .btn-action.cancel {
            background: #6c757d;
            box-shadow: 0 4px 12px rgba(108,117,125,0.3);
        }
        .btn-action.cancel:hover {
            background: #495057;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(108,117,125,0.5);
        }

        /* Inputs y select */
        input, select {
            outline: none;
        }
    </style>
</x-app-layout>
