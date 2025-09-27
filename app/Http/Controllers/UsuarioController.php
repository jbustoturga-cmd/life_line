<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Trae todos los usuarios de la tabla 'usuarios'
        $usuarios = Usuario::all();

        // Envía los datos a la vista
        return view('usuarios.index', compact('usuarios'));
    }
}
