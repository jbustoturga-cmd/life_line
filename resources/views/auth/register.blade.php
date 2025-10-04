<x-guest-layout>
    @section('title', 'registro')

    <div class="logo">
        Life <span>Line</span>
        <img src="{{ asset('images/Group 22.png') }}" alt="Logo LifeLine" class="logi">
    </div>

    <div class="contac">Regístrate</div>

    <div class="container">
        {{-- Mensajes de error --}}
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre" required>

            <label for="email">Correo</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required>

            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" placeholder="Ingresa tu contraseña" required>

            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirma tu contraseña" required>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        {!! __('Acepto los :terms_of_service y :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline">Términos de Servicio</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline">Política de Privacidad</a>',
                        ]) !!}
                    </label>
                </div>
            @endif

            <button type="submit" class="btn">Registrarse</button>

            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="underline hover:text-gray-900">¿Ya tienes cuenta?</a>
            </div>
        </form>
    </div>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f4f4fc 60%, #dcdcf4 60%);
            color: #1a1a1a;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            font-weight: bold;
            margin: 20px 0;
        }
        .logo span { color: #3c51a0; }
        .logi { width: 50px; margin-left: 8px; }

        .contac {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #2e3a75;
            margin-bottom: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 40px 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #3F4C7B;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .terms {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 15px;
            font-size: 14px;
        }
        .terms input { width: 16px; height: 16px; }
        .terms label { margin: 0; color: #555; font-weight: normal; }

        .btn {
            margin-top: 20px;
            width: 100%;
            background-color: #1a2c54;
            color: white;
            padding: 12px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .btn:hover { background-color: #2c3b6e; }

        .error ul {
            padding-left: 20px;
            margin-top: 0;
        }
        .error li { color: red; font-size: 14px; margin-bottom: 4px; }

        .mt-4 { margin-top: 15px; }
        .text-center { text-align: center; }
    </style>
</x-guest-layout>

