<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @section('title', 'Login')

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - Life Line</title>

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f4f4fc 60%, #dcdcf4 60%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    /* Imagen decorativa a la derecha */
    body::before {
      content: '';
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

    .container {
      position: relative;
      z-index: 1;
      max-width: 450px;
      width: 100%;
      background-color: #fff;
      padding: 50px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      text-align: center;
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 42px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .logo span { color: #3c51a0; }
    .logi { width: 50px; margin-left: 8px; }

    h2 {
      color: #2e3a75;
      margin-bottom: 30px;
      font-size: 28px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: 0.3s;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #3c51a0;
      box-shadow: 0 0 8px rgba(60, 81, 160, 0.2);
      outline: none;
    }

    .remember {
      display: flex;
      align-items: center;
      gap: 8px;
      margin: 12px 0;
      font-size: 14px;
    }
    .remember input[type="checkbox"] {
      appearance: none;
      -webkit-appearance: none;
      width: 18px;
      height: 18px;
      border: 2px solid #3F4C7B;
      border-radius: 4px;
      display: inline-block;
      position: relative;
      cursor: pointer;
    }
    .remember input[type="checkbox"]:checked {
      background-color: #3F4C7B;
    }
    .remember input[type="checkbox"]:checked::after {
      content: "✓";
      color: white;
      font-size: 12px;
      position: absolute;
      top: 0;
      left: 3px;
    }

    .btn-login {
      background-color: #1a2c54;
      color: #fff;
      border: none;
      padding: 14px;
      width: 100%;
      border-radius: 8px;
      font-size: 18px;
      cursor: pointer;
      margin-top: 20px;
      transition: all 0.3s ease;
      font-weight: bold;
    }
    .btn-login:hover {
      background-color: #2c3b6e;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .extra-links {
      margin-top: 20px;
      font-size: 14px;
    }
    .extra-links a {
      color: #2c3b6e;
      text-decoration: none;
      font-weight: bold;
      margin: 0 8px;
    }
    .extra-links a:hover { text-decoration: underline; }
  </style>
</head>
<body>

  <div class="container">
    <div class="logo">
      Life <span>Line</span>
      <img src="{{ asset('images/Group 22.png') }}" class="logi" alt="Logo LifeLine">
    </div>

    <h2>Iniciar Sesión</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo electrónico">

      <input id="password" type="password" name="password" required placeholder="Contraseña">

      <div class="remember">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Recordarme</label>
      </div>

      <button type="submit" class="btn-login">Ingresar</button>
    </form>

    <div class="extra-links">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
      @endif

      @if (Route::has('register'))
        <a href="{{ route('register') }}">Crear cuenta</a>
      @endif
    </div>
  </div>

</body>
</html>