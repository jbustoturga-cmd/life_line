<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    // Formulario para crear
    public function create()
    {
        return view('productos.create');
    }

    // Guardar producto nuevo
    public function store(Request $request)
    {
        $request->validate([
            'unidades_disponibles' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'required|string|max:255',
            'caracteristicas' => 'nullable|string',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    // Formulario para editar
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // Actualizar producto
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'unidades_disponibles' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'required|string|max:255',
            'caracteristicas' => 'nullable|string',
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar producto
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
