<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // 👈 tu modelo
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // Obtiene todos los usuarios de tu tabla en la BD
        $usuarios = Usuario::all();

        // Envía los datos a la vista
        return view('usuarios.index', compact('usuarios'));
    }
}

