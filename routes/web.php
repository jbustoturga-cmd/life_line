<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

/* 🔹 Página principal */
Route::get('/', function () {
    return view('welcome');
});

/* 🔹 Rutas protegidas con autenticación */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // CRUD de usuarios (index, create, store, edit, update, destroy)
        Route::resource('usuarios', UsuarioController::class);
    });

/* 🔹 Rutas de contacto */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'message' => 'required|string|max:500',
    ]);

    return back()->with('success', 'Formulario enviado correctamente (simulado)');
});
