<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página no encontrada - 404</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom, #98a7d7, #3b4d85);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      position: relative;
      width: 90%;
      max-width: 700px;
    }

    .container h1 {
      font-size: 40px;
      margin: 10px 0;
      color: white;
    }

    .container .code {
      font-size: 70px;
      font-weight: bold;
      color: white;
      margin: 10px 0;
    }

    .container p {
      font-size: 22px;
      color: white;
      margin-top: -10px;
    }

    .mascota {
      width: 240px;
      margin: 20px 0;
    }

    .buttons {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .buttons a {
      padding: 12px 25px;
      background-color: transparent;
      border: 2px solid white;
      color: white;
      text-decoration: none;
      font-size: 16px;
      border-radius: 6px;
      transition: 0.3s ease;
    }

    .buttons a:hover {
      background-color: white;
      color: #3b4d85;
      font-weight: bold;
    }

    .back-arrow {
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 30px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }
    
  </style>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

  <div class="container">
    <a href="{{ url('/') }}" class="back-arrow">←</a>
    <h1>Ups...!!</h1>
    <img src="{{ asset('images/Group 151.png') }}" alt="Mascota 404" class="mascota">
    <div class="code">404</div>
    <p>La página no ha sido encontrada</p>

    <div class="buttons">
      <a href="{{ url('/') }}">VOLVER AL INICIO</a>
      <a href="{{ route('contact') }}">CONTACTANOS</a>
    </div>
  </div>

</body>
</html>
