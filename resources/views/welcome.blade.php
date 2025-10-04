
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Life Line') }}</title>

  <style>
    body {
      margin: 20;
      font-family: 'Segoe UI', sans-serif;
      background-image: url('{{ asset('images/INICIO.png') }}'); 
      background-size: 1450px auto;
      background-position: center -40px;
      background-repeat: no-repeat;
      background-color: #C6CEEB;
    }

    nav {
      display: flex;
      gap: 40px;
    }

    header {
      background-color: #ffffff;
      color: rgb(56, 57, 99);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 100px;
      margin: 0;
    }

    .logo {
      font-weight: bold;
      margin-right: 30px;
      font-size: 30px;
      margin-left: -20px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .logo span {
      color: #4b6ee2;
      margin-right: -3;
    }

    .profile-icon {
      width: 100px;
      position: relative;
      top: 30px;
      right: -80px;
    }

    nav a {
      color: rgb(0, 0, 0);
      margin: 0 10px;
      text-decoration: none;
      border-width: 6px;
    }

    .login-btn {
      background-color: #3F4C7B;
      padding: 10px 80px;
      border-radius: 4px;
      color: #fff;
      cursor: pointer;
      font-size: 22px;
      text-decoration: none;
    }

    .main-section {
      padding: 100px;
      text-align: center;
      position: relative;
    }

    .main-section img {
      max-width: 400px;
      border-radius: 5px;
      margin-left: -700px;
    }

    h1 {
      font-size: 80px;
      position: relative;
      top: -400px;
      margin-left: 200px;
      color: #fff;
    }

    .register-btn {
      background-color: #282D4B;
      color: #fff;
      padding: 15px 140px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 30px;
      position: relative;
      top: -200px;
      left: 30px;
      text-decoration: none;
      display: inline-block;
    }

    .mascota {
      position: absolute;
      bottom: 260px;
      right: 30px;
      width: 120px;
    }

    .logi {
      position: relative;
      top: -30px;
      right: 8px;
      width: 50px;
    }

    a, button {
      transition: all 0.2s ease;
    }

    a:active, button:active {
      transform: scale(0.95);
      background-color: #1f2a6b;
    }
  </style>

  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

   <header>
    <div class="logo">
      Life <span><br>Line</span>
      <img src="{{ asset('images/Group 22.png') }}" class="logi" alt="Logo LifeLine">
    </div>

    {{-- Botón de login con rutas de Laravel --}}
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="login-btn">Inicio</a>
            @else
                <a href="{{ route('login') }}" class="login-btn">Iniciar sesión</a>
            @endauth
        </div>
    @endif

    <nav>
      <a href="{{ route('contact') }}">Contáctanos</a>
      <a href="mural">Mural</a>
      <a href="productos">Productos</a>
      <a href="#">⋯</a>
    </nav>

    <div class="profile-icon">
      <img src="{{ asset('images/Group 68.png') }}" class="logi" alt="Ícono de perfil">
    </div>
  </header>

  <section class="main-section">
    <img src="{{ asset('images/img3.jpg') }}" alt="Imagen principal">
    <h1>Conócenos</h1>

    {{-- Botón de registro con ruta de Laravel --}}
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="register-btn">Regístrate</a>
    @endif

    <img src="{{ asset('images/Group 182.png') }}" class="mascota" alt="Mascota">
  </section>

</body>
</html>

