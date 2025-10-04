<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se definen todas las rutas web de la aplicación Life Line.
| Las rutas dentro del middleware 'auth:sanctum' requieren autenticación.
|
*/

/* 🔹 Página principal */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* 🔹 Rutas protegidas con autenticación */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD de usuarios
    Route::resource('usuarios', UsuarioController::class);

    // CRUD de productos
    Route::resource('productos', ProductoController::class);
});

/* 🔹 Rutas de contacto */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email|max:255',
        'message' => 'required|string|max:500',
    ]);

    // Aquí puedes agregar lógica real de envío de correo o guardado en BD
    return back()->with('success', 'Formulario enviado correctamente (simulado)');
});

/* 🔹 Ruta de mural/error 404 personalizada */
Route::get('/mural', function () {
    return view('error404'); // resources/views/error404.blade.php
})->name('mural');
