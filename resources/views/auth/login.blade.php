```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - Life Line</title>

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #2c3b6e;
      color: #1a1a1a;
    }

    .container {
      max-width: 400px;
      margin: 60px auto;
      background-color: #fff;
      padding: 40px 30px;
      border-radius: 6px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .logo span {
      color: #4b6ee2;
    }

    .logi {
      width: 50px;
      margin-left: 8px;
    }

    h2 {
      text-align: center;
      color: #3F4C7B;
      margin-bottom: 25px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    /* Checkbox personalizado */
    .remember {
      display: flex;
      align-items: center;
      gap: 8px;
      margin: 10px 0;
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
      background-color: #3F4C7B;
      color: #fff;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 6px;
      font-size: 18px;
      cursor: pointer;
      margin-top: 15px;
      transition: 0.3s;
    }

    .btn-login:hover {
      background-color: #2e375d;
    }

    .extra-links {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
    }

    .extra-links a {
      color: #2c3b6e;
      text-decoration: none;
      font-weight: bold;
      margin: 0 8px;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }
  </style>

  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

  <div class="container">
    <div class="logo">
      Life <span>Line</span>
      <img src="{{ asset('images/Group 22.png') }}" class="logi" alt="Logo LifeLine">
    </div>

    <h2>Iniciar Sesión</h2>

    <!-- Laravel Login Form -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Email -->
      <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo electrónico">

      <!-- Password -->
      <input id="password" type="password" name="password" required placeholder="Contraseña">

      <!-- Remember me -->
      <div class="remember">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Recordarme</label>
      </div>

      <!-- Submit -->
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
```

