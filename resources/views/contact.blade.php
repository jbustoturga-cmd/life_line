
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LifeLine - Contáctanos</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f4f4fc 60%, #dcdcf4 60%);
      color: #1a1a1a;
    }
    .container { max-width: 600px; margin: auto; padding: 40px 20px; text-align: center; }
    .header { background-color: #bbbbcf; border-radius: 10px; padding: 20px; margin-bottom: 30px; }
    .icon-section { display: flex; justify-content: center; gap: 40px; margin-top: 20px; }
    .contact-card {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px #ccc;
      width: 180px;
    }
    .contact-card img {
      width: 100px;  /* Imagen más grande */
      margin-bottom: 10px;
    }
    .contact-card p { margin: 5px 0; font-size: 14px; }
    form { text-align: left; margin-top: 30px; }
    label { display: block; margin-top: 15px; font-weight: bold; color: #3F4C7B; }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    textarea { height: 100px; resize: none; }

    /* 🔹 Checkbox alineado con el texto */
    .terms {
      margin-top: 15px;
      display: flex;
      align-items: center;
      font-size: 14px;
      gap: 6px; /* Espacio pequeño entre checkbox y texto */
    }
    .terms input {
      width: 16px;
      height: 16px;
    }
    .terms label {
      margin: 0;
      font-weight: normal;
      color: #555;
    }

    .btn {
      margin-top: 20px;
      background-color: #1a2c54;
      color: white;
      padding: 10px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .btn:hover { background-color: #2c3b6e; }
    .error { color: red; font-size: 14px; }
    .success { color: green; text-align: center; margin-bottom: 15px; }
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
    .contac { text-align: center; font-size: 40px; font-weight: bold; color: #2e3a75; }
  </style>
</head>
<body>

  <div class="logo">
    Life <span>Line</span>
    <img src="{{ asset('images/Group 22.png') }}" class="logi" alt="Logo LifeLine">
  </div>
  <div class="contac">Contáctanos</div>

  <div class="container">
    <div class="header">
      <div class="icon-section">
        <div class="contact-card">
          <img src="{{ asset('images/Group 28 (1).png') }}" alt="Teléfono">
          <p>000 000 0000</p>
          <p>Número Telefónico</p>
        </div>
        <div class="contact-card">
          <img src="{{ asset('images/Group 29.png') }}" alt="Correo">
          <p>LifeLine@mail.com</p>
          <p>Correo Electrónico</p>
        </div>
      </div>
    </div>

    {{-- Mensaje de éxito --}}
    @if(session('success'))
      <p class="success">{{ session('success') }}</p>
    @endif

    {{-- Errores de validación --}}
    @if ($errors->any())
      <div class="error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ url('/contact') }}" method="POST">
      @csrf
      <label>Nombre</label>
      <input type="text" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre" required>

      <label>Correo</label>
      <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required>

      <label>Comentario</label>
      <textarea name="message" placeholder="Escribe tu comentario" required>{{ old('message') }}</textarea>

      <div class="terms">
        <input type="checkbox" id="terms" required>
        <label for="terms">Acepta Términos y condiciones</label>
      </div>

      <button class="btn" type="submit">Enviar</button>
    </form>
  </div>

</body>
</html>
```
