<x-guest-layout>
    <div class="container">

    @section('title', 'recuperar contraseña')


        {{-- Imagen decorativa a la derecha --}}
        <div class="decorative"></div>

        <div class="form-card">
            <div class="logo">
                Life <span>Line</span>
                <img src="{{ asset('images/Group 22.png') }}" alt="Logo LifeLine" class="logi">
            </div>

            <div class="title">Restablecer Contraseña</div>

            <div class="description">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            {{-- Mensaje de estado --}}
            @if(session('status'))
                <div class="success">{{ session('status') }}</div>
            @endif

            {{-- Errores --}}
            <x-validation-errors class="error" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label for="email">Correo</label>
                <input id="email" type="email" name="email" placeholder="Ingresa tu correo" :value="old('email')" required autofocus>

                <button type="submit" class="btn">Enviar enlace de restablecimiento</button>
            </form>
        </div>
    </div>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f4f4fc 60%, #dcdcf4 60%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 500px;
        }

        /* Imagen decorativa a la derecha */
        .decorative {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 40%;
            background: url('{{ asset("images/Group 67.png") }}') no-repeat center;
            background-size: cover;
            opacity: 0.2;
            z-index: 0;
        }

        .form-card {
            position: relative;
            z-index: 1;
            background-color: white;
            padding: 50px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .logo span { color: #3c51a0; }
        .logi { width: 50px; margin-left: 8px; }

        .title {
            font-size: 28px;
            font-weight: bold;
            color: #2e3a75;
            margin-bottom: 15px;
        }

        .description {
            font-size: 14px;
            color: #555;
            margin-bottom: 25px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #3F4C7B;
            text-align: left;
        }

        input[type="email"] {
            width: 100%;
            padding: 14px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        input[type="email"]:focus {
            border-color: #3c51a0;
            box-shadow: 0 0 8px rgba(60, 81, 160, 0.2);
            outline: none;
        }

        .btn {
            margin-top: 25px;
            width: 100%;
            background-color: #1a2c54;
            color: #fff;
            padding: 14px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #2c3b6e;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .error ul {
            padding-left: 20px;
            margin-top: 10px;
            text-align: left;
        }
        .error li { color: red; font-size: 14px; margin-bottom: 4px; }

        .success {
            color: green;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</x-guest-layout>
