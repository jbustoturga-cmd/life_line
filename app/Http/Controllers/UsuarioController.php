<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Role;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // 📌 Listado de usuarios
    public function index()
    {
        $usuarios = Usuario::with('role')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    // 📌 Formulario de creación
    public function create()
    {
        $roles = Role::all();
        return view('usuarios.create', compact('roles'));
    }

    // 📌 Guardar nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'nullable|string|max:100',
            'correo_electronico' => 'required|email|unique:usuarios,correo_electronico',
            'telefono' => 'nullable|string|max:20',
            'id_rol' => 'nullable|exists:roles,id_rol',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index')->with('ok', 'Usuario creado correctamente ✅');
    }

    // 📌 Formulario de edición
    public function edit(Usuario $usuario)
    {
        $roles = Role::all();
        return view('usuarios.edit', compact('usuario', 'roles'));
    }

    // 📌 Actualizar usuario
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'nullable|string|max:100',
            'correo_electronico' => 'required|email|unique:usuarios,correo_electronico,' . $usuario->id_usuario . ',id_usuario',
            'telefono' => 'nullable|string|max:20',
            'id_rol' => 'nullable|exists:roles,id_rol',
        ]);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('ok', 'Usuario actualizado correctamente ✅');
    }

    // 📌 Eliminar usuario
    public function destroy(Usuario $usuario)
    {
        try {
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('ok', 'Usuario eliminado correctamente 🗑️');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: el usuario tiene registros relacionados.');
        }
    }
}
