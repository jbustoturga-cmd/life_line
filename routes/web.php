<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

/* 🔹 Rutas de Usuarios */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/usuarios', [UsuarioController::class, 'index'])
    ->name('usuarios.index');

/* 🔹 Dashboard */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* 🔹 Rutas de Contacto */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    return back()->with('success', 'Formulario enviado correctamente (simulado)');
});
