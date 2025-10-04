<x-app-layout>
    <x-slot name="header">
        <div class="logo">
            Life <span>Line</span>
            <img src="{{ asset('images/Group 22.png') }}" alt="Logo LifeLine" class="logi">
        </div>
        <h2 class="font-semibold text-2xl text-center text-gray-800 leading-tight mt-4">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <div class="dashboard-wrapper py-10 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 relative z-10">

            <!-- Tarjetas de resumen -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card">
                    <h3>Total Usuarios</h3>
                    <p>{{ \App\Models\User::count() }}</p>
                </div>

                <div class="card">
                    <h3>Último Registrado</h3>
                    <p>{{ \App\Models\User::latest()->first()->name ?? 'Sin registros' }}</p>
                </div>

                <div class="card">
                    <h3>Tu Email</h3>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Tabla de usuarios -->
            <div class="container mt-8">
                <h3 class="table-title">Lista de Usuarios</h3>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\User::all() as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <style>
        .dashboard-wrapper {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, #f4f4fc 60%, #dcdcf4 60%);
        }

        /* Imagen decorativa lateral */
        .dashboard-wrapper::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 40%;
            height: 100%;
            background: url('{{ asset("images/Group 67.png") }}') no-repeat center;
            background-size: contain;
            opacity: 0.15; /* desvanecida */
            z-index: 0;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 42px;
            font-weight: bold;
        }
        .logo span { color: #3c51a0; }
        .logi { width: 50px; margin-left: 8px; }

        .card {
            position: relative;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #2e3a75;
            z-index: 1;
        }
        .card p {
            font-size: 24px;
            margin-top: 10px;
            color: #1a2c54;
        }

        .container {
            position: relative;
            background: rgba(255,255,255,0.92);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .table-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: #2e3a75;
            font-weight: bold;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }
        .styled-table thead {
            background: #3c51a0;
            color: #fff;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            text-align: center;
        }
        .styled-table tbody tr:nth-child(even) {
            background-color: rgba(240, 240, 255, 0.7);
        }
    </style>
</x-app-layout>
